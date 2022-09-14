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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SmsController@compose')->name('compose');
Route::get('send-sms', 'SmsController@sendSMS')->name('send.sms');
Route::get('sms-response', 'SmsController@smsResponse')->name('sms.response');