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
Route::group(['middleware'=>'auth'],function ()
{
    Route::get('/', function () {
	    return view('home');
    });
    Route::get('/home', function () {
        return view('home');
    });
});
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );


/* this route for Company */ 
Route::resource('companies', 'CompaniesController');

/* this route for Employee */ 
Route::resource('employees', 'EmployeesController');

