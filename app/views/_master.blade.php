<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>It's All Fake</title>

</head>
<body>
<div style="font-family:'Arial',sans-Serif; width:800px; margin-left: 300px; padding-left: 10px; border: 1px solid gray;">	
<div style="width:830px;">	
<img src="logo.jpg">
<br>
<div style="width:795px;  margin-bottom: 10px; background-color: pink; height: 40px;">	
<a href="/">Home</a> &nbsp;&nbsp;&nbsp; <a href="/">Text Gen</a>&nbsp;&nbsp;&nbsp; <a href="users">Fake Users</a>
</div>

@yield ('generator') 
<div style="width:730px; margin-top: 20px; margin-bottom: 20px; border: 1px solid gray; padding-left: 20px; padding-right: 20px;">	
<h2>You can copy your text from here:</h2>
@yield ('generator2')

@yield ('users')

</div>


</div>
</div>
</body>
</html>
