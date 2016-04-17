<?php require ("../../connection.php"); ?>
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
</head>
<body>

	<div class="container margin-top">
		<form action = "dao/index.php" method = "POST">

			<div class="form-group">
				<label for="favorite-link">Add your favorite url link or img</label>
				<input type="input" name= "link-input" class="form-control" id="link-input" placeholder="Link">
			</div>

			<div class="form-group">
				<label for="favorite-description">Add a description for your link</label>

				<textarea class="form-control" name ="description" rows="2"></textarea>
			</div>

			<div class="form-group">
				<label for="upload">Upload File</label>
				<input type="file" name="upload-link"  id="upload">
			</div>


			<div id = "rating">
				<p><label for="rate-it">rate it</label></p>
				<span class="fa fa-star fa-2x rate-star" id="star1" aria-hidden="true"></span>
				<span class="fa fa-star fa-2x rate-star" id="star2" aria-hidden="true"></span>
				<span class="fa fa-star fa-2x rate-star" id="star3" aria-hidden="true"></span>
				<span class="fa fa-star fa-2x rate-star" id="star4" aria-hidden="true"></span>
				<span class="fa fa-star fa-2x rate-star" id="star5" aria-hidden="true"></span>
			</div>



			<button type="submit" name="favorite" class="btn btn-default">Submit</button>
		</form>
 
	</div>



</body>
</html>