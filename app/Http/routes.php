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

Route::get('/', 'LoginController@index');

//Route before Login
Route::get('/login', 'LoginController@index');

//Route during login
Route::post('/login', ['as' => 'login', 'uses' => 'LoginController@loginPost']);

//Route to show login errors
Route::get('/loginError', ['as' => 'loginError', 'uses' => 'LoginController@loginError']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//To search
Route::get('employee/search', ['as' => 'search', 'uses' => 'EmployeeController@index']);

//Necessary to CRUD
Route::get('employee', ['as' => 'employee.index', 'uses' => 'EmployeeController@index']);
Route::get('employee/create', ['as' => 'employee.create', 'uses' => 'EmployeeController@create']);
Route::post('employee', ['as' => 'employee.store', 'uses' => 'EmployeeController@store']);
Route::get('employee/{employee}/edit', ['as' => 'employee.edit', 'uses' => 'EmployeeController@edit']);
Route::delete('employee/{employee}', ['as' => 'employee.destroy', 'uses' => 'EmployeeController@destroy']);
Route::put('employee/{employee}', ['as' => 'employee.update', 'uses' => 'EmployeeController@update']);
Route::get('employee/logout', ['as' => 'logout', 'uses' => 'EmployeeController@logout']);


//Route::resource('employee','EmployeeController');
//Route::resource('admin','AdminController');