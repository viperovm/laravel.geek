<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Index routes
|--------------------------------------------------------------------------
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/site/{url}', 'HomeController@getSitePage')->name('site');


/*
|--------------------------------------------------------------------------
| News routes
|--------------------------------------------------------------------------
|
*/

Route::group([
    'prefix' => 'news',
    'as' => 'news.',
    'namespace' => 'News',
], function () {
    //Route::get('/', 'NewsController@index')->name('index');
    Route::get('/local', 'NewsController@showLocal')->name('local');
    Route::get('/world', 'NewsController@showWorld')->name('world');
    Route::get('/{slug}', 'NewsController@showCategory')->name('category');
    Route::get('/{slug}/{id}', 'NewsController@showOne')->name('one');
});


/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
|
*/

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'is.admin']
], function () {
    Route::get('/index', 'IndexController@index')->name('index');
    Route::get('/category-management', 'CategoryController@index')->name('category-management');
    Route::get( '/create-category', 'CategoryController@create')->name('category-create');
    Route::match(['get', 'post'], '/store-category', 'CategoryController@store')->name('store-category');
    Route::match(['get', 'post'], '/update-category/{category}', 'CategoryController@edit')->name('edit-category');
    Route::match(['get', 'post'], '/delete-category/{category}', 'CategoryController@destroy')->name('destroy-category');
    Route::get('/news-management', 'NewsController@all')->name('news-management');
    Route::match(['get', 'post'], '/create-news', 'NewsController@add')->name('create-news');
    Route::match(['get', 'post'], '/update-news/{news}', 'NewsController@update')->name('update-news');
    Route::match(['get', 'post'], '/delete-news/{news}', 'NewsController@delete')->name('delete-news');
    Route::get('/user-management', 'UserController@all')->name('user-management');
    Route::match(['get', 'post'], '/create-user', 'UserController@add')->name('create-user');
    Route::match(['get', 'post'], '/update-user/{user}', 'UserController@update')->name('update-user');
    Route::match(['get', 'post'], '/delete-user/{user}', 'UserController@delete')->name('delete-user');
});




