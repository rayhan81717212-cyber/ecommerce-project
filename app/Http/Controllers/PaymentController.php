<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\Payment;
use App\Models\OrderItem;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::from('payments as p')
                        ->select('p.*', 'o.order_number', 'oa.first_name', 'oa.last_name')
                        ->join('orders as o', 'p.order_id', '=', 'o.id')
                        ->join('order_addresses as oa', 'oa.order_id', '=', 'o.id')
                        ->orderBy('p.id', "desc")
                        ->paginate(10);


        // dd($payment); 

        return view('admin.pages.paymentMethod.index', compact('payment'));
    }

    public function printInvoice($id){

        $orderInfo = Payment::from('payments as p')
            ->select('p.*','oa.first_name','oa.last_name','oa.phone','oa.email','oa.address','oa.country','oa.city', 'o.order_number')
            ->join('orders as o', 'p.order_id', '=', 'o.id')
            ->join('order_addresses as oa', 'oa.order_id', '=', 'p.order_id')
            ->where('p.id', $id)
            ->first();

    $orderItem = OrderItem::from('order_items as oi')
                        ->select('oi.*', 'prod.name as product')
                        ->join('products as prod', 'oi.product_id', '=', 'prod.id')
                        ->join('payments as pay', 'pay.order_id', '=', 'oi.order_id')
                        ->where('pay.id', $id)
                        ->get();

        // dd($orderInfo, $orderItem);

        return view('admin.pages.paymentMethod.invoice', compact('orderInfo', 'orderItem'));
    }

    

}
