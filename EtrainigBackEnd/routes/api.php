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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cursos', 'App\Http\Controllers\CursoController@index');
Route::post('/cursos', 'App\Http\Controllers\CursoController@store');
Route::put('/cursos/{id}', 'App\Http\Controllers\CursoController@update');
Route::delete('/cursos/{id}', 'App\Http\Controllers\CursoController@destroy');