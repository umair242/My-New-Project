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
Route::get('/registration', 'UserController@getRegistrationPage');
Route::post('/registration', 'UserController@postRegistrationPage');

//Product Pages
Route::get('/laptops', 'ProductPagesController@getLaptopPage');

Route::get('/dashboard', 'AdminController@getHomePage');
Route::get('/login', 'AdminController@login');
Route::get('/dashboard/add-products', 'ProductController@getAddProductsPage');
Route::post('/dashboard/add-products', 'ProductController@postAddProductsPage');

Route::post('/getSearchProducts', 'ProductController@getSearchProducts');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');