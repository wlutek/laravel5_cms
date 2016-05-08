<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('categories', 'CategoryController@index');
Route::post('categories', 'CategoryController@store'); 
Route::get('categories/create', 'CategoryController@create');
Route::get('categories/{id}/edit', 'CategoryController@edit');
Route::patch('categories/{id}/edit', 'CategoryController@update');
Route::delete('categories/{id}/delete', 'CategoryController@destroy');

Route::get('articles', 'ArticleController@index');
Route::post('articles', 'ArticleController@store');
Route::get('articles/create', 'ArticleController@create');
Route::get('articles/{id}/edit', 'ArticleController@edit');
Route::patch('articles/{id}/edit', 'ArticleController@update');
Route::delete('articles/{id}/delete', 'ArticleController@destroy');