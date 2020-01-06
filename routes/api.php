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
Route::prefix('/')->middleware('ApiHeader')->group(function () {
    Route::post('/a', 'Api\ApiController@a');
});
Route::get('/brush','Api\ApiController@brush');
Route::post('/index', 'Api\ApiController@index');
Route::post('/create', 'Api\ApiController@create');

