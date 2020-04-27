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
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','HomeController@index')->name('/'); //return main Index.blade.php
Route::get('list','HomeController@list')->name('list'); //return object view List.blade.php
Route::get('reg','HomeController@reg')->name('reg'); //return object view Registration.blade.php
Route::get('about_us','HomeController@about_us')->name('about_us'); //return object view AboutUs.blade.php



//Authorized routes

//TODO devide common user and authors
Route::get('author_list','HomeController@Author_list')->name('author_list');
