<?php 
	session_start();

	require("../../../db_connection/mysqli_connect.php");

	function returnToDisplayAchievements() {

		$_SESSION['achievement_title'] = $_POST['achievement_title'];
		$_SESSION['achievement_progress'] = $_POST['achievement_progress'];
		$_SESSION['achievement_description'] = $_POST['achievement_description'];
		$_SESSION['achievement_priority'] = $_POST['achievement_priority'];

		$_SESSION['warning_div_class'] = "container alert alert-danger fade in";
		$_SESSION['warning_message'] = "Please insert all required fields!";

		header("Location: ../../display/index.php");
	}

	/*
	if(isset($_SESSION["user_id"])) {

	}
	*/

	$user_id = 1;
	
	if(isset($_POST["achievement_id"])) {
		$achievement_id = $_POST["achievement_id"];
	} else {
		//returnToEditAchievement();
		die();
	}

	$query = "DELETE FROM achievements WHERE achievement_id = '$achievement_id'";
	mysqli_query($dbc, $query);

	$_SESSION['warning_div_class'] = "container alert alert-success fade in";
	$_SESSION['warning_message'] = "Achievement Deleted Successfully! ";
	header("Location: ../../display");

?>