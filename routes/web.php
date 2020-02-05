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


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/products', 'PageController@dashProducts')->name('dashProducts');
Route::get('/product-page', 'PageController@product_page')->name('dashProducts');
Route::get('/', 'PageController@homepage')->name('homepage');
Route::get('/menu', 'MenuController@menu_page')->name('menu_page');
Route::resource('products', 'ProductController');
Route::resource('reviews', 'ReviewController');
Route::get('/reviews/list', 'ReviewController@page_view')->name('review_list');
