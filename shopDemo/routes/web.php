<?php

use Illuminate\Support\Facades\Route;

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

//******************************************PAGE SITE**********************************************

//********ACCOUNT

Route::get(
    '/product/{id}','ProductController@index'
);
//register
Route::get(
    '/register','AccountController@showregister'
);
Route::post(
    '/register','AccountController@register'
);

// login
Route::get(
    '/login','AccountController@showlogin'
);
Route::post(
    '/login','AccountController@login'
);

//info
Route::get(
    '/info','AccountController@showinfo'
);

//cart
Route::get(
    '/cart','CartController@showcart'
);

Route::get(
    '/addtocart/{id}','CartController@addtocart'
);
Route::get(
    '/addtocart/{id}/{quantity}','CartController@addtocart'
);

//*********************CONTENT

Route::get(
    '/', 'HomeController@index'
);
Route::get(
    '/newproduct', 'ProductController@shownewproduct'
);

Route::get(
    '/topproduct', 'ProductController@showtopproduct'
);
Route::get(
    '/bestpriceproduct', 'ProductController@showbestpriceproduct'
);

Route::get(
    '/productdetails/{id}', 'ProductController@productdetails'
);
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');



//***************************************************ADMIN SITE***********************************************
//ADMIN SITE

Route::get(
    '/dashboard','AdminController@index'
);
Route::get(
    '/admin/login','AdminController@showlogin'
);
Route::post(
    '/admin/login','AdminController@login'
);

// Product

Route::get(
    '/admin/product','AdminController@getAllProduct'
);
Route::get(
    '/admin/addproduct','AdminController@showAddProduct'
);
Route::post(
    '/admin/addproduct','AdminController@addProduct'
);
Route::get(
    '/admin/addproductdetails','AdminController@showaddproductdetails'
);
Route::post(
    '/admin/addproductdetails','AdminController@addproductdetails'
);

// brand

Route::get(
    '/admin/brand','AdminController@getAllBrand'
);
Route::get(
    '/admin/addbrand','AdminController@showaddBrand'
);
Route::post(
    '/admin/addbrand','AdminController@addBrand'
);
Route::get(
    '/admin/updatebrand/{id}','AdminController@showUpdateBrand'
);
Route::put(
    '/admin/updatebrand/{id}','AdminController@updateBrand'
);

Route::delete(
    '/admin/deletebrand/{id}','AdminController@deleteBrand'
);

//category
Route::get(
    '/admin/category','AdminController@getAllCategory'
);
Route::get(
    '/admin/addcategory','AdminController@showAddCategory'
);
Route::post(
    '/admin/addcategory','AdminController@addCategory'
);
Route::delete(
    '/admin/deletecategory/{id}','AdminController@deleteCategory'
);
Route::get(
    '/admin/updatecategory/{id}','AdminController@showupdateCategory'
);
Route::put(
    '/admin/updatecategory/{id}','AdminController@updateCategory'
);


//client

Route::get(
    '/admin/client','AdminController@getClient'
);

// orders
Route::get(
    '/admin/orders','AdminController@getOrder'
);


//product group

Route::get(
    '/admin/productgroup','AdminController@productgroup'
);
Route::get(
    '/admin/addproductgroup','AdminController@showaddproductgroup'
);
Route::post(
    '/admin/addproductgroup','AdminController@addproductgroup'
);
