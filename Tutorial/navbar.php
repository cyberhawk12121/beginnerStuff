<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		@media all and (max-width: 800px){
			.media{
				display: none;
			}
		}

	</style>
	<title>Navbar</title>
	<meta charset="utf-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
	<!-- Optional theme -->

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top" style="border-radius: 0; display: inline;">
		<div class="navbar-header" style="display: inline;">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<a class="navbar-brand" href="#"> BRAND</a>
		</div>	 
		<div class="collapse navbar-collapse navbar-right" id="navbar-collapse" style="margin-right: 50px;">
			<ul class="nav navbar-nav">
				<li class="nav-item active"><a href=""><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li class="dropdown">
					<a class="dropdown dropdown-toggle" data-toggle="dropdown" href="">Setting</a>
					<ul class="dropdown-menu">
						<li><a href="#"> Item1</a></li>
						<li><a href="#"> Item1</a></li>
						<li><a href="#"> Item1</a></li>
					</ul>
				</li>
				<li><a href="">Account</a></li>
				<li><a href="#feedback">Feedback</a></li>
			</ul>
		</div>
</nav>
	

<section>      	
<div class="row">          <!-- Feedback --> 
		<div class="col-xs-12 text-center">
			<div class="jumbotron" style="padding-top: 89px;">
			<p style="font-size:40px;"> Learn How to make a Website from scratch. <br><small style="font-size: 20px;">Well it's a paid course that I'll provide and therefore check all the terms and conditions before applying.</small> </p>	<br>
			
			<form action="form.php" method="post">
				<div class="btn-group">
					<button type="submit" class="btn btn-warning btn-lg" value="Login"> Login </button>
					<button type="submit" class="btn btn-success btn-lg" value="Sign-up"> Sign-up </button>
					<button type="submit" class="btn btn-warning btn-lg" value="Learn More"> Learn More </button>
					</div>
			</form>			
		</div>
	</div> 
</div>

<div class="container">
<div class="carousel slide" data-ride="carousel" id="slider">

	<ol class="carousel-indicators">
	    <li data-target="#slider" data-slide-to="0" class="active"></li>
	    <li data-target="#slider" data-slide-to="1"></li>
	    <li data-target="#slider" data-slide-to="2"></li>
  </ol>

	<div class="carousel-inner">
		<div class="item active">
			<img src="iphone.jpg">
		</div>

		<div class="item">
			<img src="asdasd.jpg">
		</div>

		<div class="item">
			<img src="trip hawkings.jpg">
		</div>
	</div>  <!-- ################### This is the end of carousel ################ --> 

	<a class="left carousel-control" href="#slider" data-slide="prev"> <!-- ############### This is the left-right buttons for carousel ############### -->
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Left</span>
	</a>

	<a class="right carousel-control" href="#slider" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
</div>

<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col-lg-9">
			<div>
				<h1>Title-1</h1>
				<p class="text-center" style="font-size: 20px;line-height:30px;text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				temor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<hr>

				<h2> TITLE-2</h2>
				<p class="text-center" style="font-size: 20px;line-height:30px;text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<hr>
			</div>
		</div>

		<div class="col-lg-3" style="margin-top: 100px;">
			<div class="panel panel-primary">
				<div class="panel-heading"> TITLE FOR PANEL</div>
				<div class="panel-body" style="text-align: justify;">
					<ul class="panel-border" style="line-height: 25px;">
						<li><a href="#"> Google</a></li>
						<li><a href="#"> Facebook</a></li>
						<li><a href="#"> Medium</a></li>
						<li><a href="#"> Twitter</a></li>
						<li><a href="#"> GMAIL</a></li>
						<li><a href="#"> Reddit</a></li>
						<li><a href="#"> YouTube</a></li>
						<li><a href="#"> Bootstrap</a></li>						
					</ul>
			</div>
		</div>
	</div>
</div>

<div id="sidebar">
	<ul class="sidebar-nav">
		<li class="sidebar-brand">
			<a href="#">Side-Bar</a>
		</li>
		<li><a href="">About</a></li>
		<li><a href="">Information</a></li>
		<li><a href="">About</a></li>
		<li><a href="">New</a></li>
		<li><a href="">oOld</a></li>

	</ul>
</div>

<div class="container">
	<div class="page-header" id="tutorial" style=";"> <h3>Watch These featured Tutorials </h3></div>
	<div class="row" >
		
		
		<!--  ########## This is the video section ########### -->
		<video controls loop class="col-md-6" style="border-radius: 60px;">
			<source src="Triple Threat Dance Legends - Poppin John, Nonstop, Koutei Sennin.mp4" type="video/mp4">
		</video>
				
		<video controls loop class="col-md-6" style="border-radius: 60px;">
			<source src="Poppin' John -- Urban Dance Showcase - YouTube_2.mp4" type="video/mp4">
		</video>
		
		<!-- ########### End of Video section ############# -->
		<hr>
		
	</div>
</div>
	

<div class="container">
<div class="row">
	<div class="page-header">
			<h2> This is the feedback</h2>
		</div>
	<div class="col-lg-4 col-xs-12">
		
		<div id="feedback">
			<blockquote style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<footer>Sam Callahan</footer>
		</blockquote>
		</div>
	</div>
	
	<div class="col-lg-4 col-xs-12">
		<div id="feedback">
			<blockquote style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<footer>Sam Callahan</footer>
		</blockquote>
		</div>
	</div>
	<div class="col-lg-4 col-xs-12">
		<div id="feedback">
			<blockquote style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<footer>Sam Callahan</footer>
		</blockquote>
		</div>
	</div>
</div>
</div>

</section>


<footer class="well text-center" style="margin-bottom: 0; padding-bottom: 0;">
	<p>&copy: Sameer Kumar 2018-2019
		<span style="float: right;">
			<a href="#" style="text-decoration: none; padding-right: 20px;"> Facebook</a>
			<a href="#" style="text-decoration: none; padding-right: 20px;"> Twitter</a>
			<a href="#" style="text-decoration: none; padding-right: 20px;"> YouTube</a>
		</span>
	</p>
</footer>

	<!-- This is the required jquery script -->
				<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
				<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	

</body>
</html>