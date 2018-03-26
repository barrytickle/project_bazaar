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

Route::get('/privacy', function(){
    return view('privacy');
});

Route::get('/terms-and-conditions', function(){
    return view('terms');
});

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
Route::resource('staff/dashboard/blog', 'StaffBlogController');
Route::resource('staff/dashboard/degrees', 'StaffDegreeController');

Route::get('staff/dashboard/projects/{id}/comments', 'StaffProjectsController@comments');
Route::post('staff/dashboard/projects/comment/{id}', 'StaffProjectsController@commentpost');

Route::resource('staff/dashboard/projects/approved', 'StaffProjectsController@approved');
Route::resource('staff/dashboard/projects/{id}/approve', 'StaffProjectsController@approve');
Route::resource('staff/dashboard/projects', 'StaffProjectsController');
Route::resource('staff/dashboard', 'StaffDashboardController');

Route::get('/staff/register', 'StaffController@register');
Route::post('staff/register', 'StaffController@registerstore');
Route::resource('/staff', 'StaffController');





/* Ajax Request to like a project when click on the like button */
  Route::get('/ajaxrequest/like-project/{student}/{slug}', 'AjaxRequest@likeproject');

  /* Will logout the user when they visit this URL, then will redirect them to login as a different user if needed */
  Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
  });

});
