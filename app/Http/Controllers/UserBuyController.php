<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Transection;
use App\Invoice;
use App\InvoiceTransectionProduct;

class UserBuyController extends Controller
{
    function index($id)
    {
        $product = Products::find($id);
        return view('show.userBuy')
            ->withBuyProduct($product);
    }
    function store(Request $request)
    {
        $total = $request->total;
        $pid = $request->pid;
        $session = session('user');
        $user = $session->id;

        $transection = new Transection;
        $transection->total_price = $total;
        $transection->customer_id = $user;
        $transection->save();

            $invoice = new Invoice;
            // dd($crtp->product_id);
            $invoice->product_id = $pid;
            $invoice->quantity = "1";
            $invoice->price = $total;

            $invoice->total_price = $total;
            $invoice->status = "onprocess";
            $invoice->transection_id = $transection->id;
            $invoice->save();
            
            return redirect(route('orderlist'));
    }
}
