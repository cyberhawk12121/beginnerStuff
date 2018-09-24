<?php 

$db_host= "localhost";
$db_user= "root";
$db_pass="Sameer87500";
$db_name= "sample2";

$con= new mysqli($db_host, $db_user, $db_pass, $db_name);
// $query= "INSERT INTO sample2(first_name, last_name, user_name, password) VALUES ($first, $last, $user, $pass)"; This is the query to insert data
// $query_run= mysqli_query($con, $query);
?>

<?php

/*
$first= $_POST['first_name'];
$last= $_POST['last_name'];
$user= $_POST['user_name'];
$pass= $_POST['password'];

*/

if (isset($_POST['submit'])) {
	$first= mysqli_real_escape_string($con, $_POST['first_name']);
	$last= mysqli_real_escape_string($con, $_POST['last_name']);
	$user= mysqli_real_escape_string($con, $_POST['username']);
	$pass= mysqli_real_escape_string($con, $_POST['password']);

	$query= "INSERT INTO sample_table2(first_name, last_name, user_name, password) VALUES ('$first', '$last', '$user', '$pass')";
	if (!mysqli_query($con, $query)) {
		die("ERROR : ". mysqli_error($con));
	}
	echo '<script language="javascript">';
	echo 'alert("Account added successfully")';
	echo "</script";

}



?>