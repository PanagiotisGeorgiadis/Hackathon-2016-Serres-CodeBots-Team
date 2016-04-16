<?php

	define('DB_USER', 'connect');
	define('DB_PASSWORD', '123');
	define('DB_HOST', '83.212.99.34');
	define('DB_NAME', 'hackathon');

	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to mySQL' . mysqli_connect_error());

	//mysqli_query($dbc,"SET NAMES 'utf8'");
	//mysqli_query($dbc,"SET CHARACTER SET 'utf8'");
	
	//$dbc->close();	

?>