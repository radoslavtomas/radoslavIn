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

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function() {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/homepage', 'HomeController@getHomepage')->name('getHomepage');
	Route::post('homepage', 'HomeController@postHomepage')->name('postHomepage');
});


