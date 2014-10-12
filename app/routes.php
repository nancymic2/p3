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
	return "here comes proj 3";
});

Route::get('/me', function()
{
	return "here comes proj 3 TESTING";
});

Route::get('/data', function()
{
	$books = File::get(app_path().'/database/books.json');
	return $books;
});