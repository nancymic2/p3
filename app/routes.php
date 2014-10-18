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
	return View::make('index');
	
});



Route::get('/me', function()
{
	return "here comes proj 3 TESTING";
});








Route::get('/lorem', function()
{
$num = Input::get('num');
	//$num = $_GET['num'];

$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($num);
$someparas = implode('<p>', $paragraphs);




return View::make('lorem')->with('someparas', $someparas);


});



//Route::get('/lorem/{num?}', function($num = 5) {
//  return View::make('lorem')->with('num', $num);
//});

/*Route::get('/data', function()
{
	
	$books = File::get(app_path().'/database/books.json');
	$books = json_decode($books, true);
	$first_book = $books ["The Great Gatsby"];

	return  $first_book;

});*/