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
	//$num = $_GET['num'];

//handle string inut
/*if (is_string($num))
{
	//$num=1;
	echo '<h2>Only Numbers Please</h2>';
}
*/
//limit to 20 paras
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
//eventually make the view here but echo for now
//echo '<h2>get some users</h2>';

return View::make('users')->with('numusers', $numusers);
});	


//old test code

/*Route::get('/data', function()
{
	
	$books = File::get(app_path().'/database/books.json');
	$books = json_decode($books, true);
	$first_book = $books ["The Great Gatsby"];

	return  $first_book;

});*/