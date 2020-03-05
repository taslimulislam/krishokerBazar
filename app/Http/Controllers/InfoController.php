<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AgriCategory;
use App\AgriSubcategory;
use App\AgriProduct;


class InfoController extends Controller
{
    function index()
    {
        $cat = AgriCategory::all();
        return view('agri_info.index')
                ->withAgriCategory($cat);
    }
    function subCategory($id)
    {
        $sub = AgriSubcategory::where('category_id','=',$id)
        ->get();
        return view('agri_info.subCategory')
               ->withAgriSubcategory($sub);
    }
    function product($id)
    {
        $pro = AgriProduct::where('subcategory_id','=',$id)
        ->get();
        return view('agri_info.product')
                ->withAgriProduct($pro);
    }
    function conservation()
    {
        return view('agri_info.conservation');
    }
    function marketing()
    {
        return view('agri_info.marketing');
    }
    function farmer()
    {
        return view('agri_info.farmer');
    }
}
