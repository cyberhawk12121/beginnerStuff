<?php
include 'connection.include.php';

class login extends connection
	{
		public $username; 
		public $password;
		public function check($user, $pass)
		{
			$this->username = $user;
			$this->password = $pass;
			$query = "SELECT * FROM userinfo WHERE username='$user' AND password='$pass' "; // SHOULD HERE BE = or == ? And the winner is "=". 
			$query_run = mysqli_query($this->con, $query);

			if (mysqli_num_rows($query_run)==1) {
				header("Location: userpage.php?user=$this->username");
			}
			else{
				// header('Location: saletancylogin.php');
				echo "<script type='text/javascript'>alert('WRONG PASSWORD OR USERNAME')</script>";
			}

			/* (NOTE: In this way of login, the form data is compared to each data in the database and the if() statement then executes. And when the if() statement is wrong then the else statement executes for every wrong attempt. In this case the else executes for every unmatching data found in the database. That is why it's returning the echo statement same number of times as is the number of records in the database)


			while ($row = mysqli_fetch_assoc($query_run)) 
			{
				if ( $this->username==$row['username'] && $this->password==$row['password']) 
				{
					// TESTING ECHO STATEMENT 
				 	echo "USER LOGGED IN"; 
				break;
				}	
				else
				{
				 	echo "not logged in";
				 
				 } */
			
		}
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$object   = new login;
	$object->check($username, $password);
	