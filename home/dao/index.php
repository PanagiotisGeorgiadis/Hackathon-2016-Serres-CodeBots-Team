<?php 
	require ("../../connection.php");

	if (isset($_POST['btnUpdate'])){
		$iduser = $_POST["userid"];
		$email = $_POST["txtEmail"];
		$phone = $_POST["txtPhone"];
		$status = $_POST["txtStatus"];
		$about = $_POST["txtAboutMe"];
		$birthday = $_POST["txtBirth"];

		$updatequery = mysql_query("UPDATE users  SET  email ='$email', phone = '$phone' ,rank = '$status' ,about = '$about',birthday = '$birthday' WHERE user_id = '$iduser'");
		header('Location: http://localhost/Hackathon-2016-Serres-CodeBots-Team/home');


	}


?>