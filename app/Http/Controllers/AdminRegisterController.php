<?php

namespace App\Http\Controllers;
use App\AdminLogin;
use App\AdminRegister;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRegisterRequest;

class AdminRegisterController extends Controller
{
    public function create()
    {
        return view('admin.adminRegister.create');
    }

    function store(AdminRegisterRequest $req){
        
    	$ul = new AdminLogin;
    	$ul->userName = $req->userName;
        $ul->password = $req->password;
        $ul->type = 'admin';
        
    	
        $ul->save();


        $ur = new AdminRegister;
        $ur->login_id=$ul->id;
        $ur->name = $req->userName;
        $ur->phone = $req->phone;
        $ur->email = $req->email;
        $ur->save();
        

        $req->session()->put("admin",$ul);
        
    	return redirect(route('adminMain.index'));
    	
    }
}
