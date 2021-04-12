<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout1.v_template');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/Download', function () {
    return view('Download');
});
Route::get('/nilaihasil', function () {
    return view('nilaihasil');
});

/*Route::get('/'. 'PagesController@home');
/*Route::get('/nilai', 'nilaiController@index');
*/



