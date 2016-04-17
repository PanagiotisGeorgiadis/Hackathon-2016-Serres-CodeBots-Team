<?php
session_start();
require ("header.php");
$errmsg=$errmail=$errphone=$errpass="";
if(isset($_SESSION['errmsg']))
	$errmsg = $_SESSION['errmsg'];
if(isset($_SESSION['errmail']))
	$errmail = $_SESSION['errmail'];
if(isset($_SESSION['errphone']))
	$errphone = $_SESSION['errphone'];
if(isset($_SESSION['errpass']))
	$errpass = $_SESSION['errpass'];
if(!isset($_SESSION['errmsg']) && !isset($_SESSION['errmail']) && !isset($_SESSION['errphone']) && !isset($_SESSION['errpass']))
	session_destroy();
?>

<div class="container">
	<h2>Register</h2>
	<form role="form" method="post" action="dao/index.php">
		<div class="form-group">
			<label for="txtUserEmail">Email:</label> <?php echo  $errmail;?>
			<input type="email" class="form-control" id="txtUserEmail"name="txtUserEmail" placeholder="Enter Your Email" required>
		</div>
		<div class="form-group">
			<label for="txtUserPass">Password:</label><?php echo  $errpass;?>
			<input type="password" class="form-control" id="txtUserPass" name="txtUserPass" placeholder="Enter Your Password" required>
		</div>
		<div class="form-group">
			<label for="txtUserRePass">Re-enter Password:</label>
			<input type="password" class="form-control" id="txtUserRePass" name="txtUserRePass" placeholder="Re-enter Your Password" required>
		</div>
		<div class="form-group">
			<label for="txtUserFullName">Full Name</label><?php echo  $errmsg;?>
			<input  class="form-control" id="txtUserFullName" name="txtUserFullName" placeholder="Enter Your Full Name" required>
		</div>
		<div class="form-group">
			<label for="txtUserPhone">Phone:</label><?php echo  $errphone;?>
			<input class="form-control" id="txtUserPhone" name="txtUserPhone" placeholder="Enter Your Phone Number" required>

		</div>
		<div class="form-group">
			<div class="radio">
				<label>
					<input type="radio" name="rbSex" id="rbMale" value="optionMale" checked>
					Male</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="rbSex" id="rbFemale" value="optionFemale">
					Female </label>
			</div>
		</div>
		<button type="submit" class="btn btn-default" id="btnSubmit">
			Submit
		</button>
	</form>
</div>


<?php

require ("../footer/index.php");

?>