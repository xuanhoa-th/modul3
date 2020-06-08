<?php

use Illuminate\Support\Facades\Route;


Route::get('/','Frontend\HomeController@index')->name('index');
Route::get('login','Frontend\LoginController@login')->name('login');
Route::get('register','Frontend\RegisterController@register')->name('register');
Route::get('account','Frontend\AccountController@account')->name('account');


Route::group(['prefix' => 'cart'], function (){
        Route::get('add/{id}', 'CartController@add')->name('cart.add');
        Route::get('view', 'CartController@view')->name('cart.view');
        Route::get('remove/{id}', 'CartController@remove')->name('cart.remove');
        Route::get('clear', 'CartController@clear')->name('cart.clear');
        Route::get('update/{id}', 'CartController@update')->name('cart.update');
});

Route::group(['prefix' => 'checkout'], function (){

    Route::get('/','Frontend\CheckoutController@form')->name('checkout');
    Route::post('/','Frontend\CheckoutController@submit_form')->name('checkout');
    Route::get('/checkout-success','Frontend\CheckoutController@success')->name('checkout.success');
});



Route::prefix('admin')->group(function (){
    Route::get('/','Admin\HomeController@index')->name('admin.home');
});
