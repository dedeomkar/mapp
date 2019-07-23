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

Route::get('/', 'userController@login');

Route::get('login', 'userController@login')->middleware('block'); 
Route::post('login', 'userController@register')->middleware('guest')->name('regis');  

Route::post('api/login', 'Api\loginController@register') ;  
Route::post('api/otp', 'Api\loginController@otp') ; 
Route::post('api/refresh', 'Api\loginController@refresh') ; 

Route::get('logout', 'userController@logout')->middleware('block');
Route::post('logout', 'userController@logout')->middleware('auth'); 
Route::get('otp', 'otpController@get')->middleware('block'); 
Route::post('otp', 'otpController@check') ; 