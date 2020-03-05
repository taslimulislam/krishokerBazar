<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\AgriCategory;
use App\AgriSubcategory;

class agriService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('*',function($view){

            $category = AgriCategory::all();
            $subCategory = AgriSubcategory::all();
            
            return $view
            ->withAgriCategorys($category)
            ->withAgriSubCategorys($subCategory);
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
