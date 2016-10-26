<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Page routes
Route::get('/', 'PageController@index');
Route::get('enter', 'PageController@enterPage');
Route::get('increase', 'PageController@increasePage');
Route::get('unsure', 'PageController@unsurePage');
Route::get('get-started', 'PageController@startPage');

// Form submissions
Route::post('signup', 'PageController@signup');
Route::post('pot', 'PageController@pot');
Route::post('increase', 'PageController@increase');

// Authorisation routes
Route::get('auth/{auth_code}', 'PageController@authoriseSignup');
Route::get('auth/pot/{auth_code}', 'PageController@authorisePot');

// Admin routes
Route::get('admin/4f79462e77d50deed9f36f367e258632', 'AdminController@admin');
Route::get('admin/4f79462e77d50deed9f36f367e258632/signup/view/{auth_code}', 'AdminController@viewSignup');
