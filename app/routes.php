<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.home');
});
Route::get('/about', function()
{
	return View::make('pages.about');
});
Route::get('/advertisments', function()
{
	return View::make('auth.login');
});
Route::get('/contact', function()
{
	return View::make('pages.contact');
});

//definig the registration process
Route::get('signup', ['as' => 'signup', 'uses'=> 'AuthController@signupPage']);
// Create Account Route
Route::post('account', ['as' => 'account', 'uses' => 'AuthController@signup']);
// Sign In Route
Route::get('signin', ['as' => 'signin', 'uses'=> 'AuthController@loginPage']);
// Login Route
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);
// Logout
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);



