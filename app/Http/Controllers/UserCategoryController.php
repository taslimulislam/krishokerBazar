<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\products;


class UserCategoryController extends Controller
{
    function index()
    {
    	$upcoming = products::where('status', '=' , 'Upcomming')
        ->get();
        $category = category::all();

    	return view('show.index')
    	->withUpcomming($upcoming)
    	->withCategory($category);

    }

    }
