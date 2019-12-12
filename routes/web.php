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

Route::get('/', function () {
    return view('index');
});

Route::get('/services', 'PagesController@services')->name('services');
Route::get('/pricing', 'PagesController@pricing')->name('pricing');
Route::get('/aboutus', 'PagesController@aboutus')->name('aboutus');
Route::get('/contactus', 'PagesController@contactus')->name('contactus');
Route::get('/download', 'PagesController@download')->name('download');
Route::get('/fromblog', 'PagesController@fromblog')->name('fromblog');
Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/category', 'PagesController@category')->name('category');
Route::get('/blogarchive', 'PagesController@blogarchive')->name('blogarchive');
Route::get('/userlogin', 'PagesController@userlogin')->name('userlogin');
Route::get('/signup', 'PagesController@signup')->name('signup');
Route::get('/reset-password', 'PagesController@reset_password')->name('reset-password');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
