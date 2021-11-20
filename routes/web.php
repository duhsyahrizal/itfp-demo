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

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
  Route::get('', 'AdminController@index')->name('home');

  Route::get('logout', 'AuthController@logout')->name('logout');
});

Route::get('api/trigger', 'ApiController@trigger');

Route::get('', function() {
  return redirect('login');
});
Route::get('login', 'AuthController@showLogin')->name('login');
Route::post('login', 'AuthController@login');