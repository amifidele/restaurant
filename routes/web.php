<?php

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/products', 'PageController@dashProducts')->name('dashProducts');
Route::get('/gallery/view', 'PageController@gallery_page')->name('gallery_page');
Route::get('/', 'PageController@homepage')->name('homepage');
Route::get('/menu', 'MenuController@menu_page')->name('menu_page');
Route::resource('products', 'ProductController');
Route::resource('reviews', 'ReviewController');
Route::resource('gallery', 'GalleryController');
//Route::get('/', 'PageController@reviews_page')->name('review_page');
Route::get('/', 'PageController@product_page')->name('product_page');

