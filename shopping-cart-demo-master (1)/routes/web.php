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

Route::get('/','HomeController@index')->name('cart.index');

Route::get('/cart','ShoppingCartController@index')->name('cart.index');

Route::get('/add-to-cart/{id}', 'ShoppingCartController@addToCart')->name('cart.addToCart');
Route::get('/remove-to-cart/{id}', 'ShoppingCartController@removeProductIntoCart')->name('cart.removeProductIntoCart');
Route::post('/update-to-cart/{id}', 'ShoppingCartController@updateProductIntoCart')->name('cart.updateProductIntoCart');
