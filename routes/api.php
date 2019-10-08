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

Route::get('/users', 'UserController@getList');
Route::get('/users/{id}', 'UserController@getUserById');
Route::post('/users', 'UserController@create');
Route::delete('/users/{id}', 'UserController@delete');
Route::put('/users/{id}', 'UserController@update');
/**
 * register
 */
Route::post('/register','UserController@create');
/**
 * login
 */
Route::post('/login', 'UserController@login');