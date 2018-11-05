<?php
// Author: Tien Quang Nguyen
// Date: Nov 5, 2018

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

Route::get('/', 'MainContentController@index');

Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@update');

Route::get('/create_post', 'CreatePostController@index');
Route::post('/create_post', 'CreatePostController@update');

Route::get('/like/{postId}', 'LikeOrUnlikeController@like');
Route::get('/unlike/{postId}', 'LikeOrUnlikeController@unlike');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{id}', 'MainContentController@index');

