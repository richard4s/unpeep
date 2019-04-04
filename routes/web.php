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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/blog-posts', 'DashboardController@blogPosts')->name('blog-posts');

Route::get('/new-post', 'DashboardController@createPosts')->name('new-post');
Route::post('/new-post', 'DashboardController@createPosts')->name('new-post');

Route::get('/edit-posts/{id}', 'DashboardController@editPosts')->name('edit-posts');
Route::post('/edit-posts', 'DashboardController@editPosts')->name('edit-posts');

Route::get('/posts/{id}', 'PostsController@posts')->name('posts');
