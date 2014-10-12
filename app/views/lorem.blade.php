<?php 



//$logo = File::get(app_path().'logo.jpg');

echo '<img src="logo.jpg">';
echo '<br>';
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);

