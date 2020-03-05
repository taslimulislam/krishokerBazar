<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $im= Image::all();
        return view('admin.image.index')
                    ->withImages($im);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageRequest $request)
    {
        $im = new Image;
        $im->product_id = $request->product_id;
        $im->img_path = $request->img_path;
        $im->save();
        return redirect(route('image.show',$im->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $im = Image::find($id);

        return view('admin.image.details')
                ->withImage($im);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $im = Image::find($id);

        return view('admin.image.edit')
                ->withImage($im);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $im = Image::find($id);
        $im->product_id = $request->product_id;
        $im->img_path = $request->img_path;
        
        $im->update();

        return redirect(route('image.show',$im->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $im = Image::find($id);
        $im->delete();
        return redirect(route('image.index'));
    }

    function delete($id)
    {
        $im = Image::find($id);

        return view('admin.image.delete')
                ->withImage($im);
    }
}
