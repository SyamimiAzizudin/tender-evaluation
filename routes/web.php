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

// User
Route::resource('/user', 'UsersController');	
Route::delete('/user/{user}/delete', 'UsersController@destroy');
Route::get('/user-bulk/edit', 'UsersController@bulkEdit');
Route::patch('/user-bulk/update', 'UsersController@bulkUpdate');

// Supplier
Route::resource('/supplier', 'SuppliersController');
Route::delete('/supplier/{supplier}/delete', 'SuppliersController@destroy');

// Project
Route::resource('/project', 'ProjectsController');
Route::get('/project-supplier', 'ProjectsController@supplierlist');
Route::get('/dash-project', 'ProjectsController@dash');
Route::get('/project-supplier/{supplier_id}', 'ProjectsController@getSupplierProject');
Route::post('/project-supplier/{supplier_id}', 'ProjectsController@store');
Route::get('/project/{supplier_id}/edit', 'ProjectsController@edit');    
Route::patch('/project-supplier/{supplier_id}', 'ProjectsController@update');
Route::delete('/project/{project}/delete', 'ProjectsController@destroy');

// Criteria
Route::resource('/criteria', 'CriteriasController');
Route::post('import', 'CriteriasController@import')->name('import');

// Evaluation
Route::resource('/evaluation', 'EvaluatesController');

// Report

