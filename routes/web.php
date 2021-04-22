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
Route::get('/coworking1', 'pagesController@coworking1');
Route::get('/home', 'pagesController@homeTest');
Route::post('/coworking1', 'pagesController@saveForm');
Route::get('/events/1', 'pagesController@event1');
Route::get('/events/newyear', 'pagesController@newyear');
Route::post('/events/newyear', 'pagesController@saveApp');
Route::post('/events/newyear/data', 'pagesController@newyearData');
Route::get('/timer', 'pagesController@timer');





Auth::routes();

/* user */

Route::get('/test', 'PagesController@test')->name('test');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/cameras', 'HomeController@ShowCam')->name('cameras');
Route::get('/home/episodes', 'HomeController@ShowUserEpisodes')->name('UserEpisodes');
Route::get('/home/messages', 'HomeController@ShowMessages')->name('messages');
Route::get('/home/events', 'HomeController@ShowUserEvents')->name('UserEvents');
Route::get('/home/portfolio', 'HomeController@ShowPortfolio')->name('portfolio');
Route::get('/home/coworking', 'HomeController@ShowUserCoworking')->name('UserCoworking');
Route::get('/home/coworking/register', 'HomeController@ShowRegisterCoworking')->name('RegisterCoworking');
Route::get('/home/coworkers', 'HomeController@ShowCoworkers')->name('coworkers');
Route::get('/home/settings', 'HomeController@ShowSettings')->name('settings');
Route::get('/home/news', 'HomeController@ShowUserNews')->name('UserNews');
Route::get('/home/support', 'HomeController@ShowSupport')->name('support');





/* Guest */

Route::get('/main', 'PagesController@ShowHome')->name('ShowHome');
Route::get('/job', 'PagesController@ShowJob')->name('ShowJob');
Route::get('/episodes', 'PagesController@ShowEpisodes')->name('ShowEpisodes');
Route::get('/events', 'PagesController@ShowEvents')->name('ShowEvents');
Route::get('/coworking', 'PagesController@ShowCoworking')->name('ShowCoworking');
Route::get('/news', 'PagesController@ShowNews')->name('ShowNews');
Route::get('/contact', 'PagesController@ShowContact')->name('ShowContact');


Route::get('/{user}', 'PortfolioController@ShowPortfolio')->name('ShowPortfolio');




