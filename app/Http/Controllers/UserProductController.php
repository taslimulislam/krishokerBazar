<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
use App\subCategory;
use App\CustomerLogin;
use App\ProductCatSubcat;

class UserProductController extends Controller
{
    function index(Request $req, $id)
    {
        
        $product = products::where('subcategory_id', '=' , $id)
        ->get();
        return view('show.product')
            ->withProduct($product);
    	
    }
    function productUploadPage()
    {
        return view('show.productUpload');
    }
    function productUpload(Request $request)
    {
        $session = session('user');
        $user = $session->id;
        $pic = $request->picture;
        $imgname = $pic->getClientOriginalName();
        $imgPath = "users/img/image/products/".$imgname;
        $pic->move('users/img/image/products',$imgname);
        // dd($imgPath);
        // return;
        $product = new Products;
        $category = $request->category;
        $product->subcategory_id = $request->subCategory;
        $product->name = $request->productName;
        $product->description = $request->description;
        $product->buying_price = $request->buyingPrice;
        $product->selling_price = $request->sellingPrice;
        $product->quantity = $request->quantity;
        $product->location = $request->location;
        $product->description = $request->description;
        $product->img_path = $imgPath;
        $product->seller_id = $user;
        $product->status = "Available";
        $product->save();
        return redirect(route('profile'));

    }
    function subCategory(Request $request)
    {
        $caid = $request->caid;
        $subCategory = subCategory::where('category_id', '=', $caid)
                        ->get();
        return response()->json($subCategory);
    }
    function myProduct()
    {
        $session = session('user');
        $user = $session->id;
        $customer = CustomerLogin::where('login_id', '=' ,$user)->first();
        $products = ProductCatSubcat::where('seller_id', '=', $user)->get();
        return view('show.myProduct')
            ->withCustomer($customer)
            ->withProducts($products);
    }


    
  
}
