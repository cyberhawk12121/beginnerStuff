<?php 
/*
$user= $_GET['user'];
$con= mysqli_connect('localhost', 'root', 'Sameer87500', 'myproject');
$query= "SELECT * FROM userinfo WHERE username='$user' ";
$query_run= mysqli_query($con, $query);
echo  "<br><br><br><br>" . "<h3 style='margin:0 auto;'>Username From URL = </h3>" . $user;
$row= mysqli_fetch_assoc($query_run);
*/
$username= $_GET['user'];
$con= new mysqli('localhost', 'root', 'Sameer87500', 'myproject');
if(isset($_POST['submit']))
{
	$name= $_FILES['avatar']['name'];
	$tmpname= $_FILES['avatar']['tmp_name'];
	$imgsize= $_FILES['avatar']['size'];
	$imgtype= $_FILES['avatar']['type'];
	$error= $_FILES['avatar']['error'];

	// filtering content so that user only enters image //
	$fileExt= explode('.', $name);
	$fileActualExt= strtolower(end($fileExt));
	$allow=array('jpg', 'jpeg', 'png');

	// Condition for image upload
	if (in_array($fileActualExt, $allow)) {
	 	if ($error==0) 
	 	{
	 		if ($imgsize<500000) 
	 		{

	 			$imgnewname= uniqid('',true). ".".$fileActualExt;
	 			$fileDestination= 'project/' .$imgnewname;
	 			move_uploaded_file($tmpname, $fileDestination); 
	 			$query= "INSERT INTO image(path) VALUES('$fileDestination')";
	 			$query_run= mysqli_query($con, $query );
	 			header('location: userpage.php');	
	 			$query1= "SELECT * FROM image WHERE user=$username";
	 			$query_run1= mysqli_query($con, $query_run1);
	 			$row= mysqli_fetch_assoc("query_run1");
	 			echo "<img src='$row['path']' "; 
	 		}
	 	}
	 	else
	 	{
	 		echo "There was an error uploading this file";
	 	}
	 } 
	 else
	 {
	 	echo "YOU CANNOT UPLOAD THIS TYPE OF FILE";	
	 }


}

/* 
NOTE: THIS IS THE CLASS THAT GETS THE CREDENTIALS OF THE LOGGED IN USER.
PROBLEMS: 1) CAN'T USE THE CONTENT OUTSIDE THE CLASS.  

class first_user_page extends connection
{ 
	public $username; 
	 // IT GETS THE VALUE FROM THE VARIABLE IN THE URL \\
	function get_user_details($user)
	{
		$query= "SELECT * FROM userinfo WHERE username='$user' ";
	 	$query_run= mysqli_query($this->con, $query);
		echo  "<br><br><br><br>" . "this is the username from URL = " . $user;
		$row= mysqli_fetch_assoc($query_run);
		echo "<br><br><br> USERNAME= ". $row['username']."<br><br> PASSWORD= ". $row['password']. "<br><br> FIRST NAME= ".$row['firstname']; 
	}
}
*/

?>

