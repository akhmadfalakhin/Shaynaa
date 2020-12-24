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

Route::get('/','DashboardController@index')->name('dashboard');

Auth::routes(['register' => false]);


Route::get('products/{id}/gallery', 'ProductController@gallery')->name('products.gallery');
route::resource('products', 'ProductController');

route::resource('product-galleries', 'ProductGalleryController');

route::resource('transactions', 'TransactionController');