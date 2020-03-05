<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\SubCategory;
use App\Customer;
use App\Seller;
use App\Products;

class IndexService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('*',function($view){

            if(session('user') != null)
            {
                $session = session('user');
                $user = $session->id;
                $type = Seller::where('login_id','=',$user)->first();
                $customer = Customer::where('login_id','=',$user)->first();
                $location = $customer->address;
                $pro = Products::where('location','=',$location)->get();
                $category= Category::all();
                $subCategory= SubCategory::all();
                return $view
            ->withCategorys($category)
            ->withCustomers($customer)
            ->withSubCategorys($subCategory)
            ->withuserType($type)
            ->withJfy($pro);
            }

            $category= Category::all();
            $subCategory= SubCategory::all();
            
            
            return $view
            ->withCategorys($category)
            ->withSubCategorys($subCategory);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
