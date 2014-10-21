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
Route::get('/adverts', function()
{
	return View::make('pages.adverts');
});
Route::get('/history', function()
{
	return View::make('pages.history');
});
Route::get('/cart', function()
{
	return View::make('pages.cart');
});
Route::get('/contact', function()
{
	return View::make('pages.contact');
});

