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

Route::get('/', 'PagesController@index');
// Admin Routes
Route::get('/admin', 'PagesController@admin')->name('admin');
Route::get('/dashboard', 'AdminController@index')->name('adminindex');
Route::resource('services', 'ProductsController');
Route::get('/admin-aboutus', 'AdminController@about')->name('admin-aboutus');
Route::get('/active-services', 'ProductsController@activeservices')->name('manageservices');
Route::get('/inactive-services', 'ProductsController@inactiveservices')->name('inactiveservices');
Route::resource('blogcategories','BlogCategoriesController');
Route::resource('blogposts', 'BlogPostsController');
Route::get('/blog-archives', 'ArchivesController@allarchives')->name('allarchives');
Route::resource('customers', 'CustomersController');
Route::resource('weare', 'WeDoController');
Route::resource('sliders', 'SlidersController');
Route::resource('abouts', 'AboutsController');
// Public Routes
Route::get('/our-services', 'PagesController@services')->name('services');
Route::get('/pricing', 'PagesController@pricing')->name('pricing');
Route::get('/aboutus', 'PagesController@aboutus')->name('aboutus');
Route::get('/contactus', 'PagesController@contactus')->name('contactus');
Route::get('/download', 'PagesController@download')->name('download');
Route::get('/fromblog', 'PagesController@fromblog')->name('fromblog');
Route::get('/blog/{title}', 'PagesController@blog')->name('blog');
Route::get('/blog-category/{name}', 'PagesController@category')->name('category');
Route::get('/blogarchive', 'PagesController@blogarchive')->name('blogarchive');
Route::get('/userlogin', 'PagesController@userlogin')->name('userlogin');
Route::get('/signup', 'PagesController@signup')->name('signup');
Route::get('/reset-password', 'PagesController@reset_password')->name('reset-password');
Route::resource('leads', 'LeadsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
