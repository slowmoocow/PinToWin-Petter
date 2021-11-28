<!DOCTYPE html>
<?php

$server = "localhost";
$username = "admin";
$password = "password";
$dbname = "testdb";

$conn = mysqli_connect($server, $username, $password, $dbname);
?>

<!DOCTYPE html>

<html>
<link href="http://fonts.cdnfonts.com/css/common-pixel" rel="stylesheet">
<head>
	<title>Leaderboard</title>
</head>

<body>
	<header>
		<h1>Leaderboard</h1>
	<table border = "3" align="center">
		<tr>
			<td id="UN">Username</td>
			<td id="P">Points</td>	
		</tr>
		<?php 
		$records = mysqli_query($conn, "select * from TempDB2 order by Points desc");
		while($data = mysqli_fetch_array($records))
		{ ?>
			<tr>
				<td id="Username"><?php echo $data['userName']; ?></td>
				<td id="Points"><?php echo $data['Points']; ?></td>
			</tr>
		<?php
		}
		?>
	</table><br>
	
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
}

table{
	table-layout: fixed;
	table: 100%;
	border-collapse: collapse;
	border: solid #EE82EE 5px;
	top: 100px;
}

td{
	text-align: center;
	width: 35%;
	color: #EE82EE;
	font-family: 'Common Pixel', sans-serif;
	font-size: 25px;
	border: solid #EE82EE 5px;
}

table td#UN{
	font-size:40px;
}

table td#P{
	font-size:40px;
}

table td#Username{
	color: white;
}

table td#Points{
	color: white;
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
