<?php

	require("../header/index.php");
	require("../db_connection/mysqli_connect.php");

	$warning_div_class = "container alert alert-danger hidden";
	$warning_message = "";
	
	if(isset($_SESSION['warning_div_class'])){
		$warning_div_class = $_SESSION['warning_div_class'];
		unset($_SESSION['warning_div_class']);
	}
	if(isset($_SESSION['warning_message'])){
		$warning_message = $_SESSION['warning_message'];
		unset($_SESSION["warning_message"]);
	}

?>

	<div class=<?php echo "'".$warning_div_class."'"; ?> >
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
		<h4 class="text-center"> <?php echo $warning_message ?> </h4>
	</div>

	<!--<div class="container">
		<div class="wrapper">

			<header class="header"><h2 class="text-center"><span>This Is My first Achievement</span></h2></header>
			<article class="main">
				<p class="text-center" style="padding: 10px;">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>  
			</article>
			<aside class="aside aside-1">
				<div style="background: rgba(0,0,0,0.5); width: 8px; height: 150px;">
					<span class="arrow" id="high_arrow_1"></span>
				</div>
			</aside>
	  		<aside class="aside aside-2">
  				<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-1 high_prio_achievements_image_wrapper"  id="high_prio_image_'.$counter.'" data-progress="0" style="border: none;">
					<img class="emblem_image" src="../resources/emblem_gold_transparent.png">
				</div>
	  		</aside>
	  		<footer class="footer" style="padding: 5px;">
	  			<div class="form_container">
					<form method="post" action="../display/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Display" class="btn btn-success action_buttons">
					</form>
					<form method="post" action="../edit/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Edit" class="btn btn-warning action_buttons">
					</form>
					<form method="post" action="../delete/dao/index.php">
						<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
						<input type="submit" value="Delete" class="btn btn-danger action_buttons">
					</form>
				</div>
	  		</footer>

		</div>
	</div> -->

	
	
				
	<?php 
		
		if(isset($_SESSION["user_id"])) {

			$user_id = $_SESSION["user_id"];	
		}
				

		$high_achievements_query = "SELECT * FROM achievements WHERE user_id = 1 AND achievement_prio LIKE '%High%'";
		$high_achievements_response = mysqli_query($dbc, $high_achievements_query);

		echo '<section id="high_priority_achievements">
				
					<div class="row">					
					<div class="col-md-offset-1 col-md-4 text-center"><h2 class="animated zoomIn"><span id="high_prio_title"> High Priority Achievements! </span></h2></div></div><br/><br/>
					</div>';


		$counter = 1;		
		while( $row = mysqli_fetch_array($high_achievements_response)) {

				echo '
				<div class="row">
					<div class="col-md-offset-1 col-md-4">
						<div class="row high_prio_achievements_container animated slideInLeft" id="high_prio_container_'.$counter.'">
						<div class="arrow_container high_arrow_container hidden-xs">					
							<span class="arrow high_arrow" id="high_arrow_'.$counter.'"></span>
						</div>				
						<div class="col-md-9 achievement_text_container text-center">
							<h3 class="achievement_title" id="high_prio_title_'.$counter.'">'.$row["achievement_title"].'</h3>
							<br/>
							<p class="achievement_description" id="high_prio_text_'.$counter.'">'.$row["achievement_description"].'</p>

						</div>';

					if( $row['achievement_progress'] < 100 ) {

						echo '
							<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-2 high_prio_achievements_image_wrapper rotate_progress_bar" id="high_prio_image_'.$counter.'" data-progress="'.$row["achievement_progress"].'"">
								<h2 class="progress_text">'.$row["achievement_progress"].'%</h2>								
							</div>
						';

					} else {

						echo'
							<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-1 high_prio_achievements_image_wrapper"  id="high_prio_image_'.$counter.'" data-progress="0" style="border: none;">
								<img class="emblem_image" src="../../resources/emblem_gold_transparent.png">
							</div>				
							';
					}

					echo '
						</div>
						

					</div>
					</div>';

					

				$counter++;		
		}

		echo '
			</section><br/><br/><br/>';

	?>
				


	<?php 

		/*if(isset($_SESSION["user_id"])) {
			
			$user_id = $_SESSION["user_id"];	
		}
				

		$high_achievements_query = "SELECT * FROM achievements WHERE user_id = '$user_id' AND achievement_prio LIKE '%High%'";
		$high_achievements_response = mysqli_query($dbc, $high_achievements_query);

		echo '<section id="high_priority_achievements">
				<div class="container">
					<div class="text-center"><h2 class="animated zoomIn"><span id="high_prio_title"> High Priority Achievements! </span></h2></div><br/><br/>';

		$counter = 1;		
		while( $row = mysqli_fetch_array($high_achievements_response)) {

				echo '<div class="row high_prio_achievements_container animated slideInLeft" id="high_prio_container_'.$counter.'">
				<div class="arrow_container high_arrow_container hidden-xs">					
					<span class="arrow high_arrow" id="high_arrow_'.$counter.'"></span>
				</div>				
				<div class="col-md-10 achievement_text_container">
					<h3 class="achievement_title" id="high_prio_title_'.$counter.'">'.$row["achievement_title"].'</h3>
					<br/>
					<p class="achievement_description" id="high_prio_text_'.$counter.'">'.$row["achievement_description"].'</p>

				</div>';

					if( $row['achievement_progress'] < 100 ) {

						echo '
							<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-1 high_prio_achievements_image_wrapper rotate_progress_bar" id="high_prio_image_'.$counter.'" data-progress="'.$row["achievement_progress"].'"">
								<h2 class="progress_text">'.$row["achievement_progress"].'%</h2>								
							</div>
						';

					} else {

						echo'
							<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-1 high_prio_achievements_image_wrapper"  id="high_prio_image_'.$counter.'" data-progress="0" style="border: none;">
								<img class="emblem_image" src="../../resources/emblem_gold_transparent.png">
							</div>				
							';
					}

					echo '
						</div>
						<div class="row high_prio_achievements_footer animated slideInLeft" style="margin-top:0px;">
							<div class="form_container">
								<form method="post" action="../display/index.php">
									<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
									<input type="submit" value="Display" class="btn btn-success action_buttons">
								</form>
								<form method="post" action="../edit/index.php">
									<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
									<input type="submit" value="Edit" class="btn btn-warning action_buttons">
								</form>
								<form method="post" action="../delete/dao/index.php">
									<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
									<input type="submit" value="Delete" class="btn btn-danger action_buttons">
								</form>
							</div>
						</div>';

				

				$counter++;		
		}

		echo '</div>
			</section><br/><br/><br/>';

		$medium_achievements_query = "SELECT * FROM achievements WHERE user_id = '$user_id' AND achievement_prio LIKE '%Medium%'";
		$medium_achievements_response = mysqli_query($dbc, $medium_achievements_query);

		echo '<section id="medium_priority_achievements">
				<div class="container">
					<div class="text-center"><h2 class="animated zoomIn"><span id="medium_prio_title"> Medium Priority Achievements! </span></h2><br/><br/>';

		$counter = 1;		
		while( $row = mysqli_fetch_array($medium_achievements_response)) {

				echo '<div class="row medium_prio_achievements_container animated slideInLeft" id="medium_prio_container_'.$counter.'">
				<div class="arrow_container medium_arrow_container hidden-xs">					
					<span class="arrow medium_arrow" id="medium_arrow_'.$counter.'"></span>
				</div>
				<div class="col-md-offset-0 col-md-10 achievement_text_container" >
					<h3 class="achievement_title" id="medium_prio_title_'.$counter.'">'.$row["achievement_title"].'</h3>
					<br/>
					<p class="achievement_description" id="medium_prio_text_'.$counter.'">'.$row["achievement_description"].'</p>
				</div>';
				
				if( $row['achievement_progress'] < 100 ) {

					echo '
						<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-1 medium_prio_achievements_image_wrapper rotate_progress_bar" id="medium_prio_image_'.$counter.'" data-progress="'.$row["achievement_progress"].'"">
							<h2 class="progress_text">'.$row["achievement_progress"].'%</h2>								
						</div>
						';

				} else {

					echo'
						<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-1 medium_prio_achievements_image_wrapper"  id="medium_prio_image_'.$counter.'" data-progress="0" style="border: none;">
							<img class="emblem_image" src="../../resources/emblem_silver_transparent.png">
						</div>				
						';
				}
				echo'
				</div>
				<div class="row medium_prio_achievements_footer animated slideInLeft" style="margin-top:0px;">
					<div class="form_container">
						<form method="post" action="../display/index.php">
							<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
							<input type="submit" value="Display" class="btn btn-success action_buttons">
						</form>
						<form method="post" action="../edit/index.php">
							<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
							<input type="submit" value="Edit" class="btn btn-warning action_buttons">
						</form>
						<form method="post" action="../delete/dao/index.php">
							<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
							<input type="submit" value="Delete" class="btn btn-danger action_buttons">
						</form>
					</div>
				</div>';

				$counter++;		
		}

		echo '</div>

			</section><br/><br/><br/>';

		$low_achievements_query = "SELECT * FROM achievements WHERE user_id = '$user_id' AND achievement_prio LIKE '%Low%'";
		$low_achievements_response = mysqli_query($dbc, $low_achievements_query);

		echo '<section id="low_priority_achievements">
				<div class="container">
					<div class="text-center"><h2 class="animated zoomIn"><span id="low_prio_title"> Low Priority Achievements! </span></h2><br/><br/>';

		$counter = 1;		
		while( $row = mysqli_fetch_array($low_achievements_response)) {

				echo '<div class="row low_prio_achievements_container animated slideInLeft" id="low_prio_container_'.$counter.'">
					<div class="arrow_container low_arrow_container hidden-xs">
						<span class="arrow low_arrow" id="low_arrow_'.$counter.'"></span>
					</div>
					<div class="col-md-10 achievement_text_container">
						<h3 class="achievement_title" id="low_prio_title_'.$counter.'">'.$row["achievement_title"].'</h3>
						<br/>
					<p class="achievement_description" id="low_prio_text_'.$counter.'">'.$row["achievement_description"].'</p>
					</div>';
					if( $row['achievement_progress'] < 100 ) {

					echo '
						<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-1 low_prio_achievements_image_wrapper rotate_progress_bar" id="low_prio_image_'.$counter.'" data-progress="'.$row["achievement_progress"].'"">
							<h2 class="progress_text">'.$row["achievement_progress"].'%</h2>								
						</div>
						';

				} else {

					echo'
						<div class="col-xs-offset-3 col-xs-6 col-md-offset-0 col-md-1 low_prio_achievements_image_wrapper"  id="low_prio_image_'.$counter.'" data-progress="0" style="border: none;">
							<img class="emblem_image" src="../../resources/emblem_bronze_transparent.png">
						</div>				
						';
				}
				echo'
				</div>
				<div class="row low_prio_achievements_footer animated slideInLeft" style="margin-top:0px;">
					<div class="form_container">
						<form method="post" action="../display/index.php">
							<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
							<input type="submit" value="Display" class="btn btn-success action_buttons">
						</form>
						<form method="post" action="../edit/index.php">
							<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
							<input type="submit" value="Edit" class="btn btn-warning action_buttons">
						</form>
						<form method="post" action="../delete/dao/index.php">
							<input type="hidden" name="achievement_id" value="'.$row["achievement_id"].'">
							<input type="submit" value="Delete" class="btn btn-danger action_buttons">
						</form>
					</div>

				</div>';

				$counter++;		
		}
		echo '</div>
			</section>';
		echo '<div id="container" style="margin: 20px; width: 200px; height: 200px; position: relative;"></div>'; */
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

	require("../footer/index.php");

?>