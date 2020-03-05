<?php

namespace App\Http\Controllers;
use App\userLogin;
use App\userRegister;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;

class UserRegisterController extends Controller
{
    public function create()
    {
        return view('userRegister.create');
    }

    function store(UserRegisterRequest $req){

    	$ul = new userLogin;
    	$ul->userName = $req->userName;
        $ul->password = $req->password;
        $ul->type = 'user';
        
    	
        $ul->save();


        $ur = new userRegister;
        $ur->login_id = $ul->id;
        $ur->name = $req->userName;
        $ur->address = $req->address;
        $ur->phone = $req->phone;
        $ur->save();
        

    	$req->session()->put("user",$ul);
    	return redirect(Route('login.create'));
    	
    }
}
