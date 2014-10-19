<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://yandex.st/highlightjs/8.0/styles/default.min.css">
    <script src="http://yandex.st/highlightjs/8.0/highlight.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/AntColorPicker.css" rel="stylesheet">


    <script type="text/javascript" src="js/libs/external-libs/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/libs/external-libs/jquery-ui-1.10.4.min.js"></script>
    <script type="text/javascript" src="js/libs/external-libs/google-analytics.js"></script>
    <script type="text/javascript" src="js/libs/AntColorPicker.js"></script>
    <script type="text/javascript">

        //Sources code hightLight syntaxe
        hljs.initHighlightingOnLoad();

        $(document).ready(function() {
            //initialisation of AntColorPicker with customisation of labels
            $("#colorPicker").AntColorPicker(
                    {//Custom parameters
                        "labelClose":"Close color picker",
                        "labelRAZColor":"Clear field"
                    }
            );
        });
    </script>
</head>

<body>



<div style="font-family:'Arial',sans-Serif; width:800px; margin-left: 300px;  border: 1px solid gray;">	
<div style="width:830px;">	
<img src="logo.jpg">

<div style="width:790px;  margin-top: -5px; margin-bottom: 10px; padding-top: 5px; padding-left: 10px; background-color: #395fa8; height: 40px;">	
<span style="color: white;"><a href="/">Home</a> &nbsp;&nbsp;&nbsp; <a href="/">Text Gen</a>&nbsp;&nbsp;&nbsp; <a href="/">Fake Users</a>
</span>
</div>
<div style="width:780px;  margin: 10px;">	
	<h2>Color Picker</h2>
	Choose colors to get their values <input id="colorPicker" />
@yield ('generator') 
<div id="stuff" style="width:730px; margin-top: 20px; margin-bottom: 20px; border: 1px solid gray; padding-left: 20px; padding-bottom: 20px; padding-right: 20px;">	
<h2>You can copy your text from here:</h2>
@yield ('generator2')

@yield ('users')

@yield ('csv')

<script type="text/javascript">
//initialisation of AntColorPicker with customisation of labels
$("#colorPicker").AntColorPicker(
    //Custom parameters
    {
        "labelClose":"Close color picker",
        "labelRAZColor":"Clear field"
    }
);
</script>
       
</div>
</div>


</div>
<!--<input id="colorPicker" />-->
</div>
<style type="text/css">
a {
	color: white;
	text-decoration: none;
}
body {
background-color: white:;

}
</style>
</body>
</html>
