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

Route::group(['prefix' => 'admin'], function() {
  Route::get('zodiac_signs/top', 'Admin\ZodiacsignsController@add');
  Route::get('zodiac_signs/link', 'Admin\linkController@add');
  Route::get('zodiac_signs/profile', 'Admin\profileController@add');
  Route::get('zodiac_signs/birthday', 'Admin\birthdayController@add');
  Route::get('zodiac_signs/zodiacsigns', 'Admin\seizaController@add');
  Route::get('zodiac_signs/cancer', 'Admin\cancerController@add');
  Route::get('zodiac_signs/taurus', 'Admin\taurusController@add');
  Route::get('zodiac_signs/gemini', 'Admin\geminiController@add');
  Route::get('zodiac_signs/leo', 'Admin\leoController@add');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
