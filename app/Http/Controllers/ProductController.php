<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pr= Products::all();
        return view('admin.product.index')
                    ->withProducts($pr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pr = Products::find($id);

        return view('admin.product.details')
                ->withProduct($pr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pr = Products::find($id);

        return view('admin.product.edit')
                ->withProduct($pr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $pr = Products::find($id);
        $pic = $request->pic;
        $imgname = $pic->getClientOriginalName();
        $imgPath = "users/img/image/products/".$imgname;
        $pic->move('users/img/image/products',$imgname);
        $pr->seller_id = $request->seller_id;
        $pr->status = $request->status;
        $pr->name = $request->name;
        $pr->selling_price = $request->selling_price;
        $pr->buying_price = $request->buying_price;
        $pr->quantity = $request->quantity;
        $pr->description = $request->description;
        $pr->location = $request->location;
        $pr->subcategory_id = $request->subcategory_id;
        $pr->img_path = $imgPath;
        
        $pr->update();

        return redirect(route('product.show',$pr->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pr = Products::find($id);
        $pr->delete();
        return redirect(route('product.index'));
    }

    function delete($id)
    {
        $pr = Products::find($id);

        return view('admin.product.delete')
                ->withProduct($pr);
    }

   // Autocomplete product
    
    function autocomplete(Request $request)
    {
            $name = $request->name;
            if($name == "")
            {
                return "";
            }
            $data = DB::table('product')
                ->where('name', 'LIKE', "%".$name."%")
                ->get();
               // dd($data);
            //    return response()->json($data);
    
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $r  = route('productDetails',$row->id);
                $output .= '<li><a href="'.$r.'">'.$row->name.'</a></li>';
            }
                $output .= '</ul>';
                echo $output;
        
    }
}
