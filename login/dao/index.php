<?php
session_start();
$basedir = realpath(_DIR_);
include ($basedir . 'db_connection/mysqli_connect.php');
function input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){


//define select query
	$selectquery = "SELECT * FROM users;";
	$response = mysqli_query($dbc, $selectquery);
	$isequal = false;
	$email = input($_POST["txtUserEmail"]);
	$password = input($_POST["txtUserPass"]);
	if($response->num_rows > 0){
		while($row = $response->fetch_assoc()){
			
			if(($row["email"] == $email) && ($row["password"] == $password)){
				$_SESSION['user_id'] = $row["user_id"];
				$isequal = true;
				echo "success".	$_SESSION['user_id'];
				header('Location:' . $basedir .'/home/index.php'); 
				
			}
		
		}
		if($isequal == false)
				echo "Fail";
	}	
	
}

?>
<html>
<head>
</head>
<body>
<form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
<input type="text" name="email"><br>
<input type="password" name="password">
<input type="submit">
</form>
</body>
</html>