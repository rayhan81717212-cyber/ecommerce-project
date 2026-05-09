<?php

namespace App\Http\Controllers\SiteController;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use App\Notifications\OrderPlacedNotification;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function checkoutPage()
    {
        $cart = session('cart', []);

        $total = 0;

        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $shipping_fee = 60;

        $grand_total = $total + $shipping_fee;

        return view('site.pages.opderPlace.orderPlace', compact('cart','total','shipping_fee', 'grand_total'));
    }

   
    public function placeOrder(Request $request)
    {
       
        if (!auth()->check()) {
              return redirect('/login')->with('error', 'Please login first.');
         }
        // Get Cart
        $cart = session('cart', []);
        if (empty($cart)) {
            return back()->with('error', 'Your cart is empty.');
        }

        // Calculate Total
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $shipping_fee = 60; 
        $grand_total = $total + $shipping_fee;

        // dd($shipping_fee);
        $request->validate([
        'payment_method' => 'required',
        ]);


        // Create Order
        $order = Order::create([
            'user_id' => auth()->id(),
            'amount' => $total,
            'shipping_fee' => $shipping_fee,
            'grand_total' => $grand_total,
            'payment_method' => $request->payment_method,
            'payment_status' => 'pending',
            'status' => "pending",
        ]);

    

        // Save Payment
        Payment::create([
            'order_id' => $order->id,
            'payment_method' => $request->payment_method,
            'amount' => $total,
            'shipping_fee' => $shipping_fee,
            'grand_total' => $grand_total,
            'status' => "pending"
        ]);



        // Save Order Items
        foreach ($cart as $productId => $item) {

            $product = Product::find($productId);

            // dd($product);

            if (!$product) continue;

          OrderItem::create([
                'order_id' => $order->id,
                'order_number' => 'ORD-' . strtoupper(uniqid()),
                'vendor_id' => $product->user_id ?? 0,
                'product_id' => $product->id,
                'quantity' => $item['quantity'],
                'price' => $product->price,
                'status'=>'pending'
            ]);

            }

            // customers notification
            $user = auth()->user();

            $user->notify(new OrderPlacedNotification([
                'title' => 'Order Placed',
                'message' => 'Your order has been placed successfully',
                'order_id' => $order->id
            ]));
            
            // vendor notification
            $orderItems = OrderItem::where('order_id', $order->id)
            ->with('product')
            ->get()
            ->groupBy('vendor_id');

            foreach ($orderItems as $vendorId => $items) {

                $vendor = \App\Models\User::find($vendorId);

                if (!$vendor){
                continue; 
                } 

                $productNames = $items->pluck('product.name')->implode(', ');

                $vendor->notify(new OrderPlacedNotification([
                    'title' => 'New Order Received',
                    'message' => 'Sold products: ' . $productNames,
                    'order_id' => $order->id
                ]));
            }

            // admin Notification
            $admins = User::where('role_id', 1)->get();

            $orderItems = OrderItem::where('order_id', $order->id)
                ->with('product')
                ->get();

            $productNames = $orderItems->pluck('product.name')->implode(', ');

            foreach ($admins as $admin) {
                $admin->notify(new OrderPlacedNotification([
                    'title' => 'New Order',
                    'message' => 'Order items: ' . $productNames,
                    'order_id' => $order->id
                ]));
            }

        // Clear cart
        session()->forget('cart');
        
        return redirect()->route('order.success', ['id' => $order->id]);
    }

    public function success($orderId)
    {
        
        $order = Order::select('order_number')->where('id', $orderId);

    
        return view('site.pages.opderPlace.orderSuccess', compact('order'));
    }
}
