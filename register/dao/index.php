<?php
include ($_SERVER['DOCUMENT_ROOT'] . 'Hackathon-2016-Serres-CodeBots-Team/db_connection/mysqli_connect.php');
function input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username=$password=$passwordconf=$email=$phone="";
$errmsg=$errmail=$errphone=$errpass="";
$uservalid=$passvalid=$emailvalid=$phonevalid = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//Define query
	$select_query="SELECT* FROM users";
	$response = mysqli_query($dbc, $select_query);
	
	if($response->num_rows > 0){
		while($row = mysqli_fetch_array($response)){
	//Username Valid
			if(strcasecmp($row['username'],$_POST['txtUserFullName']) == 0)
					$errmsg = "This username already exists <br>";
				else{
				$username = $_POST['txtUserFullName'];
			}
	//Email Valid		
			if(strcasecmp($row['email'],$_POST['txtUserEmail']) == 0)
					$errmail = "This email already exists <br>";
			
			else{
				$email = $_POST['txtUserEmail'];
			}
	//Phone Valid
			if(strcasecmp($row['phone'], $_POST['txtUserPhone']) == 0)
				$errphone = "This phone already exists <br>";
			else if(!is_numeric($_POST['txtUserPhone']))
				$errphone = "This is not a phone number <br>";
			else{
				$phone = $_POST['txtUserPhone'];
			}
			
		}
		
	}
	
	//Password Valid
	if(strcasecmp($_POST['txtUserPass'], $_POST['txtUserRePass'])){
		$errpass = "Your confirm password not matching <br>";
	}
	else{
		$password = $_POST['txtUserPass'];
	}
	
	echo "Errors: ". $errmsg .  $errmail . $errphone . $errpass;
	echo $username . "," . $password . ",". $email.",".$phone;
	
	//Insert query
	$new_user_query = "INSERT INTO users(username,password,email,phone,rank) VALUES ('".$username."','".$password."','".$email."','".$phone."','0');";
	
	
	if($errmsg == "" && $errmail == "" && $errphone == "" && $errpass ==""){
		$new_user_response = mysqli_query($dbc, $new_user_query);
		if($new_user_response == true){
			//echo "New record created successfully";
		 	$url= '../../login/index.php';
				header('Location:'.$url); 
		}
		else
			echo "Error: " .$new_user_query. "<br>" . $dbc->error;
	}
}

?>