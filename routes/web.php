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
Route::get('/events', 'pagesController@home');
Route::post('/', 'pagesController@saveForm');
Route::get('/coworking1', 'pagesController@coworking1');
Route::get('/home', 'pagesController@homeTest');
Route::post('/coworking1', 'pagesController@saveForm');
Route::get('/events/1', 'pagesController@event1');

Route::post('/events/newyear/data', 'pagesController@newyearData');
Route::get('/timer', 'pagesController@timer');

Route::get('/events/facebook-advanced', 'pagesController@facebookAdvanced');
Route::get('/events/facebook-basic', 'pagesController@facebookBasic');
Route::post('/events/newyear', 'pagesController@saveApp');

Route::get('/pdf/facebook_ads_advanced', 'PagesController@advanced');
Route::get('/pdf/facebook_ads_basic', 'PagesController@basic');





Auth::routes();

/* user */

Route::get('/test', 'PagesController@test')->name('test');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/cameras', 'HomeController@ShowCam')->name('cameras');
Route::get('/home/episodes', 'HomeController@ShowUserEpisodes')->name('UserEpisodes');
Route::get('/home/messages', 'HomeController@ShowMessages')->name('messages');
/*Route::get('/home/events', 'HomeController@ShowUserEvents')->name('UserEvents');*/
Route::get('/home/portfolio', 'HomeController@ShowPortfolio')->name('portfolio');
Route::get('/home/coworking', 'HomeController@ShowUserCoworking')->name('UserCoworking');
Route::get('/home/coworking/register', 'HomeController@ShowRegisterCoworking')->name('RegisterCoworking');
Route::get('/home/coworkers', 'HomeController@ShowCoworkers')->name('coworkers');
Route::get('/home/settings', 'HomeController@ShowSettings')->name('UserSettings');
Route::get('/home/news', 'HomeController@ShowUserNews')->name('UserNews');
Route::get('/home/support', 'HomeController@ShowSupport')->name('support');

Route::post('/home/portfolio','HomeController@UpdatePortfolio');





/* Guest */

Route::get('/main', 'PagesController@ShowHome')->name('ShowHome');
Route::get('/job', 'PagesController@ShowJob')->name('ShowJob');
Route::get('/events', 'PagesController@ShowEvents')->name('ShowEvents');
Route::get('/coworking', 'PagesController@ShowCoworking')->name('ShowCoworking');
Route::get('/news', 'PagesController@ShowNews')->name('ShowNews');
Route::get('/contact', 'PagesController@ShowContact')->name('ShowContact');






/* admin */

Route::get('/admin/edit/Guests', 'AdminController@ShowAdminEditGuests')->name('AdminEditGuests');
Route::get('/admin/edit/episodes', 'AdminController@ShowAdminEditEpisodes')->name('AdminEditEpisodes');
Route::get('/admin/edit/events', 'AdminController@ShowAdminEditEvents')->name('AdminEditEvents');
Route::get('/admin/edit/news', 'AdminController@ShowAAdminEditNews')->name('AdminEditNews');
Route::get('/admin/edit/coworkers', 'AdminController@ShowAdminEditCoworkers')->name('AdminEditCoworkers');
Route::get('/admin/show/EventSubscribers', 'AdminController@ShowAdminEventSubscribers')->name('AdminEventSubscribers');
Route::get('/admin/show/requests/coworking', 'AdminController@ShowAdminCoworkingRequests')->name('AdminCoworkingRequests');
Route::get('/admin/show/requests/events', 'AdminController@ShowAdminEventRequests')->name('AdminEventRequests');




/* portfolio should be LAST*/
Route::get('/{username}', 'PortfolioController@ShowPortfolio')->name('ShowPortfolio');



