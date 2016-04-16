<?php require ("../connection.php"); ?>
<?php require ("../header/index.php"); ?>


<br><br>


<form action="index.php" method="POST" >
	
	 <div class="container">
	 	<h3>Order by <a href="new"><span class="fa fa-plus-square" aria-hidden="true">new favorite </span></a></h3>
		<button   type="submit" name="rateOrder"   class="btn btn-primary col-md-4">rate</button>
		<button   type="submit" name="tagOrder"  class="btn btn-primary col-md-4">tag</button>
		<button   type="submit" name="timeOrder"   class="btn btn-primary col-md-4">time</button>
	</div>
</form>

<div class = "container">

	
	<?php 
	if (isset($_POST['rateOrder'])) {
		$query = mysql_query("SELECT * FROM favorites ORDER BY rate DESC");
	}
	elseif (isset($_POST['tagOrder'])) {
		$query = mysql_query("SELECT * FROM favorites ORDER BY tag ASC");
	}
	elseif(isset($_POST['timeOrder'])){
		$query = mysql_query("SELECT * FROM favorites ORDER BY time ASC");

	}
	else{
		$query = mysql_query("SELECT * FROM favorites ORDER BY rate DESC");

	}




	while ($rows = mysql_fetch_array($query)) {
		$id = $rows ['id'];	
		$path = $rows['link'];
		$description = $rows ['description'];
		$tag = $rows ['tag'];
		$name = $rows ['name'];
		$password = $rows ['password'];		

		echo "<div class ='col-md-5 text-center'  id= 'favorite-boxes' >";
			echo  '<a href = '.$path.' target= "_BLANK" > '.$path. '</a>' ;
			echo "<hr>";

			echo  '<p>'.$description.'</p>' ;
			echo "<hr>";
			echo  '<p>'.$tag.'</p>' ;
			echo "<hr>";
			echo "<div class= 'clicked$id arrow-more$id' style='display:none;'>";
			
				echo "<p>".$name."</p>";
				echo "<p>".$password."</p>";
				echo "<hr>";
			echo "</div>";

			echo "<span class='fa fa-level-down arrow' id ='arrow-more$id' aria-hidden='true'></span>";
		echo "</div>";

	}

	?>	
</div>
</div>


<?php require ("../footer/index.php"); ?>