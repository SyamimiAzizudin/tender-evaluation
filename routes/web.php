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
// bulk user
Route::get('/user-bulk/edit', 'UsersController@bulkEdit');
Route::patch('/user-bulk/update', 'UsersController@bulkUpdate');

// Supplier
Route::resource('/supplier', 'SuppliersController');
Route::get('/supplier/create', 'SuppliersController@create');
Route::delete('/supplier/{supplier}/delete', 'SuppliersController@destroy');

// Project
Route::resource('/project', 'ProjectsController');
Route::get('/project-supplier', 'ProjectsController@supplierlist');
Route::get('/project-supplier/{supplier_id}', 'ProjectsController@getSupplierProject');
Route::post('/project-supplier/{supplier_id}', 'ProjectsController@store');
Route::get('/project/{supplier_id}/edit', 'ProjectsController@edit');    
Route::patch('/project-supplier/{supplier_id}', 'ProjectsController@update');
Route::delete('/project/{project}/delete', 'ProjectsController@destroy');

// new project
Route::get('/project-dashboard', 'ProjectsController@dash');
Route::get('/project-add', 'ProjectsController@add');
Route::get('/project/{project}', 'ProjectsController@getProject');
Route::get('/project/criteria/{project}', 'ProjectsController@criteriaProject');
Route::get('/project/supplier/{project}', 'ProjectsController@supplierProject');
Route::get('/project/evaluator/{project}', 'ProjectsController@evaluatorProject');

// Criteria
Route::resource('/criteria', 'CriteriasController');
Route::post('import', 'CriteriasController@import')->name('import');

// Evaluation
// Route::resource('/evaluation', 'EvaluatesController');
Route::get('/evaluation', 'EvaluatesController@index');
Route::get('/evaluation/{evaluate}', 'EvaluatesController@getEvaluation');

// Report
Route::get('/report', function(){
	return view('report.index');
});
Route::get('/report/project', function(){
	return view('report.single');
});
Route::get('/report/company', function(){
	return view('report.company-report');
});
Route::get('/report/evaluator', function(){
	return view('report.evaluator-report');
});

//html
Route::get('/html/company', function(){
	return view('supplier.single');
});
Route::get('/html/user', function(){
	return view('user.single');
});

