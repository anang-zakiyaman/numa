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

Route::get('/', function () {
  return view('index');
});

// REST API --------------------------------------------------------------

Route::get('/api/v1/products/{id?}', 'ProductController@index');
Route::match(['get','post'],'/api/v1/add-product', 'ProductController@store');
Route::match(['get','post'],'/api/v1/update-product/{id?}', 'ProductController@update');
Route::match(['get','post'],'/api/v1/delete-product/{id?}', 'ProductController@destroy');
