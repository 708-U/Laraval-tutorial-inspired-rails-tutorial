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

Route::namespace('statics')->group(function () {
    Route::get('/about', 'StaticPageController@about');
    Route::get('/home', 'StaticPageController@home');
    Route::get('/help', 'StaticPageController@help');
    Route::get('/content', 'StaticPageController@content');
});
