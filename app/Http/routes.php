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


// Route::group(['middleware' => 'admin'], function () {

// 	Route::get('/admin/composer', 'ComposerController@index');
// 	Route::post('/admin/composer', 'ComposerController@store');
// 	Route::get('/admin/composer/{id}/edit', 'ComposerController@edit');
// 	Route::patch('/admin/composer/{id}','ComposerController@update');
// 	Route::get('/admin/composer/{id}/delete', 'ComposerController@destroy');

// 	Route::get('admin/singer', 'SingerController@index');
// 	Route::post('/admin/singer', 'SingerController@store');
// 	Route::get('/admin/singer/{id}/edit', 'SingerController@edit');
// 	Route::patch('/admin/singer/{id}','SingerController@update');
// 	Route::get('/admin/singer/{id}/delete', 'SingerController@destroy');

// 	Route::get('admin/gallery', 'GalleryController@index');
// 	Route::post('admin/gallery', 'GalleryController@store');
// 	Route::get('/admin/gallery/{id}/edit', 'GalleryController@edit');
// 	Route::patch('/admin/gallery/{id}','GalleryController@update');
// 	Route::get('/admin/gallery/{id}/delete', 'GalleryController@destroy');

// 	Route::get('admin/interview', 'InterviewController@index');
// 	Route::post('admin/interview', 'InterviewController@store');
// 	Route::get('/admin/interview/{id}/edit', 'InterviewController@edit');
// 	Route::patch('/admin/interview/{id}','InterviewController@update');
// 	Route::get('/admin/interview/{id}/delete', 'InterviewController@destroy');

// });

Route::auth();

Route::get('/','RouteController@home');

Route::get('/singer', 'RouteController@singer');

Route::get('/composer', 'RouteController@composer');

Route::get('/gallery', 'RouteController@gallery');

Route::get('/interview', 'RouteController@interview');

Route::get('/about', 'RouteController@about');

Route::get('/register', 'HomeController@index');

Route::get('/home', 'HomeController@index');


Route::get('/admin/composer', 'ComposerController@index');
Route::post('/admin/composer', 'ComposerController@store');
Route::get('/admin/composer/{id}/edit', 'ComposerController@edit');
Route::patch('/admin/composer/{id}','ComposerController@update');
Route::get('/admin/composer/{id}/delete', 'ComposerController@destroy');

Route::get('admin/singer', 'SingerController@index');
Route::post('/admin/singer', 'SingerController@store');
Route::get('/admin/singer/{id}/edit', 'SingerController@edit');
Route::patch('/admin/singer/{id}','SingerController@update');
Route::get('/admin/singer/{id}/delete', 'SingerController@destroy');

Route::get('admin/gallery', 'GalleryController@index');
Route::post('admin/gallery', 'GalleryController@store');
Route::get('/admin/gallery/{id}/edit', 'GalleryController@edit');
Route::patch('/admin/gallery/{id}','GalleryController@update');
Route::get('/admin/gallery/{id}/delete', 'GalleryController@destroy');

Route::get('admin/interview', 'InterviewController@index');
Route::post('admin/interview', 'InterviewController@store');
Route::get('/admin/interview/{id}/edit', 'InterviewController@edit');
Route::patch('/admin/interview/{id}','InterviewController@update');
Route::get('/admin/interview/{id}/delete', 'InterviewController@destroy');