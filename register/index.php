<?php

require ("../header/index.php");
?>

<div class="container">
	<h2>Register</h2>
	<form role="form" method="post" action="">
		<div class="form-group">
			<label for="txtUserEmail">Email:</label>
			<input type="email" class="form-control" id="txtUserEmail"name="txtUserEmail" placeholder="Enter Your Email" required>
		</div>
		<div class="form-group">
			<label for="txtUserPass">Password:</label>
			<input type="password" class="form-control" id="txtUserPass" name="txtUserPass" placeholder="Enter Your Password" required>
		</div>
		<div class="form-group">
			<label for="txtUserRePass">Re-enter Password:</label>
			<input type="password" class="form-control" id="txtUserRePass" name="txtUserRePass" placeholder="Re-enter Your Password" required>
		</div>
		<div class="form-group">
			<label for="txtUserFullName">Full Name</label>
			<input  class="form-control" id="txtUserFullName" name="txtUserFullName" placeholder="Enter Your Full Name" required>
		</div>
		<div class="form-group">
			<label for="txtUserPhone">Phone:</label>
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