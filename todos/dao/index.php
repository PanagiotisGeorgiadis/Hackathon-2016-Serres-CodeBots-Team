<?php 
	require ("../../connection.php");
	session_start();
	if (isset($_POST['submitTask'])){

		$logeduser  = $_SESSION["user_id"];
		
		$title = $_POST['taskTitle'];
		$descr = $_POST['taskDesc'];

		
			$query = mysql_query("INSERT INTO todo (title,taskText,userID,taskTime) VALUES ('$title','$descr','$logeduser',CURRENT_TIMESTAMP)");
			header('Location: http://localhost/Hackathon-2016-Serres-CodeBots-Team/todos/');	
}


if (isset($_POST['btnDelSticky'])){

	$id = $_POST['hdn_ctrlID'];
	echo $id;
	$updatequery = mysql_query("DELETE FROM todo  WHERE id = '$id'");	
	header('Location: http://localhost/Hackathon-2016-Serres-CodeBots-Team/todos/');	
}

?>