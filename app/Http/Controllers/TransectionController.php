<?php

namespace App\Http\Controllers;

use App\Transection;
use Illuminate\Http\Request;
use App\Http\Requests\TransectionRequest;

class TransectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tr= Transection::all();
        return view('admin.transection.index')
                    ->withTransections($tr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransectionRequest $request)
    {
        $tr = new Transection;
        $tr->total_price = $request->total_price;
        $tr->date_time = $request->date_time;
        $tr->customer_id = $request->customer_id;
        $tr->save();
        return redirect(route('transection.show',$tr->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transection  $transection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tr = Transection::find($id);

        return view('admin.transection.details')
                ->withTransection($tr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transection  $transection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tr = Transection::find($id);

        return view('admin.transection.edit')
                ->withTransection($tr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transection  $transection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tr = Transection::find($id);
        $tr->total_price = $request->total_price;
        $tr->date_time = $request->date_time;
        $tr->customer_id = $request->customer_id;
        $tr->update();
        return redirect(route('transection.show',$tr->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transection  $transection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tr = Transection::find($id);
        $tr->delete();
        return redirect(route('transection.index'));
    }

    function delete($id)
    {
        $tr = Transection::find($id);

        return view('admin.transection.delete')
                ->withTransection($tr);
    }
    
    
}
