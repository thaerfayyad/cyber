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




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/home','Site\homeController@index')->name('index');
    Route::get('/','Site\homeController@index');
    Route::get('Sign','Site\UserController@create')->name('signup');
    Route::post('store','Site\UserController@store')->name('users.store');
    Route::get('Log-in','Site\UserController@getLogIn')->name('users.login');
    Route::post('user-sign-in','Site\UserController@userLogin')->name('users.sign');
    Route::get('student', 'site\BookController@student')->name('student.index');
