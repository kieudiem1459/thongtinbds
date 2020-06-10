<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resources([
    'tinbds'=>'tinbdsController',
    'huong'=>'huongController'
    ]);
//tinbds
Route::get('dstinbds','tinbdsController@index');
Route::get('show/{id}','tinbdsController@show');

//huong
Route::get('huong','huongController@index');
Route::get('huong/{id}','huongController@show');
Route::post('themhuong','huongController@store');

