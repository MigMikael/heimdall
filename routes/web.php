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

Route::get('dashboard', 'HomeController@dashboard');

Route::get('beacon', 'BeaconController@index');
Route::get('beacon/take/{record}', 'BeaconController@take');
Route::get('beacon/take/{start}/{end}', 'BeaconController@takeRange');

Route::get('event', 'EventController@index');


Route::get('test/time', 'TestController@testTimeDiff');
