<html>
	<head>
	<title>Online-Checker</title>
	</head>
	<body>
		<center>
		<?php
			if($flag == 0)
			{
				echo "<h2>Some error occured !! Please fill the choices again.</h2>";
			}
			else
			{
				echo "<h2>Your Score : ".$marks."</h2>";
			}