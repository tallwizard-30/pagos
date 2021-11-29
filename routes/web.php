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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/payments/pay', 'pagosController@pay')->name('pay');
Route::get('/payments/approval', 'pagosController@approval')->name('approval');
Route::get('/payments/cancelled', 'pagosController@cancelled')->name('cancelled');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
