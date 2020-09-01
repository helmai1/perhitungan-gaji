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

Route::view('/', 'welcome');
Route::get('home/create', 'HomeController@create');

Auth::routes();
// Route::get('/home', 'HomeController@index');
Route::view('/home', 'home')->middleware('auth');
Route::get('/gaji', 'GajiController@index');
Route::get('/gaji/{id}', 'GajiController@show');
Route::post('/gaji/store', 'GajiController@store');
Route::put('/gaji/{id}', 'GajiController@update');
Route::delete('/gaji/{id}', 'GajiController@delete');




// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
