
	
@extends('_master')

@section ('generator')


<h3>Get dummy text</h3>

    <form method='GET' action='/lorem'>
    Number of paras &lt; 21: <input type='text' name='num' id='num'>
    <input type='submit' value = 'Get Lorem'>
    </form>

<h3>Get some users</h3>

    <form method='GET' action='/users'>
    Number of users &lt; 51: <input type='text' name='numusers' id='numusers'>
    <input type='submit' value = 'Get Users'>
    </form>

    <h3>Get CSV of users</h3>

    <form method='GET' action='/csv'>
    Number of users &lt; 51: <input type='text' name='numusers' id='numusers'>
    <input type='submit' value = 'Get CSV'>
    </form>

<h3>Get pword</h3>

    <form method='GET' action='/password'>
    Number of words &lt; 10: <input type='text' name='numofwords' id='numofwords'>
    <input type='submit' value = 'Get password'>
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

