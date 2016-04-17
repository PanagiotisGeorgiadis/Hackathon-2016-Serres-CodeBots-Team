<?php
	require ("../../../connection.php");


	if (isset($_POST['update'])){
		$id = $_POST["id"];
		$link = $_POST["link"];
		$description = $_POST["description"];
		$tag = $_POST["tag"];
		$name = $_POST["username"];
		$password = $_POST["password"];

		$updatequery = mysql_query("UPDATE favorites  SET  link ='$link', description = '$description' ,tag = '$tag' ,name = '$name',password = '$password' WHERE id = '$id'");
		header('Location: http://localhost/Hackathon-2016-Serres-CodeBots-Team/favorites/edit');


	}



	if (isset($_POST['dlt'])){

		$id = $_POST["id"];
		$updatequery = mysql_query("DELETE FROM favorites  WHERE id = '$id'");	
		header('Location: http://localhost/Hackathon-2016-Serres-CodeBots-Team/favorites/edit');	
	}



?>