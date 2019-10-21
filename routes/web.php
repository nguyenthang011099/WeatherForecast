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
Route::get('/view','ProjectsController@view');
Route::get('/index','ProjectsController@index');
Route::get('/create','ProjectsController@create');
Route::post('/view','ProjectsController@store');
Route::get('/show','ProjectsController@show');
Route::get('/showphutho','ProjectsController@showphutho');
