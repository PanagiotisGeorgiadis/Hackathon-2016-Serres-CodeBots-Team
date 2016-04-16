<?php
include ($_SERVER['DOCUMENT_ROOT'] . 'Hackathon-2016-Serres-CodeBots-Team/db_connection/mysqli_connect.php');
function input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username=$password=$passwordconf=$email=$phone="";
$requser=$reqpass=$repassconf=$reqemail=$reqphone="";
$uservalid=$passvalid=$emailvalid=$phonevalid = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//Define query
	$select_query="SELECT* FROM users";
	$response = mysqli_query($dbc, $query);
	
	$username = input($_POST['username');
	if($response->num_rows > 0){
		while($row = mysqli_fetch_assoc($response)){
			if($row['username'] == $username){
				echo "This username already exists";
			}
		}
	}
	else{
		$uservalid = true;
		echo "So far so good";
	}
		
	
	
	
}

?>