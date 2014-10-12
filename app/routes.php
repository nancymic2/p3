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
	//get file
	$books = File::get(app_path().'/database/books.json');
	//convert to array
	$books = json_decode($books, true);
	//return array first entry via text index
	$first_book = $books ["The Great Gatsby"];

	return  $first_book;

	//return $books;
});