<?php include 'project1database.php' ?>
<?php
	// This is a query
$query= "SELECT * FROM shout ";
$shout= mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
*{
	padding: 0;
	margin-bottom: 0;
}
body{
	font-family: helvetica;
	line-height: 20px;
}	

.container{
	margin: 50px auto;
	width: 500px;
	height: 100%;
	border: 1px solid black;
	background-color: #444140;
}
.list{
	list-style-type: none;
	border-bottom: 1px solid #c6c5c4;
	padding: 5px 10px 2px; 
	padding-left: 0;

}
.content{
	width: 90%;
	overflow: auto;
	margin: 50px auto;
	background-color: #f2f4f4;
	border: 1px solid black;
	box-shadow: 1.5px 1.5px gray; 
}
.container h3{
 	border-bottom: 1px solid white;
 	text-align: center; 
 	padding-bottom: 6px;
 	color: white;

}
span{
	color: #b5b0af;
	padding-left: 4px;
}
input[type=text]{
	font-size: 15px;
	text-align: center;
}
input{
	width: 88%;
	margin-left: 30px;
	padding: 5px 0px 5px 3px;
	margin-bottom: 20px;
	border-radius: 6px;
}
.btn{
	width: 90%;
padding: 8px 5px 8px 5px;
border: 2px solid white;
box-shadow: 1px 1px black; 
border-radius: 5px;
text-align: center;

}

.btn:hover{
	background-color: black;
	color:white ;
	transition: 0.1s ease-out;
}

.error{
	text-align: center;
	background-color: red;
	padding-top: 5px;
	padding-bottom: 5px;
	margin-bottom: 10px;
}
	</style>

	<title>Project-1</title>
	<link rel="text/stylesheet" href="project1.css">
</head>
<body>

<div class="container">
	<h3>SHOUT BOX</h3>
	<div class="content">
		<ul class="lists">
		<?php while ($row=mysqli_fetch_assoc($shout)) : ?>
		 
			<li class="list"><span><?php echo $row['time']; ?> - </span><strong> <?php echo $row['user']; ?></strong> : <?php echo $row['message']; ?></li>
			<?php endwhile ; ?>
	</div>
	<form action="project1process.php" method="post">
		<?php if(isset($_GET['error'])) : ?>
			
			<div class="error">
				<?php echo $_GET['error']; ?> 
			</div>
		
		<?php endif; ?>

		<input type="text" name="user" placeholder="Enter your name">
		<input type="text" name="message" placeholder="Enter a message"> <br>
		<input class="btn" type="submit" name="submit" value="SHOUT IT OUT">
	</form>

</div>
</body>
</html>