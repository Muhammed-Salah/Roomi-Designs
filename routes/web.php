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

Route::get('/', 'MainController@home')->name('home');

Route::get('/about', 'MainController@about')->name('about');



Route::get('/women/pg-1', 'MainController@women')->name('women');

Route::get('/women/pg-2', 'MainController@women2')->name('women2');

Route::get('/women/pg-3', 'MainController@women3')->name('women3');

Route::get('/kids/pg-1', 'MainController@kids')->name('kids');

Route::get('/kids/pg-2', 'MainController@kids2')->name('kids2');

Route::get('/product', 'MainController@product')->name('product');
