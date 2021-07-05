<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/users', 'UserController@index');

Route::get('/search_user', 'UserController@search');

Route::get('/create_user', 'UserController@create');

Route::post('/saveName', 'userController@store')->name('user.store');

Route::get('/show/{user_id}', 'UserController@show');

Route::get('/update/{user_id}', 'UserController@update');

Route::get('/delete/{user_id}', 'UserController@delete');

Route::get('/documents/{user}', 'UserController@getDocuments');

Route::get('/get_name', 'UserController@getName');

Route::get('/send_mail', 'MailController@send');

Route::resource('roles', 'RoleController');

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@authenticate')->name('authenticate');

Route::get('/document/create', 'DocumentController@create')->name('document.create');
Route::post('/document', 'DocumentController@store')->name('document.store');