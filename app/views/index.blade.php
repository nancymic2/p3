
	
@extends('_master')

@section ('generator')

<h2>Get up to 20 paragraphs of Lorem Ipsum text</h2>

    <form method='GET' action='/lorem'>
    Number of paragraphs: <input type='text' name='num' id='num'>
    <input type='submit' value = 'Get Lorem'>
    </form>

<h2>Get some users</h2>

    <form method='GET' action='/users'>
    Number of faux users: <input type='text' name='numusers' id='numusers'>
    <input type='submit' value = 'Get Users'>
    </form>

    <h2>Get CSV users</h2>

    <form method='GET' action='/csv'>
    Number of faux users: <input type='text' name='numusers' id='numusers'>
    <input type='submit' value = 'Get CSV'>
    </form>



<?php 
/*
echo '<br>';
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);
*/
?>






@stop

