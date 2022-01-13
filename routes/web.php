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

Route::get('/test', function () {
    return '<b> Hello, world!<b>';
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/product', function () {
    return view('product');
});



