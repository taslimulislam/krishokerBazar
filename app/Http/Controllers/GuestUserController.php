<?php

namespace App\Http\Controllers;

use App\GuestUser;
use Illuminate\Http\Request;
use App\Http\Requests\GuestUserRequest;

class GuestUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gu= GuestUser::all();
        return view('admin.guestUser.index')
                    ->withGuests($gu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guestUser.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuestUserRequest $request)
    {
        $gu = new GuestUser;
        $gu->name = $request->name;
        $gu->address = $request->address;
        $gu->phone = $request->phone;
        $gu->save();
        return redirect(route('guestUser.show',$gu->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GuestUser  $guestUser
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gu = GuestUser::find($id);

        return view('admin.guestUser.details')
                ->withGuest($gu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GuestUser  $guestUser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gu = GuestUser::find($id);

        return view('admin.guestUser.edit')
                ->withGuest($gu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GuestUser  $guestUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gu = GuestUser::find($id);
        $gu->name = $request->name;
        $gu->address = $request->address;
        $gu->phone = $request->phone;
        
        $gu->update();

        return redirect(route('guestUser.show',$gu->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GuestUser  $guestUser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gu = GuestUser::find($id);
        $gu->delete();
        return redirect(route('guestUser.index'));
    }

    function delete($id)
    {
        $cu = GuestUser::find($id);

        return view('admin.guestUser.delete')
                ->withGuest($cu);
    }
}
