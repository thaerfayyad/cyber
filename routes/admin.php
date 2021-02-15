<?php

use Illuminate\Support\Facades\Route;



    Route::group(['prefix' => 'admin'], function (){


        Route::get('dash','admin\dashboardController@index')->name('dashboard');
        Route::resource('books','admin\bookController');
        Route::resource('exams','admin\examController');
        Route::resource('resources','admin\resourceController');
        Route::resource('blogs','admin\blogController');
        Route::resource('posts','admin\blogController');



    });
