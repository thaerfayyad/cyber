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
    Route::get('about','Site\homeController@about')->name('about');
    Route::get('/','Site\homeController@index');
    Route::get('Sign','Site\UserController@create')->name('signup');
    Route::post('store','Site\UserController@store')->name('users.save');
    Route::get('Log-in','Site\UserController@getLogIn')->name('users.login');
    Route::post('user-sign-in','Site\UserController@userLogin')->name('users.sign');
    Route::get('books-library-student', 'site\BookController@student')->name('student.index');
    Route::get('books-library-general', 'site\BookController@general')->name('general.index');
    Route::get('books', 'site\BookController@book')->name('book.home');
    Route::get('resources-library-general', 'site\BookController@resources')->name('resources.book.home');
    Route::get('exercises-library-general', 'site\BookController@exercises')->name('exercises.book.home');
    Route::get('resources', 'site\ResourcesController@index')->name('resources.home');
    Route::get('blogs' , 'site\blogsController@index')->name('blogs.home.page');
    Route::get('blogs-details/{id}' , 'site\blogsController@show')->name('blogs.details.page');
    Route::get('news-details/{id}' , 'site\NewsController@show')->name('news.details.page');

