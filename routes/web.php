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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data-diri', 'TiketController@inputData');
Route::post('/data-diri', 'TiketController@showData')->name('data-diri');
Route::post('/save-data', 'TiketController@saveData')->name('save-data');
Route::get('/public-path', function () {
    return asset('granat.');
});
