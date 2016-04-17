<?php
session_start();
require('header.php');
if(isset($_SESSION['error_login']))
	$errmsg = $_SESSION['error_login'];
else
	$errmsg = "";
	session_destroy();
?>

<div class="container">
	<h2>Login</h2>
	<?php
		echo $errmsg;
	?>
	<form role="form" method="post" action="dao/index.php">
		<div class="form-group">
			<label for="txtUserEmail">Email:</label>
			<input type="email" class="form-control" id="txtUserEmail"name="txtUserEmail" placeholder="Enter email" required>
		</div>
		<div class="form-group">
			<label for="txtUserPass">Password:</label>
			<input type="password" class="form-control" id="txtUserPass" name="txtUserPass" placeholder="Enter password" required>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" id="cbxRememberUser">
				Remember me</label>
			<a href="../register" class="pull-right">SIGN UP</a>
		</div>
		<button type="submit" class="btn btn-default" id="btnSubmit">
			Submit
		</button>
	</form>
</div>

<?php

require ("../footer/index.php");

?>