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

Route::get('/', 'PageController@index');
Route::get('enter', 'PageController@enter');
Route::get('increase', 'PageController@increase');
Route::get('unsure', 'PageController@unsure');
Route::get('get-started', 'PageController@getStarted');
Route::post('signup', 'PageController@signup');


Route::get('auth/{auth_code}', 'PageController@authoriseSignup');



Route::get('/api/v1/names/get/{query}', 'ApiController@getAllNames');

// Route::get('/', 'voteController@start');
// Route::get('cast-vote/{id}/{cat1}/{cat2}/{cat3}', 'voteController@cast');
// Route::get('person/{id}/{last_name}', 'voteController@person');
// Route::get('name-search/{query?}', 'voteController@nameSearch');
// Route::get('split-full-name', 'dataController@splitFullName');

