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

Route::group(['middleware' => ['web']], function (){

	Route::get('/','RequirementController@welcome');
	Route::get('/requirements','RequirementController@index');
	Route::post('/requirement','RequirementController@store');
	Route::post('/requirement/edit/{id}','RequirementController@updatepersonalinfo');
	Route::get('/requirement/{id}','RequirementController@getspecifyinfo');
	Route::get('/requirement/query/all','RequirementController@getalloverallinfo');
	Route::get('/mail','RequirementController@mail');
	Route::get('/mail/send', 'RequirementController@send');
	Route::auth();
});