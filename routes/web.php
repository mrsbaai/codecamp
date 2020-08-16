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

Route::get('/', 'pagesController@home');
Route::post('/', 'pagesController@saveForm');

Route::get('/coworking', 'pagesController@coworking');
Route::get('/dev', 'pagesController@dev');

Route::post('/dev', 'pagesController@saveForm');
Route::post('/coworking', 'pagesController@saveForm');


