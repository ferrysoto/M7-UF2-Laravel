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
Route::post('/supplier/{id}', 'SuppliersController@update')->name('supplier.update');
Route::get('/supplier/state/{id}', 'SuppliersController@updateState')->name('supplier.state');
Route::post('/supplier/create', 'SuppliersController@store')->name('supplier.create');
