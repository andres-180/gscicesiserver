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

Route::post('sessions', ['middleware' => 'auth:api', 'uses' => 'Api\ApiController@actualizarFechaComputador']);

Route::get('sessions2', ['middleware' => 'auth:api', 'uses' => 'Api\ApiController@actualizarFechaComputador']);
