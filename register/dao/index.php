<?php
$basedir = realpath(__DIR__);
include($basedir . '/db_connection/mysqli_connect.php');
function input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username=$password=$email=$phone="";
$requsername=$reqpassword=$reqemail=$reqphone="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	//Define select queries
	$query = "SELECT * FROM users;";
	$response = mysqli_query($dbc, $query);
	/* while($row = mysqli_fetch_array($response)){
		//edw perneis tous users 
	} */
		
	//mysqli_fetch_assoc();
	
	
	//Metablites...
	//$username = input($_POST["username"]);
	$email = input($_POST["txtUserEmail"]);
	//$password = input($_POST["txtUserPass"]);
	$phone = input($_POST["txtUserPhone"]);

	//invalid 
		if(empty($_POST["txtUserFullName"])){
			$requsername = "You have to put a username";
			echo $requsername."<br>";
		}
		else{
			$username = input($_POST["txtUserFullName"]);
			
			if($response->num_rows > 0){
				while($row = $response->fetch_assoc()){
					if($row["username"] == $username){
						$requsername = "This username already exists";	
						echo $requsername."<br>";
					}
				}
			}
		}
		if(empty($_POST["password"]) || empty($_POST["passwordconf"])){
			$reqpassword = "You have to put a password";
			echo $reqpassword."<br>";
		}
			else if($_POST["passwordconf"] != $_POST["passwordconf"] ){
			$reqpassword = "Your password wasn't confirm";
			echo $reqpassword."<br>";
			}
		else
			$password = input($_POST["txtUserPass"]);
		
		
		if(empty($_POST["txtUserPhone"]) || !is_numeric($_POST["txtUserPhone"]) ){
			$reqphone = "You have to put a phone";
			echo $reqphone."<br>";
		}		
		else{
			if($response->num_rows > 0){
					while($row = $response->fetch_assoc()){
						if($row["phone"] == $phone){
							$reqphone = "This phone already exists";
							echo $reqphone."<br>";
						}
					}
				}
		}
		
		if(empty($_POST["email"])){
			$reqemail = "You have to put a email";
			echo $reqemail."<br>";
		}
		else{
			if($response->num_rows > 0){
					while($row = $response->fetch_assoc()){
						if($row["email"] == $email){
							$reqemail = "This email already exists";
							echo $reqemail."<br>";
						}
					}
				}
		}
		//Define insert query
		$new_user_query = "INSERT INTO users(username,password,email,phone,rank) VALUES ('".$username."','".$password."','".$email."','".$phone."','0');";
		$new_user_response = mysqli_query($dbc, $new_user_query); 
		
		if($requsername =="" && $reqpassword=="" && $reqemail =="" && $reqphone==""){
			if($new_user_response == true)
				echo "New record created successfully";
			else
				echo "Error: " .$new_user_query. "<br>" . $dbc->error;	
		}
		
}

?>

<html>
<head>
</head>
<body>
<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
<input type="text" name="username"><br>
<input type="password" name="password"><br>
<input type="password" name="passwordconf"><br>
<input type="text" name="email"><br>
<input type="text" name="phone"><br>
<input type="submit">
</form>
</body>
</html>
