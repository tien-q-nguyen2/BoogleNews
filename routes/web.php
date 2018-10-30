<!-- Author: Tien Quang Nguyen
Date: Oct 30, 2018
Course: CPNT-262: Web Client & Server Programming
Mid-term Assignment -->

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

Route::get('/', 'LandingPageController@index');
