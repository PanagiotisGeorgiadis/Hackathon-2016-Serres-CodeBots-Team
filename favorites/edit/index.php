


<?php


require ("../../connection.php");
require ("../../header/index.php");

		$query = mysql_query("SELECT * FROM favorites");
		

		
		
	while ($rows = mysql_fetch_array($query))   {
		echo "<form action= 'dao/index.php' method='POST' class = 'container   favorites-display'  '>";	
			$id = $rows['id'];
			$link = $rows['link'];
			$desciption = $rows ['description'];	
			$tag = $rows ['tag'];
			$name = $rows ['name'];	
			$password = $rows ['password'];	
			

		

			echo '<label class = "col-md-12">url link</label>';
			echo  '<li class ="col-md-12 " > <textarea rows = "1" name = "link"  class="form-control " >' . $link  . '</textarea></li>';
			echo '<label class = "col-md-3">description</label>';echo '<label class = "col-md-3">tag</label>';echo '<label class = "col-md-3">username</label>';echo '<label class = "col-md-3">password</label>';
			echo  '<li class ="col-md-3"><textarea rows = "1" name = "description" class="form-control " >' .  $desciption  . '</textarea></li>';
			echo  '<li class ="col-md-3"><textarea rows = "1" name = "tag" class="form-control " >' . $tag. '</textarea></li>';
			echo  '<li class ="col-md-3"><textarea rows = "1" name = "username" class="form-control " >' .$name. '</textarea></li>';
			echo  '<li class ="col-md-3"><textarea rows = "1" name = "password" class="form-control " >' .$password. '</textarea></li>';
		   
		    echo  '<input type = hidden name = id value=' . $id . '>';
			
			echo '<div class ="text-right ">';
		
				echo '<button type = "submit" name = "update" class="btn btn-primary fa fa-save margin-top"></button>';
				echo '<button type = "submit" name = "dlt" class="btn btn-danger fa fa-times margin-top"></button>';

			echo '</div>';
		echo "<br>";	echo "<br>"; 	echo "<br>";
	echo "</form>";
	

}
	
		?>