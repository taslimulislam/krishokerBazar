<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;
use App\Http\Requests\InvoiceRequest;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $in= Invoice::all();
        return view('admin.invoice.index')
                    ->withInvoices($in);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceRequest $request)
    {
        $in = new Invoice;
        $in->product_id = $request->product_id;
        $in->unit_price_quantity = $request->unit_price_quantity;
        $in->total_price = $request->total_price;
        $in->status = $request->status;
        $in->transection_id = $request->transection_id;
        $in->save();
        return redirect(route('invoice.show',$in->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $in = Invoice::find($id);

        return view('admin.invoice.details')
                ->withInvoice($in);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $in = Invoice::find($id);

        return view('admin.invoice.edit')
                ->withInvoice($in);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $in = Invoice::find($id);
        $in->product_id = $request->product_id;
        $in->unit_price_quantity = $request->unit_price_quantity;
        $in->total_price = $request->total_price;
        $in->status = $request->status;
        $in->transection_id = $request->transection_id;
        
        $in->update();

        return redirect(route('invoice.show',$in->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $in = Invoice::find($id);
        $in->delete();
        return redirect(route('invoice.index'));
    }

    function delete($id)
    {
        $in = Invoice::find($id);

        return view('admin.invoice.delete')
                ->withInvoice($in);
    }
}
