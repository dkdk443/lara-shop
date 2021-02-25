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

Route::get('/', 'App\Http\Controllers\ShopController@index');
Route::get('items/{id}', 'App\Http\Controllers\ShopController@show')->name('shop.show');
Route::get('items/{id}/cart', 'App\Http\Controllers\ShopController@addCart')->name('shop.addCart');
Route::get('cart', 'App\Http\Controllers\ShopController@cart')->name('shop.cart');
Route::resource('staffs', 'App\Http\Controllers\StaffController')->except(['show'])->middleware('auth');
Route::resource('products', 'App\Http\Controllers\ProductController')->middleware('auth');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
