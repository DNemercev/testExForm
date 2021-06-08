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

Route::get('/', 'App\Http\Controllers\MainController@fillAllSelects');
Route::get('showAllInfoCallCenter', 'App\Http\Controllers\MainController@showAllInfoCallCenter')->name('showAllInfoCallCenter');
Route::get('showAllInfoDesk', 'App\Http\Controllers\MainController@showAllInfoDesk')->name('showAllInfoDesk');
Route::get('showAllInfoTeam', 'App\Http\Controllers\MainController@showAllInfoTeam')->name('showAllInfoTeam');
Route::get('showAllInfoUser', 'App\Http\Controllers\MainController@showAllInfoUser')->name('showAllInfoUser');
Route::get('home', 'App\Http\Controllers\MainController@home');
Route::get('secondForm', 'App\Http\Controllers\MainController@secondForm')->name('secondForm');
