<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use App\Http\Requests\LocationRequest;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lo= Location::all();
        return view('admin.location.index')
                    ->withLocations($lo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationRequest $request)
    {
        $lo = new Location;
        $lo->customer_id = $request->customer_id;
        $lo->seller_id = $request->seller_id;
        $lo->location = $request->location;
        $lo->save();
        return redirect(route('location.show',$lo->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lo = Location::find($id);

        return view('admin.location.details')
                ->withLocation($lo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lo = Location::find($id);

        return view('admin.location.edit')
                ->withLocation($lo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lo = Location::find($id);
        $lo->customer_id = $request->customer_id;
        $lo->seller_id = $request->seller_id;
        $lo->location = $request->location;
        
        $lo->update();

        return redirect(route('location.show',$lo->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lo = Location::find($id);
        $lo->delete();
        return redirect(route('location.index'));
    }

    function delete($id)
    {
        $lo = Location::find($id);

        return view('admin.location.delete')
                ->withlocation($lo);
    }
}
