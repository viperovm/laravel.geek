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
    Route::match(['get', 'post'], '/store-category', 'CategoryController@store')->name('category-store');
    Route::match(['get', 'post'], '/edit-category/{category}', 'CategoryController@edit')->name('category-edit');
    Route::match(['get', 'post'], '/update-category/{category}', 'CategoryController@update')->name('category-update');
    Route::match(['get', 'post'], '/delete-category/{category}', 'CategoryController@destroy')->name('category-destroy');

    Route::get('/news-management', 'NewsController@index')->name('news-management');
    Route::get( '/create-news', 'NewsController@create')->name('news-create');
    Route::match(['get', 'post'], '/store-news', 'NewsController@store')->name('news-store');
    Route::match(['get', 'post'], '/edit-news/{news}', 'NewsController@edit')->name('news-edit');
    Route::match(['get', 'post'], '/update-news/{news}', 'NewsController@update')->name('news-update');
    Route::match(['get', 'post'], '/delete-news/{news}', 'NewsController@destroy')->name('news-destroy');

    Route::get('/user-management', 'UserController@all')->name('user-management');
    Route::match(['get', 'post'], '/create-user', 'UserController@add')->name('create-user');
    Route::match(['get', 'post'], '/update-user/{user}', 'UserController@update')->name('update-user');
    Route::match(['get', 'post'], '/delete-user/{user}', 'UserController@delete')->name('delete-user');
});




