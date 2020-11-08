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


//Route::get('getProducts','App\Http\Controllers\Product\ProductController@index');// for retrieving product

Route::group(['namespace' => 'App\Http\Controllers\Product'], function (){
    Route::post('getProducts','ProductController@createProduct');   //for creating product
    Route::get('updateProduct/{id}','ProductController@updateProduct'); //for updating product
    Route::post('deleteProduct/{id}','ProductController@deleteProduct');  // for deleting product
    Route::get('getProducts','ProductController@index');// for retrieving product
});


