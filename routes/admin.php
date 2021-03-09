<?php

use Illuminate\Support\Facades\Route;

    Route::group(['prefix' => 'admin','middleware'=>'auth:admin'], function (){
        Route::get('/home','admin\dashboardController@index')->name('dashboard');
        Route::resource('books','admin\bookController');
        Route::resource('exams','admin\examController');
        Route::resource('resources','admin\resourceController');
        Route::resource('posts','admin\postController');
        Route::resource('blogs','admin\blogController');
        Route::resource('users','admin\UserController');
        Route::get('logout', 'admin\AdminController@logout')->name('admin.logout');
        Route::get('contact-us', 'admin\ContactController@index')->name('contact');
        Route::resource('contacts', 'admin\ContactController');
    });

    Route::group(['prefix' => 'admin','middleware'=>'guest:admin'], function (){

        Route::get('login', 'admin\AdminController@getLogin')->name('get.login');
        Route::post('login', 'admin\AdminController@login')->name('admin.login');
       // Route::post('logout', 'admin\AdminController@logout')->name('logout');

//       Route::get('logout', 'Auth\LoginController@logout')->name('logout');

    });

  Route::post('contact-us', 'admin\ContactController@store')->name('store.contact');
