<?php 
	session_start();
	require("../../../db_connection/mysqli_connect.php");

	function returnToEditAchievement() {

		$_SESSION['achievement_title'] = $_POST['achievement_title'];
		$_SESSION['achievement_progress'] = $_POST['achievement_progress'];
		$_SESSION['achievement_description'] = $_POST['achievement_description'];
		$_SESSION['achievement_priority'] = $_POST['achievement_priority'];

		$_SESSION['warning_div_class'] = "container alert alert-danger fade in";
		$_SESSION['warning_message'] = "Please insert all required fields!";

		header("Location: ../../display/");
	}

		
	if(isset($_POST["achievement_id"])) {
		$achievement_id = $_POST["achievement_id"];
	} else {
		returnToEditAchievement();
		die();
	}

	echo $achievement_id."<br/>";

	if(isset($_POST["achievement_title"])) {
		$achievement_title = $_POST["achievement_title"];
	} else {
		returnToEditAchievement();
		die();
	}

	if(isset($_POST["achievement_progress"])) {
		$achievement_progress = $_POST["achievement_progress"];
	} else {
		returnToEditAchievement();
		die();
	}

	if(isset($_POST["achievement_description"])) {
		$achievement_description = $_POST["achievement_description"];
	} else {
		returnToEditAchievement();
		die();
	}

	if(isset($_POST["achievement_priority"])) {
		$achievement_priority = $_POST["achievement_priority"];
	} else {
		returnToEditAchievement();
		die();
	}

	echo $achievement_id."<br/>";
	echo $achievement_title."<br/>";
	echo $achievement_progress."<br/>";
	echo $achievement_description."<br/>";
	echo $achievement_priority."<br/>";
	

	/*$query = "SELECT * FROM categories";
	$response = mysqli_query($dbc, $query);

	while($row = mysqli_fetch_array($response)){
		echo "<h2>".$row['category']."</h2>";
	}*/
	
	/*$user_id = 1;
	$achievement_title = "Run a Marathon";
	$achievement_description = "I would like to run to a marathon while i am still young";
	$achievement_prio = "high";
	$achievement_progress = 64;

	$user_id = 1;
	$achievement_title = "Participate in a hackathon";
	$achievement_description = "I would like to participate in a hackathon while i can still pull allnighters";
	$achievement_prio = "medium";
	$achievement_progress = 50;

	$user_id = 2;
	$achievement_title = "Run a Marathon";
	$achievement_description = "I would like to run to a marathon while i am still young";
	$achievement_prio = "high";
	$achievement_progress = 46;*/

	$query = "UPDATE achievements SET achievement_title='$achievement_title', achievement_progress='$achievement_progress', achievement_description='$achievement_description', achievement_prio='$achievement_priority' WHERE achievement_id = '$achievement_id';";
	mysqli_query($dbc, $query);

	$_SESSION['warning_div_class'] = "container alert alert-success fade in";
	$_SESSION['warning_message'] = "Achievement was edited successfully!";
	header("Location: ../../display/");

	echo "success";
?>