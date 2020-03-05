<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lo= Login::all();
        return view('admin.login.index')
                    ->withLogins($lo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.login.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lo = Login::find($id);

        return view('admin.login.details')
                ->withLogin($lo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lo = Login::find($id);

        return view('admin.login.edit')
                ->withLogin($lo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(LoginRequest $request, $id)
    {
        $lo = Login::find($id);
        
        $lo->userName = $request->userName;
        $lo->password = $request->password;
        $lo->type = $request->type;
        $lo->update();
        return redirect(route('login.show',$lo->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lo = Login::find($id);
        $lo->delete();
        return redirect(route('login.index'));
    }

    function delete($id)
    {
        $lo = Login::find($id);

        return view('admin.login.delete')
                ->withLogin($lo);
    }
}
