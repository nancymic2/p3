
	
@extends('_master')

@section ('generator')

Welcome to your new Best Friend. Below are some automated helpers for some common web development needs. Enjoy!
<h3>Get dummy text</h3>

    <form method='GET' action='/lorem'>
    Number of paras up to 20: <input type='text' name='num' id='num'>
    <input type='submit' value = 'Get Lorem'>
    </form>

<h3>Get some users</h3>

    <form method='GET' action='/users'>
    Number of faux users: <input type='text' name='numusers' id='numusers'>
    <input type='submit' value = 'Get Users'>
    </form>

    <h3>Get CSV of users</h3>

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

