<!DOCTYPE html>
<html>
<head>
	<title>CALCULATOR</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
	<!-- Optional theme -->
</head>
<body>
	<div class="container">
		<h1 class="page-header"> CALCULATOR</h1>
	<div class="row">
		<div class="col-md-3" style="border: 4px solid #f4f4f4; box-shadow: 3px 2px; padding-bottom: 40px; background-color: #ccc; border-radius: 10px;">
			
		<form action="projectOOP_answer.php" method="post"> <br><br>
			<input class="form-control" type="number" name="num1" placeholder="Enter number 1"><br><br>
			<input class="form-control" type="number" name="num2" placeholder="Enter number 2"><br><br>
			<select class="form-control" name="operation">
				<option class="form-control" value="add">ADD</option>
				<option class="form-control" value="subtract">Subtract</option>
				<option class="form-control" value="multiply">Multiply</option>
			</select><br><br>
			<button class="btn btn-large btn-success" type="submit">Calculate</button>

		</form>

		</div>
	</div>
</div>

		<!-- This is the required jquery script -->
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>