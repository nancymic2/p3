
	
@extends('_master')

@section ('generator')

    <form method='GET' action='/lorem'>
    Number of paragraphs: <input type='text' name='num' id='num'>
    <input type='submit' value = 'Get Lorem'>
    </form>



<?php 
//echo '<img src="logo.jpg">';
echo '<br>';
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);

?>






@stop

