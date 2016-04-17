<?php require ("../../connection.php"); ?>

<?php session_start();?>
<?php 
	if (isset($_POST['rateOrder'])){

	$query = mysql_query("SELECT * FROM favorites ORDER BY rate DESC");

	while ($rows = mysql_fetch_array($query)) {

		$path = $rows['link'];
		$description = $rows ['description'];
		$tag = $rows ['tag'];		

		echo "<div class ='col-md-5 ' id= 'favorite-boxes' >";
			echo  '<a href = '.$path.' target= "_BLANK" > '.$path. '</a>' ;
			echo "<hr>";

			echo  '<p>'.$description.'</p>' ;
			echo "<hr>";
			echo  '<p>'.$tag.'</p>' ;
		echo "</div>";

	}
}

?>