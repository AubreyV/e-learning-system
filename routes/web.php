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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// admin category
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.categories'], function() {
    Route::get('/categories', 'CategoryController@index')->name('');
    Route::get('/categories/create', 'CategoryController@create')->name('.create');
    Route::post('/categories', 'CategoryController@store')->name('.store');
    Route::get('/categories/{category}', 'CategoryController@show')->name('.show');

    // words
    Route::get('/categories/{category}/words/create', 'WordController@create')->name('.words.create');
    Route::post('/categories/{category}/words', 'WordController@store')->name('.words.store');
});
