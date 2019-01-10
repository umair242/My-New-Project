<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
*/
//General
Route::get('/', 'HomePageController@getHomePage');
Route::get('/home', 'HomePageController@getHomePage');
Route::get('/register', 'UserController@getRegistrationPage');
Route::post('/register', 'UserController@postRegistrationPage');

//Product Pages
Route::get('/laptops', 'ProductPagesController@getLaptopPage');

Route::get('/my-admin', 'AdminController@getHomePage');
Route::get('/my-admin/add-products', 'ProductController@getAddProductsPage');
Route::post('/my-admin/add-products', 'ProductController@postAddProductsPage');

Route::post('/getSearchProducts', 'ProductController@getSearchProducts');


