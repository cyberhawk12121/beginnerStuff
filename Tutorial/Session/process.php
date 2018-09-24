<?php
session_start(); 
// WORKING WORKING WORKING WORKING WORKING WORKING WORKING WORKING WORKING WORKING WORKING WORKING //

$con= mysqli_connect('localhost','root','Sameer87500','temporary');
$username= $_POST['username'];
$password= $_POST['password'];
$query= "SELECT password_register FROM register WHERE username_register='$username'";
$query_run= mysqli_query($con, $query);
if(mysqli_num_rows($query_run)>0)
{
	while($row= mysqli_fetch_assoc($query_run)) 
	{
		if($verify= password_verify($password, $row['password_register']))
		{
			// echo "Hello ".$password;
			$_SESSION['username']= $username;
			$_SESSION['password']= $password;
			header('location: userpage.php?welcome');	
		}
		else
		// echo "wrong password";
			header('location: session_index.php');
	}
	
}
else
	// echo "Wrong Username";
	header('location: session_index.php');

	while($row= mysqli_fetch_assoc($query_run)) 
	{
		if($verify= password_verify($password, $row['password_register']))
		{
			// echo "Hello ".$password;
			$_SESSION['username']= $username;
			$_SESSION['password']= $password;
			header('location: userpage.php?welcome');	
		}
		else
		// echo "wrong password";
			header('location: session_index.php');
	}
	
}
else
	// echo "Wrong Username";
	header('location: session_index.php');

/*
$con= mysqli_connect('localhost','root','Sameer87500','temporary');
$username= $_POST['username'];
$password= $_POST['password'];
$query= "SELECT password_register FROM register WHERE username_register='$username'";
 */


















?>

<!-- <?php 
/*

include 'connection.php'; ##### CONNECTION ESTABLISHED #####
session_start();

$username= $_POST['username'];
$password= $_POST['password'];


class login_user extends connection
{
	public $query;
	public $query_run;	
	public $query1;
	public $query_run1;
	public $row;
	public $rows;

	public function secure_SQL_injection($username, $password)
	{
		$username= mysqli_real_escape_string($this->con,$username);
		$password= mysqli_real_escape_string($this->con,$password);
	}

	public function validate($username, $password)
	{
		if (isset($_POST['submit'])) 
		{
			if (empty($username) || empty($password)) 
			{
				header('Location: session_index.php');
			}
			else
			{
				$this->query= "SELECT * FROM register WHERE username_register='$username'";
				$this->query_run= mysqli_query($this->con, $this->query);
				// $this->rows=mysqli_num_rows($this->query_run);
				$this->query1="SELECT * FROM register";
				$this->query_run1= mysqli_query($this->con, $this->query1);
				while ($this->row=mysqli_fetch_assoc($this->query_run1)) 
				{
					if (password_verify($password, $this->row['password_register']) && mysqli_num_rows($this->query_run)>0 ) 
					{
						header('location: userpage.php?Logged_in');	
					}
				}
				

				/* 
				if ($rows>0) 
				{
					$_SESSION['username']= $username ;
					$_SESSION['password']= $password;
					header('location: user.php?Logged_in');	
				}
			
			}	
		}
	}


}


$login= new login_user();
$login->secure_SQL_injection($username,$password);
$login->validate($username,$password);

?>

*/