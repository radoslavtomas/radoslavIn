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

// Disabling this shortcut as I want to disable new registrations
//Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::middleware('auth')->prefix('admin')->group(function() {
	Route::get('home', 'AdminController@getDashboard')->name('getDashboard');

	Route::get('homepage', 'AdminController@getHome')->name('getHome');
	Route::post('homepage', 'AdminController@postHome')->name('postHome');

	Route::get('about', 'AdminController@getAbout')->name('getAbout');
	Route::post('about', 'AdminController@postAbout')->name('postAbout');

	Route::resource('portfolio', 'PortfolioController');

	Route::resource('profile', 'ProfileController');
});


