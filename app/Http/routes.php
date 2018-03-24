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

  Route::resource('/login', 'StudentController');
  Route::resource('/register', 'RegisterController' );
  // Route::get('/home', 'HomeController@index');

  /* Student Controllers */
  Route::resource('/student/dashboard/projects', 'ProjectController');
  Route::get('/student/dashboard/projects/{id}/comments', 'ProjectController@comments');
  Route::post('/student/dashboard/projects/comment/{id}', 'ProjectController@commentpost');
  Route::resource('/student/dashboard/sample-projects', 'SampleController');
  Route::resource('/student/dashboard/blog', 'BlogController');
  Route::resource('/student/dashboard/logs', 'LogController');
  Route::resource('/student/dashboard', 'StudentDashboardController');


/* Staff Controllers */
Route::resource('/staff', 'StaffController');




  Route::get('/ajaxrequest/like-project/{student}/{slug}', 'AjaxRequest@likeproject');

  Route::get('/logout', function(){
    Auth::logout();
  });

});
