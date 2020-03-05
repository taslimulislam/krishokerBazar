<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class productdetailsController extends Controller
{
    function index()
    {
    	return view('show.productdetailsController');
    }

    function showProductdetails($id)
    {
    	$product = products::find($id);
        // print_r($product->name);
    	return view('show.productDetails')
    			->withProductDetails($product);
    }
}
