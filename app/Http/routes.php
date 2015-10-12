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

Route::get('/', function () {
  return view('layouts.master');
  });
Route::get('post/create', 'PostController@create');
Route::post('post', 'PostController@post');

/*
Route::get('/lorem/create', 'LoremController@getCreate');
Route::post('/lorem/create', 'LoremController@postCreate');
//Route::post('/lorem/create/{number}' , 'LoremController@postCreate');
Route::get('/dummy/create' , 'DummyController@getCreate');
Route::post('/dummy/create' , 'DummyController@postCreate');
*/
