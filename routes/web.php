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

use App\Http\Controllers\HomeController;

Route::get('/', 'PagesController@getIndex')->name('index');
Route::get('about', 'PagesController@getAbout')->name('about');
Route::get('portfolio', 'PagesController@getPortfolio')->name('portfolio');
Route::get('contact', 'PagesController@getContact')->name('contact');
Route::post('contact', 'PagesController@postContact')->name('contact.post');

Route::get('getPortfolioById/{id}', 'PagesController@getPortfolioById');

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function() {
	Route::get('home', 'AdminController@getDashboard')->name('getDashboard');

	Route::get('homepage', 'AdminController@getHome')->name('getHome');
	Route::post('homepage', 'AdminController@postHome')->name('postHome');

	Route::get('about', 'AdminController@getAbout')->name('getAbout');
	Route::post('about', 'AdminController@postAbout')->name('postAbout');

	Route::resource('portfolio', 'PortfolioController');

	Route::get('contact', 'AdminController@getContact')->name('getContact');
});


