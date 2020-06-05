<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('weather', 'Api\WeatherController@index')->name('weatherApi');
Route::get('category', 'CategoryController@index')->name('category');
Route::get('/{id}/destroy','CategoryController@destroy')->name('category.destroy');
