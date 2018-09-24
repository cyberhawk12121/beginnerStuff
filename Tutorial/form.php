<?php

if (!empty($_POST['username'])&& !empty($_POST['password'])&&!empty($_POST['password_again'])&&!empty($_POST['info'])&&!empty($_POST['gender']) ) {
	# code...
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up Page</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
	<!-- Optional theme -->

	<link rel="stylesheet" href="navbar.css">
</head>
<body>

<!-- #############3 This is the navbar made by Bootstrap #############
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
		<ul class="nav navbar-nav" style="margin-right: 50px;">
			<li><a href="#">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
			<li class="dropdown">
				<a class="dropdown dropdown-toggle" data-toggle="dropdown" href="#">Setting </a>
				<ul class="dropdown-menu">
					<li><a href="">Item-1</a></li>
					<li><a href="">Item-2</a></li>
					<li><a href="">Item-3</a></li>
					<li><a href="">Item-4</a></li>
				</ul>
			</li>

		</ul>
	</div>

</nav> 
-->
<header>
	<nav class="navigation">
	<ul class="lists">
		<li> <a href="">Home</a></li>
		<li> <a href="">About</a></li>
		<li> <a href="">Contact</a></li>
		<li> <a href="">Settings</a></li>
	</ul>
	</nav>
</header>

<section class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="page-header"><h3> Sign-up </h3></div>
			<form action="send.php" method="post">
				Username: <input type="email" name="user-name" placeholder="Username" style="color: black;"><br><br>
				Password: <input type="password" name="password" placeholder="password" style="color: black;"><br><br>
				Password-Again: <input type="password" name="password_again" placeholder="password" style="color: black;"><br><br>
				Gender:<br/><br>  
				Male <input style="width: 40px;" type="radio" name="gender">  
				Female <input style="width: 40px;" type="radio" name="gender">
				<br><br><br>
				Self Description <br><br>
				<textarea name="info" style="color: black;"></textarea>
				<br><br>
				<input type="submit" class="btn btn-danger" name="button" value="Register" style="font-size: 17px;">
			</form>
		</div>
	</div>
</section>

<?php 

/*  
$time=time(); ############ Working with Time Stamps #############
$current_time= date('H:i:s', $time);
echo 'current time: '. $current_time;
echo '<br>';
echo 'current date: '. $date= date('D M Y', $time);
$modified_time= date( 'd M Y', strtotime('+1 week') );
echo '<br> '. 'This is the modified Date which is 1 week ahead of current date: ' .$modified_time;
echo '<br>';
echo  ' This is a randomly generated number : ' .rand();
*/
$info= $_SERVER['SCRIPT_NAME'];
echo $info;	


?>



<!-- This is the required jquery script -->
				<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
				<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	

</body>
</html>



<!--<form action="send.php" method="post">
	Username <input type="text" placeholder="Enter your name" name="Username" style="padding: 5px 4px 5px; border-radius: 6px;" /> </br></br>
	 usernamefather <input type="text" placeholder="Enter your Father's name" name="usernamefather" style="padding: 5px 4px 5px 4px;border-radius: 6px;" /></br></br>
	<input type="submit" value="SUBMIT" style="background-color: blue; padding: 5px; color: White; border-radius: 5px;" />
</form>



<form action="send.php" method="post">
		USERNAME <input type="email" placeholder="Enter Username/Email" name="Username" style="padding: 5px 4px 5px; border-radius: 6px;" /> </br></br>
		PASSWORD <input type="password" placeholder="Enter Password" name="password" style="padding: 5px 4px 5px 4px;border-radius: 6px;" /></br></br>
		<input type="submit" value="SUBMIT" style="background-color: blue; padding: 5px; color: White; border-radius: 5px;" />
	</form> 




 ###################### Orthodox way of making checkboxes #########################

<form action="send.php" method="post" style="margin-left: 50px;">
	Q1. Do you play Games? </br> </br>
	Yes<input type="checkbox" name="checkbox1" style="margin-right: 30px;">
	No<input type="checkbox" name="checkbox2">  
	<input type="submit" name="submit" value="Submit" style="margin-left: 50px;background-color: black; color: white; border-color: black; border-radius: 5px;">
</form>
-->



<!--  ############# (NOTE: This method is explained in the comment of send.php so look at it. Anyways we made checkboxes using arrays. So it's a better alternative if multiple checkboxed are used.) ##############3

<form action="send.php" method="post">
	Which of the following games you like the most? <br/><br/>
	Mass Efect<input type="checkbox" name="game[0]"> <br/>
	Need for Speed<input type="checkbox" value="Mass Effect" name="game[1]"><br/>
	IGI<input type="checkbox" value="NFS" value="IGI" name="game[2]"><br/>
	God Of War<input type="checkbox" value="GOW" name="game[3]"><br/>
	<input type="submit" name="submit" value="Submit">
</form>
-->



<!--  ########### These are radio buttons #############

<form action="send.php" method="post">
	DO YOU PLAY GAMES?
	YES<input type="radio" value="Yes" name="game">
	NO<input type="radio" value="No" name="game">
	<input type="submit" value="SUBMIT" name="submit">
</form>
-->




<!--         ################# (This is the mutliple choice form) #################      	

<form action="send.php" method="post">
	<h1> Which sport you like? </h1> </br></br></br>
	<select multiple="option" name="game[]" style="padding: 10px;font-size: 20px;">
		<option value="Football "> Football</option>
		<option value="Basketball"> Basketball</option>
		<option value="Soccer"> Soccer</option>
		<option value="Tennis"> Tennis</option>
	</select> 
 	</br></br>
	<input type="submit" name="submit" style="color: white; background: black; border-color: red;">
</form>
-->




