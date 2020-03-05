<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('show','userController@index');
// Route::get('/subcategory','subcategoryController@index');
// Route::get('product','productController@index');


        //-----------------------------------Admin-------------------------------//

                Route::middleware(['adminSession'])->group(function () {
                Route::middleware(['adminType'])->group(function () {

                //home
                Route::get('/main','AdminMainController@index')->name('adminMain.index');

                //category
                Route::resource('/main/category','CategoryController');
                Route::get('/main/category/{id}/delete','CategoryController@delete')->name('admin.category.delete');

                //admin
                Route::resource('/main/admin','AdminController');
                Route::get('/main/admin/{id}/delete','AdminController@delete')->name('admin.delete');
                //cart
                Route::resource('/main/cart','CartController');
                Route::get('/main/cart/{id}/delete','CartController@delete')->name('cart.delete');
                //customer
                Route::resource('/main/customer','CustomerController');
                Route::get('/main/customer/{id}/delete','CustomerController@delete')->name('customer.delete');
                //guestUser
                Route::resource('/main/guestUser','GuestUserController');
                Route::get('/main/guestUser/{id}/delete','GuestUserController@delete')->name('guest.delete');
                //image
                Route::resource('/main/image','ImageController');
                Route::get('/main/image/{id}/delete','ImageController@delete')->name('image.delete');
                //invoice
                Route::resource('/main/invoice','InvoiceController');
                Route::get('/main/invoice/{id}/delete','InvoiceController@delete')->name('invoice.delete');
                //location
                Route::resource('/main/location','LocationController');
                Route::get('/main/location/{id}/delete','LocationController@delete')->name('location.delete');
                //product
                Route::resource('/main/product','ProductController');
                Route::get('/main/product/{id}/delete','ProductController@delete')->name('product.delete');
                //ratings
                Route::resource('/main/ratings','RatingsController');
                Route::get('/main/ratings/{id}/delete','RatingsController@delete')->name('ratings.delete');
                //seller
                Route::resource('/main/seller','SellerController');
                Route::get('/main/seller/{id}/delete','SellerController@delete')->name('seller.delete');
                //subcategory
                Route::resource('/main/subcategory','SubcategoryController');
                Route::get('/main/subcategory/{id}/delete','SubcategoryController@delete')->name('subcategory.delete');
                //transection
                Route::resource('/main/transection','TransectionController');
                Route::get('/main/transection/{id}/delete','TransectionController@delete')->name('transection.delete');
                //login
                Route::resource('/main/login','LoginController');
                Route::get('/main/login/{id}/delete','LoginController@delete')->name('login.delete');
                //contact
                Route::get('main/contact','ContactController@index')->name('admin.contact');
        });
});
	
                //admin login 
                Route::get('main/adminLogout','AdminLoginController@logout')->name('adminLogin.logout');
                Route::get('main/adminLogin','AdminLoginController@create')->name('adminLogin.create');
                Route::post('main/adminLogin','AdminLoginController@login');
                //admin Registration 
                Route::get('main/adminReigister','AdminRegisterController@create')->name('adminRegister.create');
                Route::post('main/adminReigister','AdminRegisterController@store');
        

//-------------------------------User---------------------------//
        //show index page
        Route::get('','UserCategoryController@index')->name('index');
        Route::post('','ContactController@receiveMessage');

        //show category to subcategory page
        Route::get('/category/{id}/subcategory','UserSubcategoryController@showCategory')->name('category.subcategory');
        //show subcategory to product page
        Route::get('/subcategory/{id}/product','UserProductController@index')->name('subcategory.product');
        //show product to details page
        Route::get('/productDetails/{id}','productdetailsController@showProductdetails')->name('productDetails');
        Route::get('/cart','UserCartController@index')->name('cart');

        Route::middleware(['userSession'])->group(function () {
                Route::middleware(['userType'])->group(function () {
                        // for cart
                        Route::get('/cart','UserCartController@index')->name('cart');
                        Route::get('/cart/add', 'UserCartController@addToCart');
                        Route::get('/cart/delete', 'UserCartController@deleteCart');
                        Route::get('/cart/total', 'UserCartController@cartTt');
                        //contact
                        Route::post('','ContactController@receiveMessage');
                        //single buy
                        Route::get('/product/buy/{id}','UserBuyController@index')->name('productBuy');
                        Route::post('/product/buy/{id}','UserBuyController@store');
                        //My Product
                        Route::get('/myProduct','UserProductController@myProduct')->name('myProduct');
                        //order list
                        Route::get('/orderList','UserOrderTrackController@orderList')->name('orderlist');
                        //create Seller
                        Route::get('/createSeller','UserController@index')->name('createSeller');
                        Route::post('/createSeller','UserController@store')->name('createSeller');

                        //OrderTrack
                        Route::get('/orderTrack/{id}','UserOrderTrackController@index')->name('orderTrack');

                        //transection
                        Route::get('/transection', 'UserOrderTrackController@transection')->name('show.transection');
                        Route::post('/transection', 'UserOrderTrackController@store');

                        // Product Upload
                        Route::get('/productUpload','UserProductController@productUploadPage')->name('product.upload');
                        Route::post('/productUpload','UserProductController@productUpload');
                        Route::get('/productUpload/category','UserProductController@subCategory');
                        
                        //userProfile
                        Route::get('/profile' , 'userProfilecontroller@profileShow')->name('profile');
                        Route::get('/profile/edit', 'userProfilecontroller@profileEdit')->name('profile.edit');
                        Route::post('/profile/edit', 'userProfilecontroller@profileUpdate');
                });
        });
       
        //Search
        Route::get('/search', 'ProductController@autocomplete')->name('index.search');

        //user login 
        Route::get('/login/logout','userLoginController@logout')->name('login.logout');
        Route::get('/login','userLoginController@create')->name('login.create');
        Route::post('/login','userLoginController@login');

        //user Registration 
        Route::get('register','UserRegisterController@create')->name('register.create');
        Route::post('register','UserRegisterController@store');

        





        //---------Agricultural--Information-----------//
        Route::get('/agri_info','InfoController@index')->name('agri_info');
        Route::get('/agri_info/{id}/subCategory','InfoController@subCategory')->name('agri_info.subCategory');
        Route::get('/agri_info/{id}/product','InfoController@product')->name('agri_info.product');
        Route::get('/agri_info/conservation','InfoController@conservation')->name('agri_info.conservation');
        Route::get('/agri_info/marketing','InfoController@marketing')->name('agri_info.marketing');
        Route::get('/agri_info/farmer','InfoController@farmer')->name('agri_info.farmer');

        
        
