
@extends('_master')

@section ('generator')
<?php 


/* get the number of words from the form and put in numofwords*/
$num = $_GET['num'];


//echo '<img src="logo.jpg">';
echo '<br>';
$generator = new Badcow\LoremIpsum\Generator($num);
$paragraphs = $generator->getParagraphs($num);
echo implode('<p>', $paragraphs);

?>
@stop


