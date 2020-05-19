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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//main.blade.php.のルーティング
Route::group(['prefix' => 'admin'], function() {
  Route::get('layouts/main', 'Admin\ZodiacsignsController@add');
});

//link.blade.php.のルーティング
Route::group(['prefix' => 'admin'], function() {
  Route::get('layouts/link', 'Admin\linkController@add');
});