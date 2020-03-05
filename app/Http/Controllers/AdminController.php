<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ad= Admin::all();
        return view('admin.admins.index')
                    ->withAdmins($ad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad = Admin::find($id);

        return view('admin.admins.details')
                ->withAdmin($ad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Admin::find($id);

        return view('admin.admins.edit')
                ->withAdmin($ad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
    {
        $ad = Admin::find($id);
        $pic = $request->pic;
        $imgname = $pic->getClientOriginalName();
        $imgPath = "dist/img/admin/".$imgname;
        $pic->move('dist/img/admin',$imgname);
        $ad->phone = $request->phone;
        $ad->email = $request->email;
        dd($ad->email);
        
        $ad->img_path = $imgPath;
        $ad->update();

        return redirect(route('admin.show',$ad->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Admin::find($id);
        $ad->delete();
        return redirect(route('admin.index'));
    }

    function delete($id)
    {
        $ad = Admin::find($id);

        return view('admin.admins.delete')
                ->withAdmin($ad);
    }
}
