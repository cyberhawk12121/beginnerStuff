<?php require 'project2database.php' ?>

<?php 

// Set Question Number
$number=(int) $_GET['n'];

// Query
$query= "SELECT * FROM 'questions' 
			WHERE question_number= $number" ;

// Get result 
$result= $mysqli->query($query) or die($mysqli->error. __Line__);

$question=$result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Quiz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
	<h1 style="border-bottom: 2px dashed black;">Science Quiz</h1>
</header>

<section>
	<div style="border-bottom: 1px solid black; background-color: #f4f4f4;"> <p style="margin-left: 20px; font-size: 0.7cm;"> Question 1 of 5</p> </div>
	<p style="margin-left: 20px;"><? echo $question=['text']; ?></p>
	<form action="process.php" method="post">
		<ul style="margin-left: 50px;">
			<?php while ($row= fetch_assoc()) : ?> 
					<li><input type="radio" name="choice" value="<?php echo $row['id'];?>"> <?php echo $row['text']; ?></li>
			<?php endwhile; ?> 
			
			<li><input type="radio" name="choice" value="2"> Personal Home Page </li>
			<li><input type="radio" name="choice" value="3"> Private Home Page</li>
			<li><input type="radio" name="choice" value="4"> Personal Hypertext Preprocessor </li>
		</ul>
		<input style="margin-left:50px;" type="submit" name="submit" value="Submit">
	</form>
</section>

<footer>
	copyright &copy: Sameer  2018 
</footer>
</body>
</html>