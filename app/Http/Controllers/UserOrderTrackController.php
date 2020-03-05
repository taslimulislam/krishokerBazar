<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CartProduct;
use App\Transection;
use App\Invoice;
use App\InvoiceTransectionProduct;

use Illuminate\Support\Facades\DB;

class UserOrderTrackController extends Controller
{

    function index($id)
    {
        $track = InvoiceTransectionProduct::find($id);
        return view('show.orderTrack')
                ->withOrderTrack($track);
    }

    function orderList()
    {
        $session = session('user');
        $user = $session->id;
        $order = InvoiceTransectionProduct::where('customer_id','=',$user)->get();

        return view('show.orderList')
                ->withOrderList($order);
    }
    function transection()
    {
        $session = session('user');
        $user = $session->id;
        $product = CartProduct::where('customer_id','=',$user)->get();
        // $total = DB::table('cartproduct')->sum('selling_price');
        $cart = DB::table('cartlist')->where('customer_id', $user)
        ->get();


        $total = 0;

        foreach($cart as $crtp)
        {
            $total += $crtp->selling_price * $crtp->cart_quantity;
        }
        return view('show.transection')
                ->withCartProduct($product)
                ->withCartTotal($total);
    }
    function store(Request $request)
    {
        $total = $request->total;
        $session = session('user');
        $user = $session->id;

        $transection = new Transection;
        $transection->total_price = $total;
        $transection->customer_id = $user;
        $transection->save();

        $cart = CartProduct::where('customer_id','=',$user)->get();

        foreach($cart as $c)
        {
            $invoice = new Invoice;
            // dd($crtp->product_id);
            $invoice->product_id = $c->product_id;
            $invoice->quantity = $c->quantity;
            $invoice->price = $c->selling_price;

            $invoice->total_price = $c->quantity * $c->selling_price;
            $invoice->status = "onprocess";
            $invoice->transection_id = $transection->id;
            $invoice->save();
            
        }
        $cart = DB::table('cart')->where('customer_id', '=', $user)->delete();
        // echo "process is sucessful";
        return redirect(route('orderlist'));
    }
}
