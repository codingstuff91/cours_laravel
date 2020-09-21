<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search_user', 'UserController@search');

Route::get('/create_user', 'UserController@create');

Route::post('/saveName', 'userController@store');

Route::get('/show/{user_id}', 'UserController@show');

Route::get('/update/{user_id}', 'UserController@update');

Route::get('/delete/{user_id}', 'UserController@delete');

Route::get('/comments', 'UserController@getComments');

Route::get('/create_fake_data','UserController@storeFakeData');