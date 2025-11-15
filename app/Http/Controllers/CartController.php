<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $cart = session('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $quantity = $item['quantity'] ?? 0;
            $total += $item['price'] * $quantity;
        }


        return view('site.layout.nav-area', compact('cart', 'total'));
    }
    public function addToCart($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $quantity = $quantity = $request->input('quantity', 1);

        $cart = session('cart', []);

        if($product->discount_price){
            $price = $product->discount_price;
        }else{
            $price = $product->price;
        }

        $cart[$id] = [
            'name' => $product->name,
            'price'=> $product->price,
            'quantity' => $quantity, 
            'photo' => $product->photo
        ];

        session()->put('cart', $cart);
        // dd($cart[$id]);
        return redirect()->back()->with('success', 'Added to cart');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function cartPage()
    {
        $cart = session('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $quantity = $item['quantity'] ?? 0;
            $total += $item['price'] * $quantity;
        }

        return view('site.pages.product-details.cartPage.cart', compact('cart', 'total'));
    }

     /**
     * Update the specified resource in storage.
     */
    public function cartUpdate(Request $request)
    {
        $cart = session('cart', []);

        if ($request->type == 'update') {
            $cart[$request->product_id]['quantity'] = $request->quantity;
        } elseif ($request->type == 'delete') {
            unset($cart[$request->product_id]);
        }

         $total = 0;
            foreach ($cart as $item) {
                $quantity = $item['quantity'] ?? 0;
                $total += $item['price'] * $quantity;
            }
        
        session()->put('cart', $cart);

        $view = view('site.pages.product-details.cartPage.cartProduct', ['cart' => $cart])->render();

        return response()->json([
                                'success' => true,
                                'html' => $view,
                                'total' => $total
                            ]);
    }


  




}
