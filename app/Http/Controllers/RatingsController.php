<?php

namespace App\Http\Controllers;

use App\Ratings;
use Illuminate\Http\Request;
use App\Http\Requests\RatingsRequest;

class RatingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ra= Ratings::all();
        return view('admin.ratings.index')
                    ->withRatings($ra);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RatingsRequest $request)
    {
        $ra = new Ratings;
        $ra->product_id = $request->product_id;
        $ra->customer_id = $request->customer_id;
        $ra->date_time = $request->date_time;
        $ra->rate = $request->rate;
        $ra->save();
        return redirect(route('ratings.show',$ra->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ra = Ratings::find($id);

        return view('admin.ratings.details')
                ->withRatings($ra);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ra = Ratings::find($id);

        return view('admin.ratings.edit')
                ->withRatings($ra);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ra = Ratings::find($id);
        $ra->product_id = $request->product_id;
        $ra->customer_id = $request->customer_id;
        $ra->date_time = $request->date_time;
        $ra->rate = $request->rate;
        $ra->update();
        return redirect(route('ratings.show',$ra->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ratings  $ratings
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ra = Ratings::find($id);
        $ra->delete();
        return redirect(route('ratings.index'));
    }

    function delete($id)
    {
        $pr = Ratings::find($id);

        return view('admin.ratings.delete')
                ->withRatings($pr);
    }
}
