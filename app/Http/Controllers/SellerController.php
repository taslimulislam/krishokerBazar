<?php

namespace App\Http\Controllers;

use App\Seller;
use Illuminate\Http\Request;
use App\Http\Requests\SellerRequest;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $se= Seller::all();
        return view('admin.seller.index')
                    ->withSellers($se);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.seller.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SellerRequest $request)
    {
        $se = new Seller;
        $se->name = $request->name;
        $se->email = $request->email;
        $se->address = $request->address;
        $se->phone = $request->phone;
        $se->login_id = $request->login_id;
        $se->save();
        return redirect(route('seller.show',$se->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $se = Seller::find($id);

        return view('admin.seller.details')
                ->withSeller($se);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $se = Seller::find($id);

        return view('admin.seller.edit')
                ->withSeller($se);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $se = Seller::find($id);
        $se->name = $request->name;
        $se->email = $request->email;
        $se->address = $request->address;
        $se->phone = $request->phone;
        $se->update();
        return redirect(route('seller.show',$se->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $se = Seller::find($id);
        $se->delete();
        return redirect(route('seller.index'));
    }

    function delete($id)
    {
        $se = Seller::find($id);

        return view('admin.seller.delete')
                ->withSeller($se);
    }
}
