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
  Route::get('zodiac_signs/aries', 'Admin\ariesController@add');
  Route::get('zodiac_signs/cancer', 'Admin\cancerController@add');
  Route::get('zodiac_signs/taurus', 'Admin\taurusController@add');
  Route::get('zodiac_signs/gemini', 'Admin\geminiController@add');
  Route::get('zodiac_signs/leo', 'Admin\leoController@add');
  Route::get('zodiac_signs/virgo', 'Admin\virgoController@add');
  Route::get('zodiac_signs/libra', 'Admin\libraController@add');
  Route::get('zodiac_signs/scorpio', 'Admin\scorpioController@add');
  Route::get('zodiac_signs/sagittarius', 'Admin\sagittariusController@add');
  Route::get('zodiac_signs/capricorn', 'Admin\capricornController@add');
  Route::get('zodiac_signs/aquarius', 'Admin\aquariusController@add');
  Route::get('zodiac_signs/pisces', 'Admin\piscesController@add');
  Route::get('zodiac_signs/createaccount', 'Admin\createaccountController@add');
  Route::get('zodiac_signs/zodiacsigns', 'Admin\birthdayController@selcetZodiacsigns');
  
  Route::post('zodiac_signs/searchzodiacsigns', 'Admin\birthdayController@selcetZodiacsigns');
});


