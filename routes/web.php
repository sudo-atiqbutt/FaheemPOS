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

Route::get('/', function () {
    return view('admin/layout/master');
});

////////////////////////Admin Category Route Start////////////////////////////////////////
Route::resource('/category','admin\CategoryController');

Route::resource('/product','admin\ProductController');


Route::resource('/customer','admin\CustomerController');

Route::resource('/supplier','admin\SupplierController');

Route::resource('/sales','admin\SalesController');

////////////////////////Admin Company Route End////////////////////////////////////////
