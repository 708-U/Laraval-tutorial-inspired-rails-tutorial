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

Route::redirect('/', '/home');

/** Static Pages */
Route::namespace('statics')->group(function () {
    Route::get('/about', 'StaticPageController@about')->name('about');
    Route::get('/home', 'StaticPageController@home')->name('home');
    Route::get('/help', 'StaticPageController@help')->name('help');
    Route::get('/contact', 'StaticPageController@contact')->name('contact');
});

/** Users */
Route::get('/signup', 'UserController@new')->name('signup');
