<?php

require ("../header/index.php");
?>

<div class="container" >

	<div class="row row-offcanvas row-offcanvas-right">
		<form aciton='asidub.php' method="POST">
			<div class="col-xs-12 col-sm-9">
				<p class="pull-right visible-xs">
					<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">
						Toggle nav
					</button>
				</p>
				<div class="jumbotron">
					<img class = "img-responsive" src="../resources/Logo_big.jpg">
				</div>
				<div class="row">

					<div class="col-xs-6 col-lg-12" id="info-block">

						<i class="fa fa-info fa-2x" aria-hidden="true"></i>

					</div><!--/.col-xs-6.col-lg-4-->

					<div class="col-xs-6 col-lg-6">

						<!-- <i class="fa fa-heart fa-2x" aria-hidden="true"> single</i>   RM by migeranis -->
						<div class="form-group has-feedback aboutMeData">
							<input type="text" class="form-control txtStatus textLike" placeholder="Status" name='txtStatus' id='txtStatus'  disabled/>
							<i class="form-control-feedback fa fa-heart"></i>
						</div>
					</div><!--/.col-xs-6.col-lg-4-->

					<div class="col-xs-6 col-lg-6">

						<!-- <i class="fa fa-tablet fa-2x" aria-hidden="true"> 6978032970</i> RM by migeranis -->
						<div class="form-group has-feedback aboutMeData">
							<input type="text" class="form-control txtPhone textLike" placeholder="Phone" name='txtPhone' id='txtPhone'  disabled/>
							<i class="form-control-feedback fa fa-tablet"></i>
						</div>

					</div><!--/.col-xs-6.col-lg-4-->
					<br>
					<br>
					<br>
					<div class="col-xs-6 col-lg-6">

						<!-- <i class="fa fa-birthday-cake fa-2x" aria-hidden="true"> 15/05/1990</i> RM by migeranis -->
						<div class="form-group has-feedback aboutMeData">
							<input type="text" class="form-control txtBirth textLike" placeholder="Birthday" name='txtBirth' id='txtBirth'  disabled/>
							<i class="form-control-feedback fa fa-birthday-cake"></i>
						</div>

					</div><!--/.col-xs-6.col-lg-4-->

					<div class="col-xs-6 col-lg-6">

						<!-- <i class="fa fa-envelope fa-2x" aria-hidden="true"> codebots@gmail.com</i> RM by migeranis -->
						<div class="form-group has-feedback aboutMeData">
							<input type="text" class="form-control txtEmail textLike" placeholder="Email" name='txtEmail' id='txtEmail'  disabled/>
							<i class="form-control-feedback fa fa-envelope"></i>
						</div>

					</div><!--/.col-xs-6.col-lg-4-->

					<div class="col-xs-6 col-lg-12">
						<div class="form-group as-feedback aboutMeData">
							<label for="txtAboutMe">about me:</label>
							<textarea class="form-control txtAboutMe textLike" rows="5" id="txtAboutMe" name='txtAboutMe'  disabled></textarea>
						</div>
						<div class="form-group as-feedback editMeData ">

							<button type="button" name='btnEdit' id='btnEdit'class='btn btn-warning' onclick='editTxt(this);return false;'>
								Edit Info
							</button>
							<button type="submit" name='btnUpdate' id='btnUpdate'class='btn btn-warning btnUpdate'>
								Update
							</button>
						</div>
					</div><!--/.col-xs-6.col-lg-4-->

				</div><!--/row-->
			</div><!--/.col-xs-12.col-sm-9-->
		</form>

		<div class="col-xs-6 col-sm-3 sidenav well eventContainer" id="sidebar">
			<div class='w3-col'>
				<label name='lblEventTitle' id='lblEventTitle' class='lblEventTitle'>Title</label>
			</div>
			<div class='w3-left'>
				<i><label name='lblEventDescription' id='lblEventDescription' class='lblEventDescription'>Description</label> </i>
			</div>
		</div>
		<a href='/Hackathon-2016-Serres-CodeBots-Team/calendar' class='w3-right'>View All Events&nbsp;<i class='fa fa-arrow-circle-right'></i></a>

	</div><!--/.sidebar-offcanvas-->
</div>
</div>
<?php
require ("../footer/index.php");
?>

