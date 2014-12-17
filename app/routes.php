<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/','ApiController@getTest');
Route::get('/projects','ApiController@getProject');
Route::get('/questions/{id}','ApiController@getQuestions');
Route::get('/users','ApiController@getUsers');
Route::get('/responses/{id}','ApiController@getResponse');