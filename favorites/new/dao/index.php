<?php 
	require ("../../../connection.php");
	if (isset($_POST['favorite'])){
		$url = $_POST['link-input'];
		$description = $_POST['description'];
		$rate =$_POST['star'];

		if ($url) {
			$query = mysql_query("INSERT INTO favorites (link,description,rate,time) VALUES ('$url','$description','$rate', CURRENT_TIMESTAMP)");
			header('Location: http://localhost/Hackathon-2016-Serres-CodeBots-Team/favorites/new');
		}
		else{
			echo "nop";
		}
}
else{
	echo "string";
}
?>