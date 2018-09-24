<?php
// CONNECT TO MYSQL DATABASE 
$con=mysqli_connect("localhost","root","Sameer87500","shoutit");

// CONNECTION TESTING
if (mysqli_connect_errno()) {
	 echo "FAILED TO CONNECT TO DATABASE: ". mysqli_connect_errno();
	 die();
}