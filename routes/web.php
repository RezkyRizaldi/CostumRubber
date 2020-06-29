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

// Route::get('/', function () {
//     return view('welcome');
// });

// User
// Home
Route::get('/home', 'HomeController@index');

// Product Page
Route::get('/product', 'ProductController@index');

// Details Product Page
Route::get('/product/details-product', 'ProductDetailsController@index');

// About Us Page
Route::get('/about', 'AboutController@index');

// Contact Us Page
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store')->name('contact');

// Auth
Auth::routes();

// Admin 
// Home
Route::get('/admin/home', 'Admin\AdminHomeController@index')->name('admin_home')->middleware('auth');

// Chat
Route::get('/admin/chat', 'Admin\ChatController@index');

// Product Table
Route::get('/admin/product', 'Admin\AdminProductController@index');

// Gallery Table
Route::get('/admin/gallery', 'Admin\GalleryController@index');