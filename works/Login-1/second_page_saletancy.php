<!DOCTYPE html>
<html>
<head>
	<title>Designer Webpage</title>
	<link rel="icon" type="image/jpg" href="project/153239.jpg">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
	<!-- Optional theme -->

	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="design.css">

</head>
<body>
	<header>
		<nav class= "navbar navbar-fixed-top" style="background-color: rgba(0,0,0,.8);">
			<div class="container">

				<!-- THIS IS THE LOGO -->
				<a  href=""><img src="project/LOGO1.jpg" class="image-responsive" style="width: 70px; height: 69px; display: inline; float: left;" title="STOLEN LOGO"></a>
				<!-- LOGO ENDS HERE -->

				<!-- THIS IS THE SEARCH BAR-->
				<div class="col-xs-3" style="float: right; margin-top: 15px;">
					<div class="input-group">
						<input id="navbar-collapse" type="search" class="form-control" name="search" placeholder="SEARCH..." style="background-color: transparent; color: white;" title="SEARCH THE WEBSITE">
						<div class="input-group-btn">
							<button type="submit" class="btn" style="background-color: #ccc;">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
						</button>
					</div>
				</div>
				<!-- SEARCH BAR ENDS -->

			<!-- THIS IS THE NAVIGATION BUTTONS -->				
			<div class="navigation">
				<button class="btn btn-default navbar-toggle" navbar-toggle="collapse" data-target="#data-collapse">
					<span class="icon-bar" style="background-color: gray;"></span>
					<span class="icon-bar" style="background-color: gray;"></span>
					<span class="icon-bar" style="background-color: gray;"></span>
				</button>
				<ul id="data-collapse" class="collapse navbar-collapse">
					<li><a class="style" href="" class="dropdown-toggle style" data-toggle="dropdown">SETTING </a>
						<ul class="col-xs-4 dropdown-menu list" style="border-style: none; ">
							<li><a href="">PROFILE</a></li>
							<li><a href="">MESSAGES</a></li>
							<li><a href="">Your Content</a></li>
							<li><a href="">NOTIFICATION</a></li>
							<li><a href="">LOGOUT</a></li>
						</ul>
					</li>
					<li><a class="style" href="">REGISTER </a></li>
					<li><a class="style" href="" style="padding-left: 15px; padding-right: 15px;">ABOUT </a></li>
					<li><a class="style" href="">HOME <span class="glyphicon glyphicon-home"></span></a></li>
				</ul>
			</div>
				<!-- NAVIGATION BUTTON END -->
			</div>
		</nav>
	
</header>
<div class="row">
<img src="back.png" alt="BACKIMAGE" class="image-responsive">

	<div class="h1 text-center col-xs-8" style="padding-bottom: 0; position: absolute; top: 100px; left: 300px;">
		<h1>DOWNLOAD THE PS4 EXCLUSIVE <br><strong><emphasis><u>SHADOW OF MORDOR</u></emphasis></strong>
		<form method="post" action="register.php" style="padding-bottom:30px; margin-right: 30px;"> 
			<button type="submit" name="submit" class="button" ><span>DOWNLOAD</span> </button>
		</form>
		</h1>
	</div>
</div>			

<!-- THIS IS THE MAIN SECTION -->
<section>

	<div class="row">
		<div class="container">
		<div class="col-xs-8">
			<form method="post" action="form_handle.php">
				<input class="form-control form" type="text" name="post" placeholder="SHARE WITH YOUR FRIENDS HOW YOU FEEL TODAY">
				<input class="form-control btn-danger submit" type="submit" name="submit">
				<input type="file" name="post_image" placeholder="Picture">
			</form>
		</div>

		<div class="col-xs-10 col-xs-push-1">
			<blockquote>
				<img src="project/logo.jpg" style="width: 30px;border: 1px solid black; padding: 1px ; float: left;">
				<p style=" margin-left:35px; font-size: 15px; margin-top: 3px;">Sameer Kumar, <span style="color: #858687;">21 Dec 1998</span> </p>
			</blockquote>
			<hr style="width: 450px; margin-top: 0; padding: 0">
			<img src="project/asdasd.jpg" class="image-responsive thumbnail" style="width: 600px; height: 400px; border-radius: 10px;">
		</div>
		</div>
	</div>

</section>

<!-- It's the footer -->
<footer class="row well" style="display: block;">
	<div class="col-xs-12">
		<p style="text-align: center;">&copy: Sameer Kumar <br>
			<a style="float: right; margin-right: 30px;" href="#">www.google.com</a><br>
			<a style="float: right; margin-right: 30px;" href="#">www.facebook.com</a><br>
		</p>
	</div>
</footer>
	
	<!-- This is the required jquery script -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>