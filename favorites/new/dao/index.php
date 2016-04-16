<?php 
	require ("../../../connection.php");
	if (isset($_POST['favorite'])){
		$url = $_POST['link-input'];
		$description = $_POST['description'];
		$rate ="sd";

	$query = mysql_query("INSERT INTO favorites (link,description,rate) VALUES ('$url','$description','$rate')");

}
?>