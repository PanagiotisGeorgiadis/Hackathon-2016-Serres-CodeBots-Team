<?php

	require("../../header/index.php");

	

	$achievement_title = "";
	$achievement_progress = "";
	$achievement_description = "";
	$achievement_priority = "";

	$warning_div_class = "container alert alert-danger hidden";
	$warning_message = "";
	
	if(isset($_SESSION['achievement_title'])){
		$achievement_title = $_SESSION['achievement_title'];
		unset($_SESSION['achievement_title']);
	}
	if(isset($_SESSION['achievement_progress'])){
		$achievement_progress = $_SESSION['achievement_progress'];
		unset($_SESSION['achievement_progress']);
	}
	if(isset($_SESSION['achievement_description'])){
		$achievement_description = $_SESSION['achievement_description'];
		unset($_SESSION['achievement_description']);
	}
	if(isset($_SESSION['achievement_priority'])){
		$achievement_priority = $_SESSION['achievement_priority'];
		unset($_SESSION['achievement_priority']);
	}

	if(isset($_SESSION['warning_div_class'])){
		$warning_div_class = $_SESSION['warning_div_class'];
		unset($_SESSION['warning_div_class']);
	}
	if(isset($_SESSION['warning_message'])){
		$warning_message = $_SESSION['warning_message'];
		unset($_SESSION['warning_message']);
	}
?>

	<form method="post" action="dao/index.php" >

		<div class="row text-center"><h3> Create a new Achievement! </h3></div><br/><br/><br/>
		<div class=<?php echo "'".$warning_div_class."'"; ?> >
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
			<h4 class="text-center"> <?php echo $warning_message ?> </h4>
		</div>
		<div class="container">
			<div class="col-lg-offset-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 text-center" id="achievement_title_div" style="margin-bottom:8px;">
				<label for="achievement_title">Achievement Title <span class="superscript">*</span></label>
				<input type="text" class="form-control" name="achievement_title" id="achievement_title" placeholder="This is my title" maxlength="50" value=<?php echo "'".$achievement_title."'"; ?> onblur="validateAchievementTitle(this);"  required />
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
				<textarea class="form-control" id="achievement_description" name="achievement_description" placeholder="Well in this achievement I plan on ..." rows="10" maxlength="200" onblur="validateAchievementDescription(this);" value=<?php echo "'".$achievement_description."'"; ?> required></textarea>
			</div>			
			<div class="col-lg-3 col-md-3 col-xs-12 text-center " id="achievement_priority_div" style="margin-bottom: 8px;">
				<label for="achievement_priority" required>Priority <span class="superscript">*</span></label><br/>
				<select class="form-control" id="achievement_priority" name="achievement_priority">
					<?php 

						if($achievement_priority == "Low") {
							echo "
								<option value='Low' selected='selected'>Low</option>
								<option value='Medium'>Medium</option>
								<option value='High'>High</option>";

						} else if ($achievement_priority == "Medium") {
							echo "
								<option value='Low'>Low</option>
								<option value='Medium' selected='selected'>Medium</option>
								<option value='High'>High</option>";

						} else if ($achievement_priority == "High") {
							echo "
								<option value='Low'>Low</option>
								<option value='Medium'>Medium</option>
								<option value='High' selected='selected' >High</option>";
								
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
				<input class="btn btn-primary center-block" id="submit_button" type="submit" name="submit" value="Save">
			</div>
		</div>

	</form>
	
	<?php

		require("../../footer/index.php");

	?>

<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script   src="custom.js"></script>

</body>
</html>

	

