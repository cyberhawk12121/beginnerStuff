<?php include 'connection.php' ?>


<!DOCTYPE html>
<html>
<head>
	
	<title>Login Page</title>
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
<body style="background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12)";>

	<!-- ######### NAVIGATION BAR ######## -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="border-radius: 0px; margin-bottom: 0;">
	<div class="container">
		
		<a href="" class="navbar-brand" style="font-size: 30px;">Lo-gO</a>

		<ul class="nav navbar-nav navbar-right" id="nav">
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Home</a></li>
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">About</a></li>
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Contact</a></li>
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Register</a></li>
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Login</a></li>
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Wallet</a></li>
			<li class="nav-item"><a style="color: rgb(70, 244, 95); font-size: 17px;" href="">Whitepaper</a></li>
		</ul>
	</div>
</nav>
<div style="clear: both;"></div>
<br><br>

	<!-- ########### NAVIGATION BAR END ########### -->
 
	<!-- ######### JUMBOTRON IMAGE ######### -->
<div class="jumbotron" class="text-center" style="background-image: url('iphone.jpg'); width: 100%;background-size: cover;background-repeat: no-repeat;height: 300px; opacity: 0.8;"><span class="text-center col-md-8 col-md-push-2" style="color: rgb(70, 244, 95); font-size: 65px;"><STRONG> <a href="#login" style="text-decoration: none;color: rgb(70, 244, 95);">LOGIN</a> TO USE CROSS CONVERSATION</STRONG></span></div>
	<!-- ######### JUMBOTRON IMAGE END ######### -->
<div class="container">
	
	<div class="row">
	<form action="process.php" method="post">		

			<!-- ############## LOGIN FORM  ############### -->
			<!-- ############## LOGIN FORM  ############### -->
			<!-- ############## LOGIN FORM  ############### -->
			<div class="col-sm-4 " style="border: 3px solid rgba(255,255,255,0.6);box-shadow:2px 2px 2px 2px black; border-radius:10px; ; padding: 20px; margin-bottom: 20px;">
				<h2 id="login">LOGIN FORM</h2><hr>

				<!-- USERNAME --> 
				<p style="font-size: 20px;color:white;"> USERNAME </p>
				<input autocomplete="off" class="form-control" id="user" type="text" name="username" placeholder="Fill the username" > <br>
				<span id="user_error"></span>	
				<!-- PASSWORD -->
				<p style="font-size: 20px;color:white;"> PASSWORD </p>
				<input autocomplete="off" class="form-control" type="password" id="password" name="password" placeholder="Fill the password" ><br>
				<span id="pass_error"></span>
				<!-- SUBMIT BUTTON -->
				<input onsubmit="return validate()" class="btn btn-success" type="submit" name="submit">
				<div style="margin-bottom: 20px;"></div>
			</div>
		</form>
			<!-- ############## LOGIN FORM END ############### -->
			<!-- ############## LOGIN FORM END ############### -->
			<!-- ############## LOGIN FORM END ############### -->


			<!-- ############## REGISTRATION FORM  ############### -->
			<!-- ############## REGISTRATION FORM  ############### -->
			<!-- ############## REGISTRATION FORM  ############### -->
			<form action="registrationprocess.php" method="post">
			<div class="col-sm-4 col-sm-push-3" style="border: 3px solid rgba(255,255,255,0.6);box-shadow:2px 2px 2px 2px black; border-radius:10px; ; padding: 20px; margin-bottom: 20px;">

				<p style="float: right; color: rgba(255,255,255,0.8);">New on Spotify? Register <a href="#register" style="color:orange;"> here</a></p>
				<h2 id="register">REGISTRATION FORM</h2><hr>
				<p style="font-size: 20px;color:white;"> FIRST NAME </p>
				
				<input autocomplete="off" class="form-control" id="user" type="text" name="firstname" placeholder="Fill Your Firstname" required> <br>

				<p style="font-size: 20px;color:white;"> LAST NAME </p>
				<input autocomplete="off" class="form-control" id="user" type="text" name="lastname" placeholder="Fill Your Lastname" required> <br>

				<p style="font-size: 20px;color:white;"> USERNAME </p>
				<input autocomplete="off" class="form-control" id="user" type="text" name="username1" placeholder="Fill the username" required> <br>
				<span id="user_error"></span>	
				<!-- PASSWORD -->
				<p style="font-size: 20px;color:white;"> PASSWORD </p>
				<input autocomplete="off" class="form-control" type="password" id="password1" name="password1" placeholder="Fill the password" required><br>
				<span id="pass_error"></span>

				<p style="font-size: 20px;color:white;">CONFIRM PASSWORD </p>
				<input autocomplete="off" class="form-control" type="password" id="password2" name="password2" placeholder="Fill the password again" required><br>
				<span id="error_message"></span>
				<!-- SUBMIT BUTTON -->
				<input onsubmit="return register_validate()" class="btn btn-success" type="submit" name="submit">
				 <!-- 
				 <p style="color: white; font-size: 20px;"> <?php echo $_GET['account'] ?> </p>
				-->
			</div>
		</form>
			<!-- ############## REGISTRATION FORM END ############### -->
			<!-- ############## REGISTRATION FORM END ############### -->
			<!-- ############## REGISTRATION FORM END ############### -->
			</div>
		</div>
</div>

<div>
	
	<div class="jumbotron text-center" style="margin-bottom: 0; background-color: black;">
		<p style="color: rgba(255,255,255,0.5); line-height: 10px;">&copy Sameer Kumar: 2018-2020
			<nav>
				<a href="">Facebook</a><br>
				<a href="">Twitter</a><br>
				<a href="">Medium</a>
			</nav>
		</p>
	</div>

</div>

<!-- ########### CUSTOM SCRIPT ############# -->
<!-- ########### CUSTOM SCRIPT ############# -->
<!-- ########### CUSTOM SCRIPT ############# -->
<script type="text/javascript">

	function validate()
	{
		
		var username= document.getElementById("user").value;
		var password= document.getElementById("pass").value;

		if(username=="") {
			document.getElementById("user_error").innerHTML= "Please Fill the Username First";
			return false;
		}

		if(password=="") {
		document.getElementById("pass_error").innerHTML= "Please Fill the Password First";
		return false;
		}

	}

	function register_validate()
	{
		var pass1= document.getElementById('pass1').value;
		var pass2= document.getElementById('pass2').value;
		if (pass1!=pass2)
		{
			document.getElementById('error_message').innerHTML="The password do not match";
			return false;
		}
	}

</script>
<!-- ########### SCRIPT END ############# -->
<!-- ########### SCRIPT END ############# -->
<!-- ########### SCRIPT END ############# -->
	
	<!-- This is the required BOOTSTRAP "jquery" script -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>