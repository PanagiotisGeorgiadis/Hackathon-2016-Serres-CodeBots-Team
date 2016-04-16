<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- main JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src="../resources/global_js/global.js"></script>
		<script src="custom.js"></script>
		<!-- main CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="../resources/global_css/global.css">
		<link rel="stylesheet" href="style.css">
		<!-- DATEPICKER CALENDAR -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/gcal.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>
		<link href="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.css" rel="stylesheet" type="text/css" />
		<link href="http://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.print.css " rel="stylesheet" type="text/css" /> -->

	</head>
	<body>

		<nav class="navbar navbar-default headerFooter">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="../home">Home</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Calendar<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="/AddReminder">Add Reminder</a>
								</li>
								<li>
									<a href="/RemoveReminder">Remove Reminder</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Todo's <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="/AddTask">Add Task</a>
								</li>
								<li>
									<a href="/RemoveTask">Remove Task</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Achievements <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li>
									<a href="/AddAchievement">Add Achievements</a>
								</li>
								<li>
									<a href="/RemoveAchievement">Remove Achievements</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="navbar-brand" href="../favorites">Favorites</a>
						</li>
						<li>
							<a class="navbar-brand" href="../about">About</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="../login"><span class="glyphicon glyphicon-log-in" ></span> Login</a>
						</li>
						<li class="hidden">
							<a href="../logout"><span class="glyphicon glyphicon-log-out" ></span> Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
