<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::get('cart/getall','CartController@getAllCartInfo');
Route::get('cart/getinfo','CartController@getAllProductInfo');
Route::post('cart/store','CartController@store');
Route::post('cart/add','CartController@add');
Route::get('cart/clear','CartController@destroy');
Route::get('cart/remove/{name}','CartController@remove');