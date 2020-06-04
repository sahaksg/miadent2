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
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/search', 'PostsController@search');
Route::get('/searcheach/{id}', 'PostsController@searcheach');
Route::get('/', 'PagesController@index');
Route::get('/start', 'PagesController@startup');
Route::get('/s', 'PagesController@services1');


Route::get('/init0', 'PagesController@init0');
Route::get('/init1', 'PagesController@init1');

Route::get('/orthopedy', 'PagesController@orthopedy');
Route::get('/surgery', 'PagesController@surgery');
Route::get('/therapy', 'PagesController@therapy');



// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostsController'); // patient table controller routes

// Route::post('/store1', 'PostsController@store1');
Route::post('/store1', 'PostsController@store1'); // use POST for image to work
Route::post('/store2', 'PostsController@store2');
Route::post('/store3', 'PostsController@store3');

Route::get('/calendar', 'PostsController@calendar');
Route::get('/calendaruser/{id}', 'PostsController@calendaruser'); // will be used later for super-admin, currently for admin is used
Route::get('/calendarall/{id}', 'PostsController@calendarall'); //currently used


Auth::routes();

Route::resource('dashboard', 'DashboardController');
Route::post('/updatetime', 'DashboardController@updatetime');
Route::get('/editschedule', 'DashboardController@editschedule');

Route::resource('xrays', 'XraysController');
Route::get('/searchxray', 'XraysController@search');
Route::post('/xrays/{id}', 'XraysController@update')->name('XrayUpload');
Route::post('/xrays1/{id}', 'XraysController@update1')->name('XrayUpload1');


// Route::get('/xrays/{id}/xrays', 'DashboardController@showxray');

// Route::get('/dashboard/search', 'DashboardController@search1');


Route::get('/searchinit/{id}', 'SkizbController@searchinit');
Route::resource('skizbs', 'SkizbController');
// Route::get('skizbs', 'SkizbController');


Route::resource('appointments', 'AppointmentsController');

Route::get('ajaxRequest', 'AppointmentsController@ajaxRequest');
Route::post('ajaxRequest', 'AppointmentsController@ajaxRequestPost');
