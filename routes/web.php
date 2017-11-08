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
*/

Route::get('/', 'Auth\LoginController@index')->name('login');

Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider');

Route::get('/login/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'ComplimentsController@index');

    Route::get('/users', 'UsersController@index');

    Route::get('/users/{user}', 'UsersController@show');

    Route::get('/compliments/received', 'ComplimentsController@received');

    Route::get('/compliments/given', 'ComplimentsController@given');

    Route::get('/logout', 'Auth\LoginController@logout');

    Route::post('/compliments/create', 'ComplimentsController@create');

});

