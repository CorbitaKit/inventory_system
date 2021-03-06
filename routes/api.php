<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//User  route

Route::post('/store-user','UserController@store');


Route::get('/get-roles','RolesController');

Route::get('/get-users','UserController@get');

Route::delete('/delete-user/{user_id}','UserController@destroy');

Route::get('/get-user/{user_id}','UserController@edit');



//Item route


Route::post('/store-item','ItemController@store');

Route::get('/get-items','ItemController@getItems');