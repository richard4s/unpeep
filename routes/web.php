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

Route::get('/book-photographer', 'PeeperController@bookPhotographer')->name('book-photographer');
Route::post('/book-photographer', 'PeeperController@bookPhotographer');

Route::get('/planner', 'PeeperController@planner')->name('planner');
Route::post('/planner', 'PeeperController@planner');
//Route::post('/photographer', 'PeeperController@book');
Route::get('/photographer', 'PeeperController@book')->name('photographer');
Route::post('/photographer', 'PeeperController@book');

