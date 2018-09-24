<?php 

include 'connection.include.php';
include 'userpage_handler.php'	
?>


<!DOCTYPE html>
<html>
<head>

	<title>SHOT-chat</title>
	<link rel="icon" type="image/jpg" href="project/153239.jpg">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
	<!-- Optional theme -->

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="page2.css">
	<!-- CUSTOM CSS -->
</head>
<body>

<header>
	<!-- NAVIGATION BAR -->
	<nav class="navbar navbar-inverse navbar-fixed-top navigation">
		<div class="row">
			<div class="col-sm-8">
		<!-- THE LOGO -->	

			<div class="navbar-header">
				<a class="navbar-brand" href=""><span style="color:gray;">CATCHAT</a>
			</div>
			<!-- LOGO ENDS -->

			<!-- NAVIGATION LINKS -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#data-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<ul class="nav navbar-nav links collapse navbar-collapse" id="data-collapse">
				<li><a href="#">Home</a></li>
				<li><a href="#">Profile</a></li>
				<li><a href="#">Messages</a></li>
				<li class="dropdown-toggle" data-toggle="dropdown"><a class="link" href="#">Settings</a>
					<ul class="dropdown-menu">
						<li><a href="">Profile</a></li>
						<li><a href="">Privacy</a></li>
						<li><a href="">Account</a></li>
						<li><a href="">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	<!-- NAVIGATION LINKS ENDS HERE -->
	
	<!-- SEARCH BOX -->
	<div class="col-sm-4 col-xs-9">
		<div class="container-fluid">
			<form action="search.php" method="post" class="pull-right" id="data-collapse" style="margin-top: 7px;">
				<div class="input-group">
					<input class="form-control"  type="text" name="search" placeholder="SEARCH..." style="background-color:rgb(62, 62, 63); color:white;">
					<div class="input-group-btn">
						<button type="button" class="btn">
							<i class="glyphicon glyphicon-search" ></i>
						</button>
					</div>
				</div>
			</form>	
		</div>
	</div>
	<!-- SEARCH BOX ENDS HERE -->
	
	</div>
	<!-- ROW ENDS HERE -->
	
	</nav>
	<!-- NAVIGATION BAR ENDS HERE -->
</header>
<br><br><br>

<!-- Upload image/avatar/profile image -->
<form style="margin-left: 100px;" action="userpage_handler.php" method="post" enctype="multipart/form-data">
	<input type="file" name="avatar"><br>
	<input class="btn btn-info" type="submit" name="submit">
</form>
<img src="<?php $fileDestination?>">

<!-- MAIN SECTION OF PAGE -->
<!-- 
<div class="container" style="background: rgb(235, 239, 244);padding: 20px; height: 100%;">
<section class="row">
	
		<div class="col-sm-4">
			<img src="">
			<form>
				<input type="file" name="avatar" required><br>
				<input type="submit" name="submit" value="Submit">
			</form><br>
			<img src="<?php  ?>">
		</div>

		<div class="col-sm-7">
			<img class="image-responsive thumbnail col-sm-3" src="project/4919.jpg" style="width: 340px; height:240px;">
			<img class="image-responsive thumbnail col-sm-3" src="project/15204.jpg" style="width: 340px; height:240px;">
		</div>
</section>
</div>

<!-- MAIN SECTION ENDS --> 
 
	<!-- This is the required jquery script -->
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
