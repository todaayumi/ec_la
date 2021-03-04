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

Route::get('/', 'StuckController@index');
Route::post('/cart', 'CartController@store');
Route::post('/', 'StuckController@post');
Route::get('/cart', 'CartController@show');
Route::get('/delete', 'CartController@delete');
