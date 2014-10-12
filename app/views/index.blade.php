<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>


	
</head>
<body>
	

<h1>Lorem Ipsum bla bla bla bla</h1>

<?php 

$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);

?>

</body>
</html>
