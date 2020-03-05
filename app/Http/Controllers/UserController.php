<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Seller;

class UserController extends Controller
{
    function index()
    {
        $session = session('user');
        $user = $session->id;
        $customer = Customer::where('login_id','=',$user)->first();
        return view('show.createSeller')
                ->withCustomer($customer);
    }
    function store(Request $request)
    {
        $session = session('user');
        $user = $session->id;
        $seller = new Seller;
        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->phone = $request->phone;
        $seller->address = $request->address;
        $seller->login_id = $user;
        $seller->save();
        return redirect(route('product.upload'));
    }
}
