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
//Route::prefix('customer')->group(function (){
//    Route::get('index', function (){
//        return view('index');
//    });
//    Route::get('create', function () {
//        return view('create');
//    });
////
//    Route::post('store', function () {
//
//    });
//
//    Route::get('{id}/show', function () {
//        // Hiển thị thông tin chi tiết khách hàng có mã định danh id
//    });
//
//    Route::get('{id}/edit', function () {
//        // Hiển thị Form chỉnh sửa thông tin khách hàng
//    });
//
//    Route::patch('{id}/update', function () {
//        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
//    });
//
//    Route::delete('{id}', function () {
//        // Xóa thông tin dữ liệu khách hàng
//    });
//
//
//});

//Route::resource('customers', 'CustomerController');


Route::group(['prefix'=>'customers'],function(){
//    dd("ok route");
    Route::get('/', 'CustomerController@index')->name('customers.index');
//    Route::get('create', 'TaskController@create')->name('tasks.create');
//    Route::post('/', 'TaskController@store')->name('tasks.show');
//    Route::get('/{taskId}', 'TaskController@show')->name('tasks.store');
//    Route::get('/{taskId}/edit', 'TaskController@edit')->name('tasks.edit');
//    Route::PUT('/{taskId}', 'TaskController@update')->name('tasks.update');
//    Route::DELETE('/{photo}', 'TaskController@destroy')->name('	tasks.destroy');
});
Route::group(['prefix'=>'tasks'],function(){
//    dd("ok route");
    Route::get('/', 'TaskController@index')->name('tasks.index');
//    Route::get('create', 'TaskController@create')->name('tasks.create');
//    Route::post('/', 'TaskController@store')->name('tasks.show');
//    Route::get('/{taskId}', 'TaskController@show')->name('tasks.store');
//    Route::get('/{taskId}/edit', 'TaskController@edit')->name('tasks.edit');
//    Route::PUT('/{taskId}', 'TaskController@update')->name('tasks.update');
//    Route::DELETE('/{photo}', 'TaskController@destroy')->name('	tasks.destroy');
});

Route::get('category','CategoriesController@index');

