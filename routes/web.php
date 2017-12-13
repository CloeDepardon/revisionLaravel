<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'BaseController@index');
Route::get('/create', 'CreateController@index');

Route::post('/cat/insert', 'CatController@insertOne');
Route::post('/cat/update', 'CatController@updateOneAction');

Route::get('/cat/delete/{id}', 'CatController@deleteOne');
Route::get('/cat/update/{id}', 'CatController@updateOne');
