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
Route::get('/product/details-product/{products}', 'ProductController@show')->name('products');
Route::get('/search_product', 'ProductController@search')->name('search_product');
Route::post('/search', 'ProductController@search_product')->name('search');
Route::post('/filter_product', 'ProductController@filter_product')->name('filter_product');
Route::post('/filter', 'ProductController@filter')->name('filter');


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
Route::get('/chat/delete/{id}', 'AboutController@destroy')->name('delete_chat');

// Product Table
Route::get('/admin/product', 'Admin\AdminProductController@index');
Route::post('/admin/product/add_product', 'Admin\AdminProductController@store')->name('add_product');
Route::delete('/admin/{id}', 'Admin\AdminProductController@destroy')->name('delete_product');
Route::get('/admin/product/edit-product/{products}', 'Admin\AdminProductController@edit')->name('edit_product');
Route::put('/admin/product/edit-product/{products}/update-product', 'Admin\AdminProductController@update')->name('update_product');





// Gallery Table
Route::get('/admin/gallery', 'Admin\GalleryController@index');
