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

Route::get('/generate', function()
{
	return View::make('lorem');   ///GET SOME PARAM
});





Route::get('/me', function()
{
	return "here comes proj 3 TESTING";
});



Route::get('/data', function()
{
	
	$books = File::get(app_path().'/database/books.json');
	$books = json_decode($books, true);
	$first_book = $books ["The Great Gatsby"];

	return  $first_book;

});





Route::get('/new', function() {

    $view  = '<form method="GET" action="/lorem">';
    $view .= 'Number of paragraphs: <input type="text" name="num">';
    $view .= '<input type="submit" value = "Get Lorem">';
    $view .= '</form>';
    return $view;

});







Route::get('/lorem', function()
{
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(25);
echo implode('<p>', $paragraphs);
});