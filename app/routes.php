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

//main page
Route::get('/', function()
{
	return View::make('index');
	
});

//text generator

Route::get('/lorem', function()
{

$num = Input::get('num');
	
if ($num > 20) 
{
	$num=20;
}

$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($num);

$someparas = implode('<p>', $paragraphs);

return View::make('lorem')->with('someparas', $someparas);

});


Route::get('/users', function()
{
	$numusers = Input::get('numusers');

return View::make('users')->with('numusers', $numusers);
});	

Route::get('/csv', function()
{
	$numusers = Input::get('numusers');

return View::make('csv')->with('numusers', $numusers);
});	

