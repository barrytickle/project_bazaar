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
Route::resource('/', 'StudentController');


Route::group(['middleware' => 'web'], function(){
  Route::auth();
  
  Route::resource('/register', 'RegisterController' );
  Route::get('/home', 'HomeController@index');
  Route::resource('/student/dashboard', 'StudentDashboardController');
});
