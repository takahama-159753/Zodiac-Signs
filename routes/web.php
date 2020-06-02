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
  Route::get('zodiac_signs/top', 'Admin\ZodiacsignsController@add')->middleware('auth');
  Route::get('zodiac_signs/link', 'Admin\linkController@add')->middleware('auth');
  Route::get('zodiac_signs/profile', 'Admin\profileController@add')->middleware('auth');
  Route::get('zodiac_signs/birthday', 'Admin\birthdayController@add')->middleware('auth');
  Route::get('zodiac_signs/aries', 'Admin\ariesController@add')->middleware('auth');
  Route::get('zodiac_signs/cancer', 'Admin\cancerController@add')->middleware('auth');
  Route::get('zodiac_signs/taurus', 'Admin\taurusController@add')->middleware('auth');
  Route::get('zodiac_signs/gemini', 'Admin\geminiController@add')->middleware('auth');
  Route::get('zodiac_signs/leo', 'Admin\leoController@add')->middleware('auth');
  Route::get('zodiac_signs/virgo', 'Admin\virgoController@add')->middleware('auth');
  Route::get('zodiac_signs/libra', 'Admin\libraController@add')->middleware('auth');
  Route::get('zodiac_signs/scorpio', 'Admin\scorpioController@add')->middleware('auth');
  Route::get('zodiac_signs/sagittarius', 'Admin\sagittariusController@add')->middleware('auth');
  Route::get('zodiac_signs/capricorn', 'Admin\capricornController@add')->middleware('auth');
  Route::get('zodiac_signs/aquarius', 'Admin\aquariusController@add')->middleware('auth');
  Route::get('zodiac_signs/pisces', 'Admin\piscesController@add')->middleware('auth');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
