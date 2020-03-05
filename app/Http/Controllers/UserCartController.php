<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\CartProduct;
use Illuminate\Support\Facades\DB;

class UserCartController extends Controller
{
    function index()
    {
        $session = session('user');
        $user = $session->id;
        if($user == null)
        {
            return view('login.create');
        }
        else
        {
            $cart = CartProduct::where('customer_id', '=', $user)->get();
            return view('show.cart')
                ->withCart($cart);
        }
    }
    function addToCart(Request $request)
    {
        $session = session('user');
        $cid = $session->id;
        $pid = $request->pid;
        $quantity = $request->quantity;
        //return $cid." ".$pid." ".$quantity;

        $cart = Cart::where('product_id', '=', $pid)
        ->where('customer_id', '=', $cid)->first();

        // return $cart;

        

        if($cart == null)
        {

            $cart = new Cart;
            $cart->product_id = $pid;
            $cart->customer_id = $cid;
            $cart->quantity = 1;
            $cart->save();
            return $cart->quantity;
        }
        else
        {
            if($cart->quantity == 1 & $quantity < 1)
            {
                return $cart->quantity;
            }
            $cart = Cart::find($cart->id);
            $cart->quantity = $cart->quantity + $quantity;
            $cart->update();
            return $cart->quantity;
        }

    }
    function cartTt()
    {
        $session = session('user');
        $cid = $session->id;
        //return $cid." ".$pid." ".$quantity;

        $cart = DB::table('cartlist')->where('customer_id', $cid)
        ->get();


        $total = 0;

        foreach($cart as $crtp)
        {
            $total += $crtp->selling_price * $crtp->cart_quantity;
        }
        return $total;

    }
    function deleteCart(Request $request)
    {
        $id = $request->id;
        
        $cart = Cart::find($id);
        $cart->delete();
        return "Cart deleted sucessfully";

    }
    function updateCart(Request $request)
    {
        $cid = session('user');
        $pid = $request->pid;
        $quantity = $request->quantity;
        //return $cid." ".$pid." ".$quantity;

        $cart = Cart::where('product_id', '=', $pid)
        ->where('customer_id', '=', $cid)->first();

        //return $cart;

        if($cart != null)
        {
            $cart = Cart::find($cart->id);
            $cart->quantity = $quantity;
            $cart->update();
            return "This Product is available in cart";
            
        }
        else
        {
            return "This product is added into cart";
        }

    }
}
