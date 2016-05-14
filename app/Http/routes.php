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
    return view('welcome');
});

Route::post('/', function () {
	$response = array();
	$response['service'] = "Valhalla";

	try{
	   DB::connection()->getDatabaseName();
	   $response['status'] = true;
	}catch(Exception $e){
	   $response['status'] = false;
	}

    return response()->json($response);
});
