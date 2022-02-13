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

Route::get('/locale/{lang}', [\App\Http\Controllers\LocaleController::class, 'index'])
    ->where('lang', '\w+')
    ->name('locale');

Route::group(['prefix'=>'/admin/news','as'=>'admin::news::', 'middleware'=> ['auth']],
    function(){
    Route::get('', ['as' => 'index', 'uses' => 'Admin\NewsController@index']);
Route::match(['get','post'],'create', ['as' => 'create', 'uses' => 'Admin\NewsController@create']);
    Route::get('new', ['as' => 'new', 'uses' => 'Admin\NewsController@new']);

    Route::get('index', ['as' => 'save', 'uses' => 'Admin\NewsController@create']);
Route::match(['get','post'],'update/{id}', ['as' => 'update', 'uses' => 'Admin\NewsController@update']);
    Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'Admin\NewsController@delete']);
Route::match(['get','post'],'save', ['as' => 'save', 'uses' => 'Admin\NewsController@save']);
});


Route::group(['prefix'=>'/admin/categories','as'=>'admin::categories::'], function(){
    Route::get('', ['as' => 'index', 'uses' => 'Admin\CategoryController@index']);
    Route::get('index', ['as' => 'save', 'uses' => 'Admin\CategoryController@create']);
Route::match(['get','post'],'create', ['as' => 'create', 'uses' => 'Admin\CategoryController@create']);

Route::match(['get','post'],'update/{id}', ['as' => 'update', 'uses' => 'Admin\CategoryController@update']);
    Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'Admin\CategoryController@delete']);
Route::match(['get','post'],'save', ['as' => 'save', 'uses' => 'Admin\CategoryController@save']);
});


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
/*Route::get('/', ['uses' => 'HomeController@index']);*/

Route::get('/category', ['as' => 'category', 'uses' => 'CategoryController@index']);
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


Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','Auth\LoginController@logout');


Route::group(['prefix'=>'/admin/profile','as'=>'admin::profile::','middleware'=> ['auth']],
    function(){
Route::match(['get','post'],'create', ['as' => 'create', 'uses' => 'Admin\ProfileController@create']);
Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'Admin\ProfileController@delete']);

Route::match(['get','post'],'update', ['as' => 'update', 'uses' => 'Admin\ProfileController@update']);
    Route::get('show', ['as' => 'show', 'uses' => 'Admin\ProfileController@show']);

    Route::get('', ['as' => 'index', 'uses' => 'Admin\ProfileController@index']);
    Route::get('index', ['as' => 'index', 'uses' => 'Admin\ProfileController@index']);
});


/*
Route::match(['get','post'],'/admin/profile', ['\App\Http\Controllers\Admin\ProfileController', 'update'])
->name('admin::profile')
->middleware('auth');
*/



