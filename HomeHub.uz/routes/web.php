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
