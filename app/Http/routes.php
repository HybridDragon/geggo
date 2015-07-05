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

Route::get('/', 'BaseController@welcome');
Route::get('/paste', 'BaseController@paste');
Route::any('/error/{error_id}', 'BaseController@errors');

Route::get('/about', 'StaticController@about');
Route::get('/features', 'StaticController@features');

Route::post('/', 'FileController@postFile');
Route::post('/paste', 'FileController@postPaste');

Route::get('/paste/view', 'FileController@viewPaste');

Route::controller('/auth', 'AuthController');
Route::controller('/user', 'UserController');
