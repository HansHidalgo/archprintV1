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
    return view('archprint.home');
});

Route::auth();

Route::get('/home', 'ArchprintController@index');
Route::get('beneficios', 'ArchprintController@beneficios');
Route::get('somos', 'ArchprintController@somos');
Route::get('address', 'ArchprintController@address');
Route::get('delivery', 'ArchprintController@delivery');
Route::get('pago', 'ArchprintController@pago');
Route::get('orden', 'ArchprintController@orden');
Route::get('update', 'ArchprintController@update');
Route::post('update/file', 'ArchprintController@file');
Route::get('history', 'ArchprintController@history');
Route::get('registro', 'ArchprintController@registro');