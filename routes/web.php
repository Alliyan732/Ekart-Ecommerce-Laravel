<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\EkartController;
use app\http\Controllers\AdminController;
use app\http\Controllers\ProductController;
use app\http\Controllers\CartController;

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

Route::get('/', 'App\Http\Controllers\EkartController@index');


// User Routes
// login page route
Route::get('/Ekart/login', 'App\Http\Controllers\EkartController@index');
// register route
Route::post('/Ekart/login', 'App\Http\Controllers\EkartController@register_user');
// match route
Route::post('/Ekart/home', 'App\Http\Controllers\EkartController@match');
// homepage route
Route::group(['middleware'=>'user_auth'],function(){
    Route::get('/Ekart/home', 'App\Http\Controllers\EkartController@userdashboard');

    // cart route
    Route::get('/Ekart/contactUs', 'App\Http\Controllers\EkartController@contactUs');
    // cartpage route
    // Route::get('/Ekart/cart', 'App\Http\Controllers\EkartController@cart');
    // product details route
    Route::get('/Ekart/home/product_details/{id}','App\Http\Controllers\ProductController@product_details');


    Route::get('Ekart/logout', function () {
        session()->forget('USER_LOGIN');
        session()->forget('USER_ID');
        session()->flash('fail','Logout Successfully!');

        return redirect('Ekart/login');
    });

    // cart controller
    Route::post("add_to_cart", 'App\Http\Controllers\CartController@addToCart');
    Route::get("Ekart/cart", 'App\Http\Controllers\CartController@cart');
    // Route::post('/delete-cart-item', 'App\Http\Controllers\CartController@deleteCartItem');
    Route::delete('/del/{id}', 'App\Http\Controllers\CartController@destroy')->name('users.destroy');
    Route::get("Ekart/cart/checkout", 'App\Http\Controllers\CartController@checkout');



    // search bar route
    Route::get('/product_list',  'App\Http\Controllers\ProductController@product_list');
    // Route::post('searchproduct',  'App\Http\Controllers\ProductController@searchProduct');
    
    // search page
    Route::get('search/{str}','App\Http\Controllers\ProductController@search');


});





// admin routes:
Route::get('adminLogin', 'App\Http\Controllers\AdminController@adminLogin');

Route::post('adminLogin/auth', 'App\Http\Controllers\AdminController@auth')->name('admin.auth');

Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@dashboard');
    
    //products
    Route::get('/admin/product', 'App\Http\Controllers\ProductController@index');
    Route::get('/admin/product/manage_product', 'App\Http\Controllers\ProductController@manage_product');
    Route::get('admin/product/manage_product/{id}','App\Http\Controllers\ProductController@manage_product');
    Route::post('admin/product/manage_producty_process','App\Http\Controllers\ProductController@manage_product_process')->name('product.manage_product_process');
    Route::get('admin/product/delete/{id}','App\Http\Controllers\ProductController@delete');
    Route::get('admin/product/delete/{id}','App\Http\Controllers\ProductController@delete');
    Route::get('admin/logout', function () {
        session()->forget('ADMIN_LOGIN');
        session()->forget('ADMIN_ID');
        session()->flash('fail','Logout Successfully!');

        return redirect('adminLogin');
    });

    
});




