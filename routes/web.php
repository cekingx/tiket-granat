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
// Route Tiket non Panitia
Route::get('/data-diri', 'TiketController@inputData');
Route::post('/data-diri', 'TiketController@showData')->name('data-diri');
Route::post('/save-data', 'TiketController@saveData')->name('save-data');

// Route Tiket Panitia
Route::get('/panitia', 'PanitiaController@inputData');
Route::post('/panitia', 'PanitiaController@showData')->name('data-panitia');
Route::post('/save-panitia', 'PanitiaController@saveData')->name('save-panitia');

// Route Cetak Ulang Tiket
Route::get('/backup', 'BackUpController@inputData');
Route::post('/backup', 'BackUpController@showData')->name('data-backup');
Route::post('/print-data', 'BackUpController@printData')->name('print-data');


Route::get('/public-path', function () {
    return asset('granat.');
});
