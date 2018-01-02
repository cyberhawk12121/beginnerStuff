<?php

if (!empty($_POST['username'])&& !empty($_POST['password'])&&!empty($_POST['password_again'])&&!empty($_POST['info'])&&!empty($_POST['gender']) ) {
	# code...
}
else
	echo "Fill all the fields";
?>

<html>
<head>
<style type="text/css">
	body{
		width: 1200px;
	}
	*{
		padding: 5px;
	}
</style> 
<title> This is form tutorial </title>
</head>
<body>



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




<!--         ################# (This is the mutliple choice choice form) #################      	

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


<form action="send.php" method="post">
	Username: <input type="email" name="user-name" placeholder="Username"><br><br>
	Password: <input type="password" name="password" placeholder="password"><br><br>
	Password-Again: <input type="password" name="password_again" placeholder="password"><br><br>
	Gender:<br/><br>  Male<input type="radio" name="gender">  Female<input type="radio" name="gender">
	<br><br><br>
	Work Description <br><br>
	<textarea name="info"></textarea>
	<br><br>
	<input type="submit" name="button" value="Register">


</form>

