<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryRequestEdit;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat= Category::all();
        return view('admin.category.index')
                    ->withCategorys($cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        
        
        $pic = $request->pic;
        $imgname = $pic->getClientOriginalName();
        $imgPath = "dist/img/category/".$imgname;
        $pic->move('dist/img/category',$imgname);
        $cat = new Category;
        $cat->name = $request->name;
        $cat->img_path = $imgPath;
        $cat->save();

        return redirect(route('category.show',$cat->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Category::find($id);

        return view('admin.category.details')
                ->withCategory($cat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = Category::find($id);

        return view('admin.category.edit')
                ->withCategory($cat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequestEdit $request, $id)
    {
        $pic = $request->pic;
        $imgname = $pic->getClientOriginalName();
        $imgPath = "dist/img/category/".$imgname;
        $pic->move('dist/img/category',$imgname);
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->img_path = $imgPath;
        $cat->update();

        return redirect(route('category.show',$cat->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();
        return redirect(route('category.index'));
    }

    function delete($id)
    {
        $cat = Category::find($id);

        return view('admin.category.delete')
                ->withCategory($cat);
    }
}
