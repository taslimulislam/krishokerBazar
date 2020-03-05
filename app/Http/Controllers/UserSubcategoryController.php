<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subCategory;

class UserSubcategoryController extends Controller
{
    function index()
    {
    	return view('show.subcategory');
    }
    function showCategory(Request $req, $id)
    {
    	$subcat = subCategory::where('category_id','=',$id) // where---- use for find column from database
		->get();
    	//dd($subcat);
    	//print_r($subcat);
    	return view('show.subcategory')
    			->withCategory($subcat);

    	
    }
}
