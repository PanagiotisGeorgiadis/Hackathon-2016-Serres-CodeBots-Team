<?php

	require("../../header/index.php");
	require("../../db_connection/mysqli_connect.php");
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

		$user_id = 2;
		$achievement_title = "Run a Marathon";
		$achievement_description = "I would like to run to a marathon while i am still young";
		$achievement_prio = "high";
		$achievement_progress = 46;

		$query = "INSERT INTO achievements (user_id, achievement_title, achievement_description, achievement_prio, achievement_progress) VALUES ('$user_id', '$achievement_title', '$achievement_description',' $achievement_prio', '$achievement_progress');";
		mysqli_query($dbc, $query);
	?>

	<section id="high_priority_achievements">

		<div class="container">

			<div class="row high_prio_achievements_container">
				<div class="arrow_container high_arrow_container">
					<span class="arrow high_arrow"></span>
				</div>
				<div class="col-xs-11 achievement_text_container" >
					<h3 class="achievement_title">This is a high Prio achievement Title</h3>
					<br/>
					<p class="achievement_description">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
			</div>

			<div class="row high_prio_achievements_container">
				<div class="arrow_container high_arrow_container">
					<span class="arrow high_arrow"></span>
				</div>
				<div class="col-xs-11 achievement_text_container" >
					<h3 class="achievement_title">This is a high Prio achievement Title</h3>
					<br/>
					<p class="achievement_description">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
			</div>

			<div class="row high_prio_achievements_container">
				<div class="arrow_container high_arrow_container">
					<span class="arrow high_arrow"></span>
				</div>
				<div class="col-xs-11 achievement_text_container" >
					<h3 class="achievement_title">This is a high Prio achievement Title</h3>
					<br/>
					<p class="achievement_description">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
			</div>
			
		</div>
	</section>

	<section id="medium_priority_achievements">
		
		<div class="container">

			<div class="row medium_prio_achievements_container">
				<div class="arrow_container medium_arrow_container">
					<span class="arrow medium_arrow"></span>
				</div>
				<div class="col-xs-11 achievement_text_container" >
					<h3 class="achievement_title">This is a medium Prio achievement Title</h3>
					<br/>
					<p class="achievement_description">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
			</div>

			<div class="row medium_prio_achievements_container">
				<div class="arrow_container medium_arrow_container">
					<span class="arrow medium_arrow"></span>
				</div>
				<div class="col-xs-11 achievement_text_container" >
					<h3 class="achievement_title">This is a medium Prio achievement Title</h3>
					<br/>
					<p class="achievement_description">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
			</div>

			<div class="row medium_prio_achievements_container">
				<div class="arrow_container medium_arrow_container">
					<span class="arrow medium_arrow"></span>
				</div>
				<div class="col-xs-11 achievement_text_container" >
					<h3 class="achievement_title">This is a medium Prio achievement Title</h3>
					<br/>
					<p class="achievement_description">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
			</div>
		
		</div>
	</section>

	<section id="low_priority_achievements">

		<div class="container">

			<div class="row low_prio_achievements_container">
					<div class="arrow_container low_arrow_container">
						<span class="arrow low_arrow"></span>
					</div>
					<div class="col-xs-11 achievement_text_container" >
						<h3 class="achievement_title">This is a low Prio achievement Title</h3>
						<br/>
					<p class="achievement_description">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
					</div>
				</div>

				<div class="row low_prio_achievements_container">
					<div class="arrow_container low_arrow_container">
						<span class="arrow low_arrow"></span>
					</div>
					<div class="col-xs-11 achievement_text_container" >
						<h3 class="achievement_title">This is a low Prio achievement Title</h3>
						<br/>
						<p class="achievement_description">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
					</div>
				</div>

				<div class="row low_prio_achievements_container">
					<div class="arrow_container low_arrow_container">
						<span class="arrow low_arrow"></span>
					</div>
					<div class="col-xs-11 achievement_text_container" >
						<h3 class="achievement_title">This is a low Prio achievement Title</h3>
						<br/>
						<p class="achievement_description">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
					</div>
				</div>

		</div>
	</section>


<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<script   src="custom.js"></script>

</body>
</html>


<?php 

	require("../../footer/index.php");

?>