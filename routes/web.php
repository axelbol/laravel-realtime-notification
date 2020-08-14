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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// User routes
Route::middleware('auth')->group(function () {
	Route::get('/order', 'UserOrderController@index')->name('user.order');
	Route::get('/order/create', 'UserOrderController@create')->name('user.order.create');
	Route::post('/order', 'UserOrderController@store')->name('user.order.store');
	Route::get('/order/{order}', 'UserOrderController@show')->name('user.order.show');
});

// Admin Routes - make sure you implement an auth layer here
Route::prefix('admin')->group(function () {
	Route::get('/order', 'AdminOrderController@index')->name('admin.order');
	Route::get('/order/edit/{order}', 'AdminOrderController@edit')->name('admin.order.edit');
	Route::patch('/order/{order}', 'AdminOrderController@update')->name('admin.order.update');
});