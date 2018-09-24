<?php include 'databaseinsertquery.php' ?>

<!doctype html>
<html>
<head>
	<style type="text/css">
		
	body{
		background-image: url("asdasd.jpg");
		background-size: cover;
		background-attachment: fixed;
	}

	</style>
 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

<h2 class="container page-header" style="color: yellow";> SIGN-UP</h2>
<form action="databaseinsertquery.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<input class="form-control" type="text" name="first_name" placeholder="First Name" required>
				<br>
				<input class="form-control" type="text" name="last_name" placeholder="Last Name" required>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input class="form-control" type="email" name="username" placeholder="E-mail" required>
				</div> <br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input class="form-control" type="password" name="password" placeholder="Enter Password" required>
				</div><br>
				<input class="btn btn-danger" type="submit" name="submit" value="SUBMIT">
			</div>
		</div>
	</div>
</form>
</body>

</html>