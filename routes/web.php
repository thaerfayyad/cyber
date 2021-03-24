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



Auth::routes(['verify' => true]);
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/home','Site\homeController@index')->name('index');//->middleware('verified');
    Route::get('about','Site\homeController@about')->name('about');
    Route::get('create-Contact','Site\homeController@createContact')->name('createContact');
    Route::get('attachment-create','Site\homeController@create')->name('attachment.create');
    Route::post('attachment-store','Site\homeController@store')->name('attachment.store');
    Route::get('layer','Site\LayersController@index')->name('layers.page');
    Route::get('/','Site\homeController@index');
    Route::get('Sign','Site\UserController@create')->name('signup');
    Route::post('store','Site\UserController@store')->name('users.save');
    Route::get('Log-in','Site\UserController@getLogIn')->name('users.login');
    Route::post('user-sign-in','Site\UserController@userLogin')->name('users.signIn');
    Route::get('books-library-student', 'site\BookController@student')->name('student.index');
    Route::get('books-library-general', 'site\BookController@general')->name('general.index');
    Route::get('books', 'site\BookController@book')->name('book.home');
    Route::get('download/{id}', 'site\BookController@download')->name('book.download');
    Route::get('show/{id}', 'site\BookController@download')->name('book.show');
    Route::get('resources-library-general', 'site\BookController@resources')->name('resources.book.home');
    Route::get('exercises-library-general', 'site\BookController@exercises')->name('exercises.book.home');
    Route::get('resources', 'site\ResourcesController@index')->name('resources.home');
    Route::get('blogs' , 'site\BlogsController@index')->name('blogs.home.page');
    Route::post('blogs-store' , 'site\BlogsController@store')->name('user.blog.Store');
    Route::get('blogs-details/{id}' , 'site\BlogsController@show')->name('blogs.details.page');
    Route::get('comments' , 'site\BlogsController@comments')->name('comments.index');
    Route::delete('destroy/{id}' , 'site\BlogsController@destroy')->name('comments.destroy');
    Route::get('news-details/{id}' , 'site\NewsController@show')->name('news.details.page');
    Route::post('attachments/store' , 'site\AttachmentController@store')->name('attachment.store');
    Route::get('profile/{id}','site\UserController@edit')->name('profile.edit');
    Route::put('profile/update/{id}','site\UserController@update')->name('profile.update');

    Route::get('getout','site\UserController@LogOut')->name('getout');




    //ajax insert post
    Route::post('insert/post','site\blogsController@addComment')->name('add.post.comment');

    //ajax get layer
    Route::get('get/layer' , 'Site\LayersController@getlayer')->name('get.layer');
    //ajax change the status
Route::get('/changeStatus', 'Admin\bookController@changeStatus');
