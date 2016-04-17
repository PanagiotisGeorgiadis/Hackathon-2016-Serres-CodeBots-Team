<?php 
	require ("../../../connection.php");
	if (isset($_POST['favorite'])){
		$url = $_POST['link-input'];
		$description = $_POST['description'];
		$tag = "#".$_POST['tag-input'];
		$rate =$_POST['star'];
		$name = $_POST['user-input'];
		$password =$_POST['password-input'];

		if ($url) {
			$query = mysql_query("INSERT INTO favorites (link,description,tag,rate,time,name,password) VALUES ('$url','$description','$tag','$rate', CURRENT_TIMESTAMP,'$name','$password')");
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