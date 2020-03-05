<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminMainController extends Controller
{
    function index()
    {
        // return view('admin.layout.main');
        return view('admin.index');
    }
}
