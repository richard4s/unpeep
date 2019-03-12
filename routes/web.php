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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/stock', 'HomeController@unpeep_stock')->name('stock');

Route::get('/photographer', 'PeeperController@index')->name('photographer');
Route::post('/photographer', 'PeeperController@store');
Route::get('/book-photographer', 'PeeperController@book')->name('book-photographer');
Route::post('/book-photographer', 'PeeperController@book');

