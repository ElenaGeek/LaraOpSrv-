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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
/*Route::get('/', ['uses' => 'HomeController@index']);*/

Route::get('/category', ['uses' => 'CategoryController@index']);

Route::get('/news/{id}', ['uses' => 'NewsController@index']);
/*Route::get('/news/card/{id}', ['uses' => 'NewsController@card']);*/

Route::get('/news/info/{id}', ['uses' => 'InfoController@index']);

Route::get('/add', ['uses' => 'AddController@index']);

Route::get('/form', function () {
    return view('form');
});

/*

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return '<b> Hello, world!<b>';
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/footer', function () {
    return view('footer');
});
*/



