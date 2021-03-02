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








/* temp routes for under construction */
Route::get('/', 'pagesController@home');
Route::post('/', 'pagesController@saveForm');
Route::get('/coworking', 'pagesController@coworking');
Route::get('/home', 'pagesController@homeTest');
Route::post('/coworking', 'pagesController@saveForm');
Route::get('/events/1', 'pagesController@event1');
Route::get('/events/newyear', 'pagesController@newyear');
Route::post('/events/newyear', 'pagesController@saveApp');
Route::post('/events/newyear/data', 'pagesController@newyearData');
Route::get('/timer', 'pagesController@timer');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/test', 'pagesController@test')->name('test');
