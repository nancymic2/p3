
	
@extends('_master')

@section ('generator')
<?php 
//echo '<img src="logo.jpg">';
echo '<br>';
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);

?>
@stop

