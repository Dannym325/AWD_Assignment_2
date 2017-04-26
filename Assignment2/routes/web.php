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
    return view('login');
});

Route::get('/create', function () {
  return view('blogs/create_blog');
});

Route::get('blogs', 'BlogController@index');

Route::get('blogs/{blog}/delete', 'BlogController@delete');

Route::get('blogs/{blog}/edit', 'BlogController@edit');

Route::post('/create/new', 'BlogController@create');

Route::get('blogs/{blog}', 'BlogController@show');

Route::patch('blogs/{blog}', 'BlogController@update');
