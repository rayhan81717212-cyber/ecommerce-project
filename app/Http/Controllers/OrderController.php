<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\OrderItem;
use App\Models\Payment;


class OrderController extends Controller
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

        $shipping_fee = $total >= 1000 ? 0 : 60;
        $grand_total = $total + $shipping_fee;
        // dd($cart, $total);
        return view('site.pages.product-details.checkOut.checkout', compact('cart', 'total'));
    }

   
    public function placeOrder(Request $request)
    {
        // Validate
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);

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

        $shipping_fee = $request->shipping_fee ?? 0; 
        $grand_total = $total + $shipping_fee;

        // dd($shipping_fee);
        $request->validate([
        'payment_method' => 'required',
        ]);


        // Create Order
        $order = Order::create([
            'user_id' => auth()->id() ?? null,
            'order_number' => 'ORD-' . strtoupper(uniqid()),
            'amount' => $total,
            'shipping_fee' => $shipping_fee,
            'grand_total' => $grand_total,
            'payment_method' => $request->payment_method,
            'payment_status' => 'pending',
            'status' => "pending",
        ]);

        // Save Billing Address
        OrderAddress::create([
            'order_id' => $order->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
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
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Clear cart
        session()->forget('cart');
        
        return redirect()->route('order.success', ['id' => $order->id]);
    }

    public function success($orderId)
    {
        
        $order = Order::from('orders as o')
                ->select('o.*', 'oa.first_name', 'oa.last_name', 'oa.phone', 'oa.email', 'oa.address', 'oa.city')
                ->join('order_addresses as oa', 'oa.order_id', '=', 'o.id')
                ->where('o.id', $orderId)
                ->first();

        // dd($order);
        return view('site.pages.product-details.checkOut.success', compact('order'));
    }

    // admin Order show
    public function index(){

        $order = Order::from('orders as o')
                        ->select(
                            'o.*',
                            'oa.first_name',
                            'oa.last_name',
                            'oa.phone',
                            'oa.email',
                            'oa.address'
                        )
                        ->join('order_addresses as oa', 'oa.order_id', '=', 'o.id')
                        ->orderBy('o.id', "desc")
                        ->paginate(10);
      
        // dd($order);
        return view('admin.pages.orderManagement.allOrder',  compact('order'));
     
    }
    // admin Order clan
    public function cancleOrder(){

        $order = Order::from('orders as o')
                        ->select(
                            'o.*',
                            'oa.first_name',
                            'oa.last_name',
                            'oa.phone',
                            'oa.email',
                            'oa.address'
                        )
                        ->join('order_addresses as oa', 'oa.order_id', '=', 'o.id')
                        ->orderBy('o.id', "desc")
                        ->where('o.status', "cancle")
                        ->paginate(10);
      
        // dd($order);
        return view('admin.pages.orderManagement.cancleOrder',  compact('order'));
     
    }
    // admin Order pending
    public function pendingOrder(){

        $order = Order::from('orders as o')
                        ->select(
                            'o.*',
                            'oa.first_name',
                            'oa.last_name',
                            'oa.phone',
                            'oa.email',
                            'oa.address'
                        )
                        ->join('order_addresses as oa', 'oa.order_id', '=', 'o.id')
                        ->orderBy('o.id', "desc")
                        ->where('o.status', "pending")
                        ->paginate(10);
      
        // dd($order);
        return view('admin.pages.orderManagement.pendingOrder',  compact('order'));
     
    }
    // admin Order delivery
    public function deliveredOrder(){

        $order = Order::from('orders as o')
                        ->select(
                            'o.*',
                            'oa.first_name',
                            'oa.last_name',
                            'oa.phone',
                            'oa.email',
                            'oa.address'
                        )
                        ->join('order_addresses as oa', 'oa.order_id', '=', 'o.id')
                        ->orderBy('o.id', "desc")
                        ->where('o.status', "delevered")
                        ->paginate(10);
      
        // dd($order);
        return view('admin.pages.orderManagement.deliveredOrder',  compact('order'));
     
    }

}
