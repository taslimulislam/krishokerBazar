<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CartRequest;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ca= Cart::all();
        return view('admin.cart.index')
                    ->withCarts($ca);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartRequest $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ca = Cart::find($id);

        return view('admin.cart.details')
                ->withCart($ca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ca = Cart::find($id);

        return view('admin.cart.edit')
                ->withCart($ca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(CartRequest $request, $id)
    {
        $ca = Cart::find($id);
        
        $ca->product_id = $request->product_id;
        $ca->quantity = $request->quantity;
        $ca->date_time = $request->date_time;
        
        $ca->update();

        return redirect(route('cart.show',$ca->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ca = Cart::find($id);
        $ca->delete();
        return redirect(route('cart.index'));
    }

    function delete($id)
    {
        $ad = Cart::find($id);

        return view('admin.cart.delete')
                ->withCart($ad);
    }


}
