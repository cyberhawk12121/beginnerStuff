<?php
	
	$con= mysqli_connect('localhost', 'root', 'Sameer87500', 'myproject');
	if (isset($_POST['submit1'])) 
	{
		$user= mysqli_real_escape_string($con, $_POST['username1']);
		$pass= mysqli_real_escape_string($con, $_POST['password1']);
		echo "Entered username : ". $user. "<br>"."<br>";
		echo "Entered password : ". $pass. "<br>"."<br>". "<hr>";
		$query= "SELECT username,password FROM userinfo";
		$query_run= mysqli_query($con, $query);

		while ($row= mysqli_fetch_assoc($query_run))
		{
			//echo $row['username']. "<br>";
			if ($row['username']==$user && $row['password']==$pass) 
			{
				header('location: https://www.google.com');
			}
			elseif ($row['username']!=$user || $row['password']!=$pass) 
			{
				echo 'INCORRECT USERNAME OR PASSWORD'. "<br>";
				// header('location: saletancylogin.php');
			} 
		}
	}

?>