<!DOCTYPE html>
<?php

$server = "localhost";
$username = "admin";
$password = "password";
$dbname = "testdb";

$conn = mysqli_connect($server, $username, $password, $dbname); 

if(isset($_POST['submit'])){
	
	if(!empty($_POST['userName'])){
		
		$name = $_POST['userName'];
		
		$temp = file_get_contents("data.txt");
		
		$query = "insert into TempDB2(userName, Points) values('$name', '$temp')";
		
		
		$run = mysqli_query($conn, $query) or die (mysqli_error());
		
		
			if($run){
			echo'<meta = http-equiv="refresh" content="0;url=saved.php">';
			}
	}
	
		else{?>
			<h5>Username required!</h5><?php
		}
}

?>

<html>
<head>
	<title>Points</title>
</head>

<body>
	<header>
		<h1>Points</h1><br>
<?php $temp = file_get_contents("data.txt");
print "<p>$temp</p>" ?>

		<h3>Enter username:</h3>
<div id="main">
	<form method="POST">
		<div></div><input type="text" name="userName" class="text" autocomplete="off" required placeholder="username"></div><br><br>
		<input type="Submit" name="submit" id="sub"></form>
</div><br>
	<form action="/tempApp.php">
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
	padding: 200px 0px 0px 0px;
}

header h3{
	color: #EE82EE;
	text-align: center;
	font-family: 'Common Pixel', sans-serif;
	font-size: 30px;
	left: 50%;
}

h4{
	color: red;
	text-align: center;
	font-family: 'Common Pixel', sans-serif;
	font-size: 20px;
}

h5{
	color: red;
	text-align: center;
	font-family: 'Common Pixel', sans-serif;
	font-size: 20px;
}

p{
	text-align:center;
	font-family: 'Common Pixel', sans-serif;
	font-size:50px;
	margin-top:-25px;
	margin-bottom:10px;
	color: MediumSeaGreen;
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

.text{
	margin: auto;
	display: block;
	background-color: black;
	color: #EE82EE;
	width: 250px;
	font-family: 'Common Pixel', sans-serif;
	font-size: 30px;
	border: none;
	border-bottom: 2px solid white;
	outline: none;
	padding: 0px 40px;
	text-align: center;
	font-size: 30px;
	width: 350px;
}

#sub{
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

#sub:hover{
	background-color: white;
	color: black;
}
</style>
	</header>
</body>
</html>
