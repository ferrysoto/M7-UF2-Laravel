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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//  Users Management
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'HomeController@users')->middleware('auth')->name('users');
Route::get('/user/{id}', 'HomeController@user')->name('user');
Route::post('/user/{id}', 'HomeController@userUpdate')->name('user.update');
Route::get('/user/remove/{id}', 'HomeController@userRemove')->name('user.remove');


//  Suppliers
Route::get('/suppliers', 'SuppliersController@index')->name('suppliers');
Route::get('/supplier/{id}', 'SuppliersController@show')->name('supplier');
Route::post('/supplier/create', 'SuppliersController@create')->name('supplier.create');
Route::post('/supplier/{id}', 'SuppliersController@update')->name('supplier.update');
Route::get('/supplier/state/{id}', 'SuppliersController@updateState')->name('supplier.state');

// Products
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/product/{id}', 'ProductsController@show')->name('product');
Route::post('/product/create', 'ProductsController@create')->name('product.create');
Route::post('/product/{id}', 'ProductsController@update')->name('product.update');
Route::get('/product/state/{id}', 'ProductsController@updateState')->name('product.state');
Route::get('/product/remove/{id}', 'ProductsController@destroy')->name('product.remove');
