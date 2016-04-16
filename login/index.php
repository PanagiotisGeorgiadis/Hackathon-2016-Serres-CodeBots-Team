<?php

require ("home/index.php");
?>

<div class="container">
	<h2>Login</h2>
	<form role="form" method="post" action="_login.php">
		<div class="form-group">
			<label for="txtUserEmail">Email:</label>
			<input type="email" class="form-control" id="txtUserEmail"name="txtUserEmail" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label for="txtUserPass">Password:</label>
			<input type="password" class="form-control" id="txtUserPass" name="txtUserPass" placeholder="Enter password">
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" id="cbxRememberUser">
				Remember me</label>
			<a href="/Register" class="pull-right">SIGN UP</a>
		</div>
		<button type="submit" class="btn btn-default" id="btnSubmit">
			Submit
		</button>
	</form>
</div>

<?php

require ("footer/index.php");
?>