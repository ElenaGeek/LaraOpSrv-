<?php

// use Illuminate\Support\Facades\Route;

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

//Route::get('/db', [\App\Http\Controllers\DbController::class, 'index']);
Route::get('/db', ['uses' => 'DbController@index']);

Route::group(['prefix'=>'/admin/news','as'=>'admin::news::'], function(){
    Route::get('', ['as' => 'index', 'uses' => 'Admin\NewsController@index']);
Route::match(['get','post'],'create', ['as' => 'create', 'uses' => 'Admin\NewsController@create']);
//    Route::post('create', ['as' => 'create', 'uses' => 'Admin\NewsController@create']);
    Route::get('new', ['as' => 'new', 'uses' => 'Admin\NewsController@new']);
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
/*Route::get('/', ['uses' => 'HomeController@index']);*/

Route::get('/category', ['uses' => 'CategoryController@index']);

Route::get('/news/{id}', ['uses' => 'NewsController@index']);
/*Route::get('/news/card/{id}', ['uses' => 'NewsController@card']);*/

Route::get('/news/info/{id}', ['uses' => 'InfoController@index']);

Route::get('/add', ['uses' => 'AddController@index']);

/*
Route::get('/form', function () {
    return view('form');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return '<b> Hello, world!<b>';
});
*/



