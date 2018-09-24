<?php 
include 'connection.php';

$firstname= $_POST['firstname'];
$lastname = $_POST['lastname'];
$username= $_POST['username1'];
$password= $_POST['password1'];
$password_confirm= $_POST['password2'];
$hashed_password= password_hash($password, PASSWORD_DEFAULT);

/**
* 
*/
class register extends connection
{
	public $query;
	public $query_run;

	public function validate($password1, $password2)
	{
		if ($password1!=$password2) {
			header("location:session_index.php?password do not match");
		}
	}
	
	public function registration($firstname,$lastname,$username,$password)
	{
		$this->query= "INSERT INTO register(firstname, lastname, username_register, password_register) VALUES('$firstname', '$lastname', '$username','$password')";
		$this->query_run=mysqli_query($this->con, $this->query);
		header("location: session_index.php?account=Success ");
	}
}

$register= new register;
$register->validate($password, $password_confirm);
$register->registration($firstname,$lastname,$username,$hashed_password);

?>
