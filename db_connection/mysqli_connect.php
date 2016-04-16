<?php

	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'alvanoudis_clients');

	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to mySQL' . mysqli_connect_error());

	mysqli_query($dbc,"SET NAMES 'utf8'");
	mysqli_query($dbc,"SET CHARACTER SET 'utf8'");
	
	//$dbc->close();
	


?>