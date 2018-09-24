<?php

/* Procedural way of connection
$con= mysqli_connect("localhost","root","Sameer87500", "quizzer"); 
*/

// This is the object oriented way.
$db_host="localhost";
$db_name= "quizzer";
$db_user="root";
$db_password="Sameer87500";

// Creating mysqli object 
$mysqli= new mysqli($db_host, $db_user, $db_password, $db_name);

// Error Handler
if($mysqli->connect_error){
	@printf("connect failed: %s\n", $mysqli->connect_error);
	exit();
}

?> 