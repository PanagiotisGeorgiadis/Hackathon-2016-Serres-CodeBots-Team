<?php

	require("../../header/index.php");
	require("../../db_connection/mysqli_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Achievements Page</title>

	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 

		//$user_id = $_SESSION["user_id"];
		$user_id = 1;

		

		$high_achievements_query = "SELECT * FROM achievements WHERE user_id = '$user_id' AND achievement_prio LIKE '%High%'";
		$high_achievements_response = mysqli_query($dbc, $high_achievements_query);

		echo '<section id="high_priority_achievements">
				<div class="container">
					<div class="text-center"><h2><span style="background-color: #26A7DE; color: rgb(252, 191, 14); padding: 5px; padding-left: 15px; padding-right: 15px;"> High Priority Achievements! </span></h2></div><br/><br/>';

		$counter = 1;		
		while( $row = mysqli_fetch_array($high_achievements_response)) {

				echo '<div class="row high_prio_achievements_container" id="high_prio_container_'.$counter.'">
				<div class="arrow_container high_arrow_container hidden-xs">					
					<span class="arrow high_arrow" id="high_arrow_'.$counter.'"></span>
				</div>				
				<div class="col-md-10 achievement_text_container">
					<h3 class="achievement_title" id="high_prio_title_'.$counter.'">'.$row["achievement_title"].'</h3>
					<br/>
					<p class="achievement_description" id="high_prio_text_'.$counter.'">'.$row["achievement_description"].'</p>

				</div>
				<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-1 high_prio_achievements_image_wrapper"  id="high_prio_image_'.$counter.'">
					<img class="emblem_image" src="../../resources/emblem_gold_transparent.png">
				</div>				
				</div>
				<div class="row high_prio_achievements_footer" style="margin-top:0px;">
					<form method="post" action="../display/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Display" class="btn btn-success action_buttons">
					</form>
					<form method="post" action="../edit/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Edit" class="btn btn-warning action_buttons">
					</form>
					<form method="post" action="../delete/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Delete" class="btn btn-danger action_buttons">
					</form>
				</div>';

				$counter++;		
		}

		echo '</div>
			</section><br/><br/><br/>';

		$medium_achievements_query = "SELECT * FROM achievements WHERE user_id = '$user_id' AND achievement_prio LIKE '%Medium%'";
		$medium_achievements_response = mysqli_query($dbc, $medium_achievements_query);

		echo '<section id="medium_priority_achievements">
				<div class="container">
					<div class="text-center"><h2><span style="background-color: rgb(101, 146, 30); color: rgb(255, 255, 255); padding: 5px; padding-left: 15px; padding-right: 15px;"> Medium Priority Achievements! </span></h2><br/><br/>';

		$counter = 1;		
		while( $row = mysqli_fetch_array($medium_achievements_response)) {

				echo '<div class="row medium_prio_achievements_container" id="medium_prio_container_'.$counter.'">
				<div class="arrow_container medium_arrow_container hidden-xs">					
					<span class="arrow medium_arrow" id="medium_arrow_'.$counter.'"></span>
				</div>
				<div class="col-md-offset-0 col-md-10 achievement_text_container" >
					<h3 class="achievement_title" id="medium_prio_title_'.$counter.'">'.$row["achievement_title"].'</h3>
					<br/>
					<p class="achievement_description" id="medium_prio_text_'.$counter.'">'.$row["achievement_description"].'</p>
				</div>
				<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-1 medium_prio_achievements_image_wrapper" id="medium_prio_image_'.$counter.'">
					<img class="emblem_image" src="../../resources/emblem_silver_transparent.png">
				</div>
				</div>
				<div class="row medium_prio_achievements_footer" style="margin-top:0px;">
					<form method="post" action="../display/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Display" class="btn btn-success action_buttons">
					</form>
					<form method="post" action="../edit/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Edit" class="btn btn-warning action_buttons">
					</form>
					<form method="post" action="../delete/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Delete" class="btn btn-danger action_buttons">
					</form>
				</div>
				<br/><br/><br/>';

				$counter++;		
		}

		echo '</div>
			</section>';

		$low_achievements_query = "SELECT * FROM achievements WHERE user_id = '$user_id' AND achievement_prio LIKE '%Low%'";
		$low_achievements_response = mysqli_query($dbc, $low_achievements_query);

		echo '<section id="low_priority_achievements">
				<div class="container">
					<div class="text-center"><h2><span style="background-color: rgb(43, 87, 112); color: rgb(198, 236, 248); padding: 5px; padding-left: 15px; padding-right: 15px;"> Low Priority Achievements! </span></h2><br/><br/>';

		$counter = 1;		
		while( $row = mysqli_fetch_array($low_achievements_response)) {

				echo '<div class="row low_prio_achievements_container" id="low_prio_container_'.$counter.'">
					<div class="arrow_container low_arrow_container hidden-xs">
						<span class="arrow low_arrow" id="low_arrow_'.$counter.'"></span>
					</div>
					<div class="col-md-10 achievement_text_container">
						<h3 class="achievement_title" id="low_prio_title_'.$counter.'">'.$row["achievement_title"].'</h3>
						<br/>
					<p class="achievement_description" id="low_prio_text_'.$counter.'">'.$row["achievement_description"].'</p>
					</div>
					<div class="col-md-1 low_prio_achievements_image_wrapper" id="low_prio_image_'.$counter.'">
						<img class="emblem_image" src="../../resources/emblem_bronze_transparent.png">
					</div>
				</div>
				<div class="row low_prio_achievements_footer" style="margin-top:0px;">
					<form method="post" action="../display/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Display" class="btn btn-success action_buttons">
					</form>
					<form method="post" action="../edit/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Edit" class="btn btn-warning action_buttons">
					</form>
					<form method="post" action="../delete/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Delete" class="btn btn-danger action_buttons">
					</form>
				</div>';

				$counter++;		
		}
		echo '</div>
			</section>';
		echo '<div id="container" style="margin: 20px; width: 200px; height: 200px; position: relative;"></div>';
	?>
<!--
	<section id="high_priority_achievements">

		<div class="container">

			<div class="row high_prio_achievements_container" id="high_prio_container_1">
				<div class="arrow_container high_arrow_container hidden-xs">
					<span class="arrow high_arrow"></span>
				</div>
				<div class="col-md-10 achievement_text_container">
					<h3 class="achievement_title" id="high_prio_title_1">This is a high Prio achievement Title</h3>
					<br/>
					<p class="achievement_description" id="high_prio_text_1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
				</div>
				<div class="col-md-1 high_prio_achievements_image_wrapper"  id="high_prio_image_1">
					<img class="emblem_image" src="../../resources/emblem_gold_transparent.png">
				</div>

			</div>

			<div class="row high_prio_achievements_container" id="high_prio_container_2">
				<div class="arrow_container high_arrow_container hidden-xs">
					<span class="arrow high_arrow"></span>
				</div>
				<div class="col-md-10 achievement_text_container" >
					<h3 class="achievement_title" id="high_prio_title_2">This is a high Prio achievement Title</h3>
					<br/>
					<p class="achievement_description" id="high_prio_text_2">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
				<div class="col-md-1 high_prio_achievements_image_wrapper" id="high_prio_image_2">
					<img class="emblem_image" src="../../resources/emblem_gold_transparent.png">
				</div>
			</div>

			<div class="row high_prio_achievements_container" id="high_prio_container_3">
				<div class="arrow_container high_arrow_container hidden-xs">
					<span class="arrow high_arrow"></span>
				</div>
				<div class="col-md-10 achievement_text_container" >
					<h3 class="achievement_title" id="high_prio_title_3">This is a high Prio achievement Title</h3>
					<br/>
					<p class="achievement_description" id="high_prio_text_3">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
				<div class="col-md-1 high_prio_achievements_image_wrapper" id="high_prio_image_3">
					<img class="emblem_image" src="../../resources/emblem_gold_transparent.png">
				</div>
			</div>
			
		</div>
	</section>

	<section id="medium_priority_achievements">
		
		<div class="container">

			<div class="row medium_prio_achievements_container" id="medium_prio_container_1">
				<div class="arrow_container medium_arrow_container hidden-xs">
					<span class="arrow medium_arrow"></span>
				</div>
				<div class="col-md-10 achievement_text_container" >
					<h3 class="achievement_title" id="medium_prio_title_1">This is a medium Prio achievement Title</h3>
					<br/>
					<p class="achievement_description" id="medium_prio_text_1">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
				<div class="col-md-1 medium_prio_achievements_image_wrapper" id="medium_prio_image_1">
					<img class="emblem_image" src="../../resources/emblem_silver_transparent.png">
				</div>
			</div>

			<div class="row medium_prio_achievements_container" id="medium_prio_container_2">
				<div class="arrow_container medium_arrow_container hidden-xs">
					<span class="arrow medium_arrow"></span>
				</div>
				<div class="col-md-10 achievement_text_container" >
					<h3 class="achievement_title" id="medium_prio_title_2">This is a medium Prio achievement Title</h3>
					<br/>
					<p class="achievement_description" id="medium_prio_text_2">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
				<div class="col-md-1 medium_prio_achievements_image_wrapper" id="medium_prio_image_2">
					<img class="emblem_image" src="../../resources/emblem_silver_transparent.png">
				</div>
			</div>

			<div class="row medium_prio_achievements_container" id="medium_prio_container_3">
				<div class="arrow_container medium_arrow_container hidden-xs">
					<span class="arrow medium_arrow"></span>
				</div>
				<div class="col-md-10 achievement_text_container">
					<h3 class="achievement_title" id="medium_prio_title_3">This is a medium Prio achievement Title</h3>
					<br/>
					<p class="achievement_description" id="medium_prio_text_3">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
				</div>
				<div class="col-md-1 medium_prio_achievements_image_wrapper" id="medium_prio_image_3">
					<img class="emblem_image" src="../../resources/emblem_silver_transparent.png">
				</div>
			</div>
		
		</div>
	</section>

	<section id="low_priority_achievements">

		<div class="container">

			<div class="row low_prio_achievements_container" id="low_prio_container_1">
					<div class="arrow_container low_arrow_container hidden-xs">
						<span class="arrow low_arrow"></span>
					</div>
					<div class="col-md-10 achievement_text_container">
						<h3 class="achievement_title" id="low_prio_title_1">This is a low Prio achievement Title</h3>
						<br/>
					<p class="achievement_description" id="low_prio_text_1">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
					</div>
					<div class="col-md-1 low_prio_achievements_image_wrapper" id="low_prio_image_1">
						<img class="emblem_image" src="../../resources/emblem_bronze_transparent.png">
					</div>
				</div>

				<div class="row low_prio_achievements_container" id="low_prio_container_2">
					<div class="arrow_container low_arrow_container">
						<span class="arrow low_arrow"></span>
					</div>
					<div class="col-md-10 achievement_text_container" >
						<h3 class="achievement_title" id="low_prio_title_2">This is a low Prio achievement Title</h3>
						<br/>
						<p class="achievement_description" id="low_prio_text_2">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
					</div>
					<div class="col-md-1 low_prio_achievements_image_wrapper" id="low_prio_image_2">
						<img class="emblem_image" src="../../resources/emblem_bronze_transparent.png">
					</div>
				</div>

				<div class="row low_prio_achievements_container" id="low_prio_container_3">
					<div class="arrow_container low_arrow_container">
						<span class="arrow low_arrow"></span>
					</div>
					<div class="col-md-10 achievement_text_container" >
						<h3 class="achievement_title" id="low_prio_title_3">This is a low Prio achievement Title</h3>
						<br/>
						<p class="achievement_description" id="low_prio_text_3">This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text This is some sample text</p>
					</div>
					<div class="col-md-1 low_prio_achievements_image_wrapper" id="low_prio_image_3">
						<img class="emblem_image" src="../../resources/emblem_bronze_transparent.png">
					</div>
				</div>

		</div>
	</section>-->


<script src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="custom.js"></script>

</body>
</html>


<?php 

	require("../../footer/index.php");

?>