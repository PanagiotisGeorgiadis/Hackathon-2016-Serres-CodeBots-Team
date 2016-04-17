<?php


require ("../../connection.php");
require ("../../header/index.php");
$logeduser  = $_SESSION['user_id'];

?>
	<h2>Store your favorite links</h2>

		<div class="container margin-top animated zoomIn">
		<a href="/Hackathon-2016-Serres-CodeBots-Team/favorites/edit/">
			<span  class="fa fa-pencil-square-o" aria-hidden="true">edit your favorite</span></a>

			<form action = "dao/index.php" method = "POST">
	<div class="jumbotron">
				<div class="form-group">
					<label for="favorite-link">Add your favorite url link or img</label>
					<input type="input" name= "link-input" class="form-control" id="link-input" placeholder="Link">
				</div>

				<div class="form-group">
					<label for="favorite-description">Add a description for your link</label>

					<textarea class="form-control" name ="description" rows="2"></textarea>
				</div>

				<div class="form-group">
					<label for="tag-link">Add tag</label>
					<input type="input" name= "tag-input" class="form-control" id="tag-input" placeholder="tag">
				</div>

				<div class="form-group">
					<label for="username"username</label>
					<input type="input" name= "user-input" class="form-control" id="username" placeholder="username">
				</div>   

				<div class="form-group">
					<label for="password"username</label>
					<input type="input" name= "password-input" class="form-control" id="password" placeholder="password">
				</div>  

			<div class="stars animated">
			 
			    <input class="star star-5 " id="star-5" type="radio" name="star" value ="5"/>
			    <label class="star star-5" for="star-5"></label>
			    <input class="star star-4" id="star-4" type="radio" name="star" value ="4"/>
			    <label class="star star-4" for="star-4"></label>
			    <input class="star star-3" id="star-3" type="radio" name="star" value ="3"/>
			    <label class="star star-3" for="star-3"></label>
			    <input class="star star-2" id="star-2" type="radio" name="star" value ="2"/>
			    <label class="star star-2" for="star-2"></label>
			    <input class="star star-1" id="star-1" type="radio" name="star" value ="1"/>
			    <label class="star star-1" for="star-1"></label>
			
			</div>


			<br>
			<button type="submit" id="submitFavorite" name="favorite" class="btn btn-default">Submit</button>
			</div>
			</form>
	 
		</div>



</body>
</html>