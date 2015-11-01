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

Route::get('/admin', function () {
  return view('admin');
});

// REST API --------------------------------------------------------------

Route::group(['prefix'=>'api/v1'], function(){
	
	// Product Types -----------------------------------------------------
	Route::get('product-types/{id?}', 'ProductTypeController@index');
	Route::put('product-type', 'ProductTypeController@store');		
	Route::post('product-type/{id}', 'ProductTypeController@update');
	Route::delete('product-type/{id}', 'ProductTypeController@destroy');	

	// Products  ----------------------------------------------------------
	Route::get('products/{id?}', 'ProductController@index');
	Route::put('product', 'ProductController@store');
	Route::post('product/{id}', 'ProductController@update');
	Route::delete('product/{id}', 'ProductController@destroy');	
	
	Route::get('product-sizes/{id}', 'ProductController@getSizes');
	Route::post('product-sizes/{id}', 'ProductController@syncSizes');	
	Route::get('product-colors/{id}', 'ProductController@getColors');
	Route::post('product-colors/{id}', 'ProductController@syncColors');
	
	// Sizes --------------------------------------------------------------
	Route::get('sizes/{id?}', 'SizeController@index');
	Route::put('size', 'SizeController@store');
	Route::post('size/{id}', 'SizeController@update');
	Route::delete('size/{id}', 'SizeController@destroy');

	// Color options ----------------------------------------------------------
	Route::get('colors/{id?}', 'ColorController@index');
	Route::put('color', 'ColorController@store');
	Route::post('color/{id}', 'ColorController@update');
	Route::delete('color/{id}', 'ColorController@destroy');

});




