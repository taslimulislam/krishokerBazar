<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerLogin;
use App\Login;
use App\Customer;
use App\ProductCatSubcat;


class userProfilecontroller extends Controller
{
    function profileShow()
    {
        $session = session('user');
        $user = $session->id;
        $customer = CustomerLogin::where('login_id', '=' ,$user)->first();
        $products = ProductCatSubcat::where('seller_id', '=', $user)->get();
        // dd($products);
        return view('show.userProfileShow')
            ->withCustomer($customer)
            ->withProducts($products);
    }
    function profileEdit()
    {
        $session = session('user');
        $user = $session->id;
        $customer = CustomerLogin::where('login_id',$user)->first();
        // dd($customer);
        return view('show.userProfileEdit')
            ->withCus($customer);
    }
    function profileUpdate(Request $request)
    {
        $session = session('user');
        $user = $session->id;
        $login = Login::find($user);
        $user = Customer::where('login_id','=',$user)->first();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $login->userName = $request->userName;
        $login->password = $request->password;
        $user->update();
        $login->update();
        return redirect(route('profile'));
    }
}
