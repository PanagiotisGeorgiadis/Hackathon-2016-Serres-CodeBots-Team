<?php require ("../connection.php"); ?>
<html>
<head>
	<title>Favorites page</title>
	<meta name= "viewport" content= "width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link href="image/favicon.ico" rel="icon" type="image/x-icon"/>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/animatecss/3.5.1/animate.min.css">
	<link rel='stylesheet' type='text/css' href='style.css' />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
<a href=""></a>
<div class = "container">
	<?php 



	$query = mysql_query("SELECT * FROM favorites ORDER BY time DESC");

	while ($rows = mysql_fetch_array($query)) {

		$path = $rows['link'];
		$description = $rows ['description'];	

		
		echo "<div class ='col-md-5' id = 'favorite-boxes'>";
			echo  '<a href = '.$path.' target= "_BLANK" > '.$path. '</a>' ;
			echo "<hr>";

			echo  '<p>'.$description.'</p>' ;
		echo "</div>";

	


	}

	?>	

</div>
</body>
</html>