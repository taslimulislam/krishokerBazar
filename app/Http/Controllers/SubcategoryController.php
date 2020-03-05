<?php

namespace App\Http\Controllers;

use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Requests\SubcategoryRequest;
use App\Http\Requests\SubcategoryRequest2;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $su= Subcategory::all();
        return view('admin.subcategory.index')
                    ->withSubcategorys($su);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubcategoryRequest $request)
    {
        $pic = $request->pic;
        $imgname = $pic->getClientOriginalName();
        $imgPath = "dist/img/subCategory/".$imgname;
        $pic->move('dist/img/subCategory',$imgname);
        $su = new Subcategory;
        $su->name = $request->name;
        $su->description = $request->description;
        $su->category_id = $request->category_id;
        $su->img_path = $imgPath;
        $su->save();
        return redirect(route('subcategory.show',$su->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $su = Subcategory::find($id);

        return view('admin.subcategory.details')
                ->withSubcategory($su);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $su = Subcategory::find($id);

        return view('admin.subcategory.edit')
                ->withSubcategory($su);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(SubcategoryRequest2 $request, $id)
    {
        $pic = $request->pic;
        $imgname = $pic->getClientOriginalName();
        $imgPath = "dist/img/subCategory/".$imgname;
        $pic->move('dist/img/subCategory',$imgname);
        $su = Subcategory::find($id);
        $su->name = $request->name;
        $su->description = $request->description;
        $su->category_id = $request->category_id;
        $su->img_path = $imgPath;
        $su->update();
        return redirect(route('subcategory.show',$su->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $su = Subcategory::find($id);
        $su->delete();
        return redirect(route('subcategory.index'));
    }

    function delete($id)
    {
        $se = Subcategory::find($id);

        return view('admin.subcategory.delete')
                ->withSubcategory($se);
    }
}
