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



Route::get('/','CardsController@index');
Route::get('/cards','CardsController@getall');
Route::get('/cards/create','CardsController@create');
Route::get('/card/{card}/','CardsController@show');
Route::get('/card/{card}/edit','CardsController@edit');
Route::patch('/card/{card}/edit','CardsController@update');
Route::post('/cards/create','CardsController@store');
Route::delete('/cards/{card}/delete','CardsController@destroy');
