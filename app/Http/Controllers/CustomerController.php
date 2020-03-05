<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cu= Customer::all();
        return view('admin.customer.index')
                    ->withCustomers($cu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cu = Customer::find($id);

        return view('admin.customer.details')
                ->withCustomer($cu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cu = Customer::find($id);

        return view('admin.customer.edit')
                ->withCustomer($cu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cu = Customer::find($id);
        $cu->name = $request->name;
        $cu->email = $request->email;
        $cu->address = $request->address;
        $cu->phone = $request->phone;
        $cu->img_path = $request->img_path;
        
        $cu->update();

        return redirect(route('customer.show',$cu->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cu = Customer::find($id);
        $cu->delete();
        return redirect(route('customer.index'));
    }

    function delete($id)
    {
        $cu = Customer::find($id);

        return view('admin.customer.delete')
                ->withCustomer($cu);
    }
}
