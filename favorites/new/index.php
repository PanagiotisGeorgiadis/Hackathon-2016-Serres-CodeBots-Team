<html>
	<head>
		<title>Favorites page</title>
		<meta name= "viewport" content= "width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link href="image/favicon.ico" rel="icon" type="image/x-icon"/>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/animatecss/3.5.1/animate.min.css">
		<link rel='stylesheet' type='text/css' href='style.css' />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="custom.js"></script>
	</head>
	<body>
	<h2>Store your favorite links</h2>
		<div class="container margin-top animated zoomIn">
 <p></p>
			<form action = "dao/index.php" method = "POST">

				<div class="form-group">
					<label for="favorite-link">Add your favorite url link or img</label>
					<input type="input" name= "link-input" class="form-control" id="link-input" placeholder="Link">
				</div>

				<div class="form-group">
					<label for="favorite-description">Add a description for your link</label>

					<textarea class="form-control" name ="description" rows="2"></textarea>
				</div>

				<div class="checkbox">
				    <label>
				      <input type="checkbox">foto
				    </label>
				</div>    
<!-- 
				<div id = "rating">
					<p><label for="rate-it">rate it</label></p>
					<span class="fa fa-star fa-2x rate-star" id="star1" aria-hidden="true"></span>
					<span class="fa fa-star fa-2x rate-star" id="star2" aria-hidden="true"></span>
					<span class="fa fa-star fa-2x rate-star" id="star3" aria-hidden="true"></span>
					<span class="fa fa-star fa-2x rate-star" id="star4" aria-hidden="true"></span>
					<span class="fa fa-star fa-2x rate-star" id="star5" aria-hidden="true"></span>
				</div> -->
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
			</form>
	 
		</div>



</body>
</html>