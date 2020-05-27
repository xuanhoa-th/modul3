<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'BlogController@index')->name('admin.index');


Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'blogs'], function () {

        Route::get('/create', 'BlogController@create')->name('admin.create');
        Route::post('/create', 'BlogController@store')->name('admin.store');
        Route::get('/{id}/edit','BlogController@edit')->name('admin.edit');
        Route::post('/{id}/edit','BlogController@update')->name('admin.update');
        Route::get('/{id}/destroy','BlogController@destroy')->name('admin.destroy');
    });
});
