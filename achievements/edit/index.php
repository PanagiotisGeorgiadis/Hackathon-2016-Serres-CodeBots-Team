<?php

	require("../../header/index.php");
	require("../../db_connection/mysqli_connect.php");
	session_start();


	$warning_div_class = "container alert alert-danger hidden";
	$warning_message = "";
	
	if(isset($_SESSION['warning_div_class'])){
		$warning_div_class = $_SESSION['warning_div_class'];
	}
	if(isset($_SESSION['warning_message'])){
		$warning_message = $_SESSION['warning_message'];
	}

	session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Achievements Page</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 

		/*
		if(isset($_SESSION["user_id"])) {

		}

		if(!isset($_POST["achievement_title"])) {
			$_POST["achievement_title"] = "DEMO";
		}

		if(!isset($_POST["achievement_progress"])) {
			$_POST["achievement_progress"] = "15";
		}

		if(!isset($_POST["achievement_description"])) {
			$_POST["achievement_description"] = "DEMO";
		}

		if(!isset($_POST["achievement_priority"])) {
			$_POST["achievement_priority"] = "High";
		} */

		if(!isset($_POST["achievement_id"])) {
			
			header("Location: ../../index.php");
		
		} else {

			$achievement_id = $_POST["achievement_id"];

			$query = "SELECT * FROM achievements WHERE achievement_id = '$achievement_id'";
			$response = mysqli_query($dbc, $query);
			
			while ($row = mysqli_fetch_array($response)) {

				$achievement_title = $row["achievement_title"];
				$achievement_progress = $row["achievement_progress"];
				$achievement_description = $row["achievement_description"];
				$achievement_priority = $row["achievement_prio"];
			}
		}

	?>

	<form method="post" action="dao/index.php">

		<div class="row text-center"><h3> Edit your Achievement! </h3></div><br/><br/><br/>
		<div class=<?php echo "'".$warning_div_class."'"; ?> >
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
			<h4 class="text-center"> <?php echo $warning_message ?> </h4>
		</div>
		<div class="container">
			<div class="col-lg-offset-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center" id="achievement_title_div" style="margin-bottom:8px;">
				<label for="achievement_title">Achievement Title <span class="superscript">*</span></label>
				<input type="text" class="form-control" name="achievement_title" id="achievement_title" placeholder="This is my title" maxlength="50" value=<?php echo "'".$achievement_title."'"; ?> onblur="validateAchievementTitle(this);" required />
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center" id="achievement_progress_div" style="margin-bottom:8px;">
				<label for="achievement_progress">Achievement Progress <span class="superscript">*</span></label>
				<input type="text" class="form-control" name="achievement_progress" id="achievement_progress" placeholder="43.7%" maxlength="5" value=<?php echo "'".$achievement_progress."'"; ?> onblur="validateAchievementPercentage(this);" required />
			</div>			
		</div>

		<br/><br/>

		<div class="container">
			<div class="col-lg-offset-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center" id="achievement_description_div" style="margin-bottom:8px;">
				<label for="achievement_description">Achievement Description <span class="superscript">*</span></label>
				<textarea class="form-control" id="achievement_description" name="achievement_description" placeholder="Well in this achievement I plan on ..." rows="10" onblur="validateAchievementDescription(this);" required><?php echo "$achievement_description"; ?></textarea>
			</div>			
			<div class="col-lg-3 col-md-3 col-xs-12 text-center " id="achievement_priority_div" style="margin-bottom: 8px;">
				<label for="achievement_priority" required>Priority <span class="superscript">*</span></label><br/>
				<select class="form-control" id="achievement_priority" name="achievement_priority">
					<?php 

						if( strcmp($achievement_priority, "Low") ) {
							echo "
								<option value='Low' selected='selected'>Low</option>
								<option value='Medium'>Medium</option>
								<option value='High'>High</option>";
						} else if ( strcmp($achievement_priority, "Medium") ) {
							echo "
								<option value='Low'>Low</option>
								<option value='Medium' selected='selected'>Medium</option>
								<option value='High'>High</option>";
						} else if ( strcmp($achievement_priority, "High") ) {
							echo "
								<option value='Low'>Low</option>
								<option value='Medium'>Medium</option>
								<option value='High' selected='selected'>High</option>";
						} else {
							echo "
								<option value='Low'>Low</option>
								<option value='Medium'>Medium</option>
								<option value='High'>High</option>";
						}
					?>
				</select>

			</div>
		</div>
		<br/><br/><br/>
		<div class="row">
			<div class="center-block">
				<input class="btn btn-primary center-block" id="submit_button" type="submit" name="submit" value="Save Changes">
			</div>
		</div>


	</form>


<script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="custom.js"></script>

<?php 

	require("../../footer/index.php");

?>

</body>
</html>