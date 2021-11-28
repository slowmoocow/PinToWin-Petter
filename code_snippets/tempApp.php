<!DOCTYPE html>

<html>
<head>
	<title>Points</title>
</head>

<body>
	<header>
		<h1>Points</h1><br>
		
<?php $temp = file_get_contents("data.txt"); ?>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<script>
	$(document).ready(function(){
		$('#div_refresh').load("/load.php");
		  setInterval(function(){
			$('#div_refresh').load("/load.php");  
			},300);	
	});
</script>

<p>
	
<div id="div_refresh"></div>

</p>
	<br><br><br>
	<form action="/save.php">
			<div><button class="button button1">Save Score</button></div>
	</form><br>
	<form action="/pintowin.php">
			<div><button class="button button2">Back</button></div><br>	
	</form>
<style type ="text/css">
@import url('http://fonts.cdnfonts.com/css/common-pixel');

body{
	background-color:black;
}

header h1{
	color: #EE82EE;
	text-align: center;
	font-family: 'Common Pixel', sans-serif;
	font-size: 60px;
	left: 50%;
	padding: 30px 0px 0px 0px;
}

p{
	text-align:center;
	font-family: 'Common Pixel', sans-serif;
	font-size:400px;
	margin-top:10px;
	margin-bottom:10px;
	color: white;
}

.button1{
	margin: auto;
	display: block;
	top: 50%;
	background-color: #EE82EE;
	color: black;
	font-family: 'Common Pixel', sans-serif;
	border: none;
	padding: 20px 40px;
	text-align: center;
	font-size: 30px;
	width: 350px;
}

.button1:hover{
	background-color: white;
	color: black;
}

.button2{
	margin: auto;
	display: block;
	top: 50%;
	background-color: #EE82EE;
	color: black;
	font-family: 'Common Pixel', sans-serif;
	border: none;
	padding: 20px 40px;
	text-align: center;
	font-size: 30px;
	width: 350px;
}

.button2:hover{
	background-color: white;
	color: black;
}
</style>
	</header>
</body>
</html>
