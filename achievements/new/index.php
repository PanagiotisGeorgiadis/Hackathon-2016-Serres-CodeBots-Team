<?php

	require("../../header/index.php");

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



<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<script   src="custom.js"></script>

</body>
</html>

	<form method="post" action="dao/index.php">

		<div class="row text-center"><h3> Create a new Achievement! </h3></div><br/><br/><br/>
		
		<div class="container">
			<div class="col-lg-offset-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center" id="achievement_title_div" style="margin-bottom:8px;">
				<label for="achievement_title">Achievement Title <span class="superscript">*</span></label>
				<input type="text" class="form-control" name="achievement_title" id="achievement_title" placeholder="This is my title" maxlength="50" value='<?php //echo "'".$_SESSION['surname']."'"; ?>' onblur="validateAchievementTitle(this);" required />
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center" id="achievement_progress_div" style="margin-bottom:8px;">
				<label for="achievement_progress">Achievement Progress <span class="superscript">*</span></label>
				<input type="text" class="form-control" name="achievement_progress" id="achievement_progress" placeholder="43.7%" maxlength="5" value='<?php //echo "'".$_SESSION['surname']."'"; ?>' onblur="validateAchievementPercentage(this);" required />
			</div>			
		</div>

		<br/><br/>

		<div class="container">
			<div class="col-lg-offset-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center" id="achievement_description_div" style="margin-bottom:8px;">
				<label for="achievement_description">Achievement Description <span class="superscript">*</span></label>
				<textarea class="form-control" id="achievement_description" name="achievement_description" placeholder="Well in this achievement I plan on ..." rows="10" onblur="validateAchievementDescription(this);" required></textarea>
			</div>			
			<div class="col-lg-3 col-md-3 col-xs-12 text-center" id="achievement_priority_div" style="margin-bottom: 8px;">
				<label for="achievement_priority" required>Priority <span class="superscript">*</span></label><br/>
				<select class="form-control" id="achievement_priority" name="achievement_priority">
					<option>Low</option>
					<option>Medium</option>
					<option>High</option>
				</select>
			</div>
		</div>
		<br/><br/><br/>
		<div class="row">
			<div class="center-block">
				<input class="btn btn-primary center-block" id="submit_button" type="submit" name="submit" value="Save">
			</div>
		</div>
		



	</form>
<?php
	/*$query = "SELECT * FROM categories";
		$response = mysqli_query($dbc, $query);

		while($row = mysqli_fetch_array($response)){
			echo "<h2>".$row['category']."</h2>";
		}*/
		
		/*$user_id = 1;
		$achievement_title = "Run a Marathon";
		$achievement_description = "I would like to run to a marathon while i am still young";
		$achievement_prio = "high";
		$achievement_progress = 64;*/

		/*$user_id = 1;
		$achievement_title = "Participate in a hackathon";
		$achievement_description = "I would like to participate in a hackathon while i can still pull allnighters";
		$achievement_prio = "medium";
		$achievement_progress = 50;*/

		/*$user_id = 2;
		$achievement_title = "Run a Marathon";
		$achievement_description = "I would like to run to a marathon while i am still young";
		$achievement_prio = "high";
		$achievement_progress = 46;

		$query = "INSERT INTO achievements (user_id, achievement_title, achievement_description, achievement_prio, achievement_progress) VALUES ('$user_id', '$achievement_title', '$achievement_description',' $achievement_prio', '$achievement_progress');";
		mysqli_query($dbc, $query);*/
 ?>

<?php 

	require("../../footer/index.php");

?>