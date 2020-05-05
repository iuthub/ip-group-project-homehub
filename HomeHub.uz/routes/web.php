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
Route::get('signup', 'PagesController@getSignup');

Route::get('signin', 'PagesController@getSignin');

Route::get('about', 'PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

Route::get('dashboard', 'PagesController@getDashboard');

Route::get('posts', 'PagesController@getPosts');

Route::get('editpost', 'PagesController@getEditpost');
