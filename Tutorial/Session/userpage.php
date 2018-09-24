<?php
session_start();

include 'connection.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	
	<title>User page</title>
	<link rel="icon" type="image/jpg" href="iphone.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" >

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
	<!-- Optional theme -->

	 <!-- Bootstrap Dropdown Hover CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">


    <style type="text/css">
    	#nav a:hover {
    		background-color: rgba(255,255,255,0.5);
    		transition: 0.1s;
    	}
    </style>
</head>
<body style="background:black; color:rgb(70, 244, 95); ";>

	<!-- ######### NAVIGATION BAR ######## -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="border-radius: 0px; margin-bottom: 0;">
	<div class="container">
		
		<a href="" class="navbar-brand" style="font-size: 30px;">Lo-gO</a>

		<ul class="nav navbar-nav navbar-right" id="nav">
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Story</a></li>
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Friends</a></li>
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Messages</a></li>
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Notifications</a></li>
			<li class="dropdown dropdown-toggle" data-toggle="dropdown"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Settings</a>

				<ul class="dropdown-menu" style="background-color: rgba(20,20,20,0.9); color: white;">
					<li><a style="color:rgb(70, 244, 95); height: 30px; " href=""> Logout</a></li>
					<li><a style="color:rgb(70, 244, 95); height: 30px; " href=""> Logout</a></li>
					<li><a style="color:rgb(70, 244, 95); height: 30px; " href=""> Logout</a></li>
					<li><a style="color:rgb(70, 244, 95); height: 30px; " href=""> Logout</a></li>
				</ul>

			</li>
		</ul>
	</div>
</nav>
<div style="clear: both;"></div>
<br><br>

<div class="container">
<h3>	<!-- ########### NAVIGATION BAR END ########### -->
<?php 
	echo "<br>Username: ".$_SESSION['username'];
	echo "<br>Password: ".$_SESSION['password']; 
?>
	
</h3> 

<form action="logout.php" method="POST">
	<input class="btn btn-danger" type="submit" name="logout" value="Logout">
</form>

</div>	


<!-- This is the required BOOTSTRAP "jquery" script -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>