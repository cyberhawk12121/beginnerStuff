<?php 
include 'project1database.php'; ?>
<?php

// TO CHECK IF THE SUBMIT BUTTON IS WORKNG
if (isset($_POST['submit'])) {
	$user= mysqli_real_escape_string($con, $_POST['user']);
	$message= mysqli_real_escape_string($con, $_POST['message']);

// TIME

$timest= time();
$time= date('H:i:s', $timest);

// VALIDATE INPUT	
if (empty($user) || empty($message)) {
	$error="Fill your name and message";
	header("location: project1.php?error=".urlencode($error));
}
elseif (!empty($user) && !empty($message)) {
	
	$query= "INSERT INTO shout(user,message,time)
	VALUES ('$user', '$message', '$time') ";

if (!mysqli_query($con,$query)) {
	die('ERROR  : ' .msqli_error($con));
}

elseif (mysqli_query($con,$query)) {
	header("location : project1.php" );
}
}
}


?>