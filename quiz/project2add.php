<?php include 'project2database.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.center{
			margin-left: 30px;
		}
	</style>
	<title>PHP Quiz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<h1 style="border-bottom: 2px dashed black;">Science Quiz</h1>
</header>

<section>
	<h2 class="center"> Add a Question</h2>
	<form action="project2add.php" method="post">
		<p>
			<label class="center">Question Number</label>
			<input  class="center" style="padding: 0; margin-bottom: 10px;" type="Number" name="question_number"><br>
		</p>
		<p>
			<label class="center">Question text</label>
			<input  class="center" style="padding: 0; margin-bottom: 10px;" type="text" name="question_text"><br>
		</p>
		<p>
			<label class="center">Choice #1</label>
			<input  class="center" style="padding: 0; margin-bottom: 10px;" type="text" name="choice1"><br>
		</p>
		<p>
			<label class="center">Choice #2</label>
			<input  class="center" style="padding: 0; margin-bottom: 10px;" type="text" name="choice2"><br>
		</p>
		<p>
			<label class="center">Choice #3</label>
			<input  class="center" style="padding: 0; margin-bottom: 10px;" type="text" name="choice3"><br>
		</p>
		<p>
			<label class="center">Choice #5</label>
			<input  class="center" style="padding: 0; margin-bottom: 10px;" type="text" name="choice5"><br>
		</p>
		<p>
			<label class="center">Correct Choice Number : </label>
			<input  class="center" style="padding: 0; margin-bottom: 10px;" type="Number" name="correct_choice"></br>
		</p>
		
			<input  class="center" style="padding: 5px; margin-bottom: 10px;" type="submit" name="submit"><br>
	</form>
</section>

<footer style="border-top: 1px solid black;">
	copyright &copy: Sameer  2018 
</footer>
</body>
</html>