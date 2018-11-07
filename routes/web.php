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

// User Management
Route::resource('/user', 'UsersController');	
Route::delete('/user/{user}/delete', 'UsersController@destroy');

// Company Management
Route::resource('/supplier', 'SuppliersController');
Route::delete('/supplier/{supplier}/delete', 'SuppliersController@destroy');