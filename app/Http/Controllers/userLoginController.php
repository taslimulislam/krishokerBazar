<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use App\userLogin;

class userLoginController extends Controller
{

    public function create()
    {
        return view('userLogin.create');
    }

    function login(Request $req)
    {

    	$userName= $req->userName;
        $password=$req->password;
        $req->session()->put("olduserName",$userName);
    	$user = userLogin::where('userName','=',$userName)
    					->where('password','=',$password)
    					->first();
    	// dd($user);
        // return;
        //print_r($userName . " " .$password);
        //
        if($user==null)
       {
           
            $req->session()->flash("msg",'false');
            return redirect(Route('login.create'));

       }

       if($user != null)
        {
            $req->session()->put("loggedUser",true);
            
        }
        //    print_r($user);
        $req->session()->put("user",$user);
        // dd($req->session());
        $curl1 = $req->session()->get("_previous");
        if($curl1["url"] == "http://localhost:8000/login")
        {
            // $request->session()->flash('curl',url()->current());
            return redirect(Route('index'));
        }
        
            // dd($curl1["url"]);
            return redirect($curl1["url"]);
        


    }
    function logout(Request $req){

        $req->session()->flush();
        return redirect(Route('login.create'));
    }
}
