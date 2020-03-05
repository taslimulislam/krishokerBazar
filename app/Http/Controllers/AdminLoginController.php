<?php

namespace App\Http\Controllers;
use App\AdminLogin;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function create()
    {
        return view('admin.adminLogin.create');
    }

    function login(Request $req)
    {

    	$userName= $req->userName;
        $password=$req->password;
        $req->session()->put("olduserName",$userName);
    	$admin = AdminLogin::where('userName','=',$userName)
    					->where('password','=',$password)
    					->first();
    	// dd($user);
        // return;
        //print_r($userName . " " .$password);
        //
        if($admin==null)
       {
           
            $req->session()->flash("msg",'false');
            return redirect(Route('adminLogin.create'));

       }
       if($admin != null)
        {
            $req->session()->put("loggedUser",true);
            
        }
        //    print_r($user);
        $req->session()->put("admin",$admin);
        //echo $req->session()->all();
        return redirect(route('adminMain.index'));


    }
    function logout(Request $req){

        $req->session()->flush();
        return redirect(route('adminLogin.create'));
    }
}
