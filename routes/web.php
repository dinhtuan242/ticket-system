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
    return view('home');
});

Route::get('/contact', 'TicketsController@create')->name('getCreate');
Route::post('/contact', 'TicketsController@store')->name('postCreate');
Route::get('/ticket', 'TicketsController@index')->name('index');
Route::get('/ticket/{slug?}', 'TicketsController@show')->name('show');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit')->name('getEdit');
Route::post('/ticket/{slug?}/edit','TicketsController@update')->name('postEdit');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy')->name('postDelete');
