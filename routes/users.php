<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/log/pin','userController@indexGet')->middleware('auth');
Route::post('/log/pin','userController@indexPost');
Route::get('/log/change','userController@changePin')->middleware('auth');
Route::post('/log/change','userController@changePin');
Route::any('logout','userController@logout');

