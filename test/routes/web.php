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

//Route::get('/', function () {
//    return view('index');
//});
//Route::get('home', 'DemoController@home')->name('home');
//Route::get('about', 'DemoController@about')->name('about');
//Route::get('product/{id}/{name}', 'DemoController@product')->name('product');


Route::group(['prefix'=>'admin2'],function(){
//    dd("ok route");
    Route::get('/', 'Backend\BackEndController@index');
    Route::get('list-category', 'Backend\CategoryController@index');
    Route::post('add-category', 'Backend\CategoryController@add')->name('add-category');
    Route::get('upfile','UpFileController@create')->name('upfile');
    Route::post('up','UpFileController@up')->name('up');
});
