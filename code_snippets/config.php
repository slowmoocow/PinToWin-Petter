<?php
		
	extract($_REQUEST);
	$file="data.txt";
	$txt = "---";
	file_put_contents($file, $txt);
	header("location: pintowin.php");
	
	
	/*$command = escapeshellcmd('arduino_reset.py');
	$output = shell_exec($command);
	echo $output;
	*/
	
?>
