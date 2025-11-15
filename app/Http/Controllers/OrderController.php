<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


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

        // dd($cart, $total);
        return view('site.pages.product-details.checkOut.checkout', compact('cart', 'total'));
    }

   public function checkoutStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);

        session()->put('customer', [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect()->route('payment.page');
    }

}
