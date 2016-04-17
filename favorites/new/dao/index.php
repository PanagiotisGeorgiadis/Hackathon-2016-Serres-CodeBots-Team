<?php 
	require ("../../../connection.php");
	session_start();
	if (isset($_POST['favorite'])){

		$logeduser  = $_SESSION["user_id"];
		
		$url = $_POST['link-input'];
		$description = $_POST['description'];
		$tag = $_POST['tag-input'];
		$rate =$_POST['star'];
		$name = $_POST['user-input'];
		$password =$_POST['password-input'];

		if ($url) {
			$query = mysql_query("INSERT INTO favorites (userID,link,description,tag,rate,time,name,password) VALUES ('$logeduser' ,'$url','$description','$tag','$rate', CURRENT_TIMESTAMP,'$name','$password')");
			header('Location: http://localhost/Hackathon-2016-Serres-CodeBots-Team/favorites/new');
		}
	
}

?>