<?php include 'connection.include.php'; ?> 
<!DOCTYPE html>
<html>
<head>
	<title>Login or Register</title>

	<style type="text/css">
		body{
			background: #02111D;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #02111D, #037BB5, #02111D);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #02111D, #037BB5, #02111D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}

		.button{
			border-radius: 5px;
	border: 2px solid white;
	background-color: black;
	padding: 6px;
	padding-left: 10px;
	padding-right: 10px;
	color: white;
	box-shadow: 0 0 3px 3px rgba(0,0,0,0.7);
		}
		.button:hover{
			transition: 0.3s; 
	background-color: rgba(255, 0, 0, 0.8);
	color: yellow;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
}
		}
	</style>
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Latest compiled and minified CSS -->

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
		<!-- Optional theme -->

</head>
<body>

		<nav class="navbar navbar-fixed-top">
			<!-- THIS IS THE BUTTON THAT POPS UP IN THE SMALL SIZED SCREENS AND SHOWS THE NAVBAR CONTENT ON PRESSING IT. -->
			<button type="button" class="btn navbar-toggle" navbar-toggle="collapse" data-target="#navbar-collapse" style="background-color: rgba(12, 30, 29,.4);" >
				<span class="icon-bar" style="color: white; background-color: white;"></span>	
				<span class="icon-bar" style="color: white; background-color: white;"></span>
				<span class="icon-bar" style="color: white; background-color: white;"></span>
			</button>
			<!-- LOGO -->
			<a href="#" class="navbar-brand" style="color:#088587 ;font-size: 30px; margin-left: 50px;"> 
				LOGO
			</a>
			<!-- NAVBAR CONTENT -->
			<ul class="nav navbar-nav nav-pills navbar-right collapse navbar-collapse" id="navbar-collapse" style="margin-right: 40px;">
				<li class="nav-items"><a class="nav-items"  href="">HOME <span class="glyphicon glyphicon-home"></span></a></li>
				<li class="nav-items"><a class="nav-items" href="">ABOUT</a></li>
				<li class="nav-items"><a class="nav-items" href="saletancylogin.php">LOGIN <span class="glyphicon glyphicon-user"></span></a></li>
			</ul>
		</nav>
		<br>
	<!-- THIS IS THE MAIN CONTENT OF THIS PAGE -->
	<div class="container">
		<h1 class="page-header" style="color: #ccc;">FILL THE FORM</h1><br>
		<div class="row">
			<div class="col-sm-8 text-center">
				<form action="phpclass.php" method="POST">
					<input class="form-control" type="text" name="firstname" placeholder="Enter First Name" required><br>
					<input class="form-control" type="text" name="lastname" placeholder="Enter Last Name" required><br>
					<input class="form-control" type="email" name="username" placeholder="Enter Username" required><br>
					<input class="form-control" type="password" name="password" placeholder="Enter Password" required><br>
					<select class="form-control" name="select" required> 
						<option class="form-control">MALE</option>
						<option class="form-control">FEMALE</option>
						<option class="form-control">OTHERS</option> 
					</select><br>
					<input type="submit" name="submit" class="button" style="font-size: 15px;" value="SUBMIT">
				</form>
			</div>
		</div>
	</div>
	<!-- FORM ENDS HERE -->

		<!-- This is the required jquery script -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
