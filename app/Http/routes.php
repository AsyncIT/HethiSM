<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('about', ['middleware' => 'auth', 'uses' => 'FrontendController@about']);
Route::get('contact', 'FrontendController@contact');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// Frontend User Registration & Login & Profile Mangement

Route::get('register','UserController@register');
Route::get('login','UserController@userlogin');
Route::post('registered','UserController@register_user');


/* Back End Admin Side */

Route::get('admin', 'adminController@adminlogin');
Route::get('dashboard', 'adminController@dashboard');
Route::get('add-product', 'adminController@add_Product');
Route::get('add-category', 'adminController@add_Category');
Route::get('add-slider', 'adminController@add_slider');
Route::get('cart-settings', 'adminController@cart_Settings');
Route::get('view-products', 'adminController@view_product');
Route::get('view-orders', 'adminController@view_orders');
Route::get('view-customers', 'adminController@cart_customers');



// Product Management

Route::get('category','ProductController@category');
Route::get('/','ProductController@index');
Route::post('view','ProductController@store');
Route::get('cart','ProductController@cart');
Route::post('AddToCart','ProductController@AddToCart');
Route::get('checkout','ProductController@checkout');
Route::get('view/{id}','ProductController@show');



