<?php 
include 'connection.include.php';
	class database extends connection 
	{
		public function getuser($user, $pass, $first, $last)
		{
			if (isset($_POST['submit'])) {
			$this->username  = $user;
			$this->password  = $pass;
			$this->firstname = $first;
			$this->lastname  = $last;
			$query= "INSERT INTO userinfo(firstname, lastname, username, password) VALUES('$first', '$last', '$user', '$pass')";
			$query_run= mysqli_query($this->con, $query);
			header('location: saletancylogin.php'. urlencode($this->username));
			}
			

		}

		public function putuser()
		{

		}

	}

$username= $_POST['username'];
$password= $_POST['password'];
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$connection= new database;
$connection->getuser($username, $password, $firstname, $lastname);


?>

<?php  
/* 
include 'configurationfile.php';

// THIS IS A LITTLE UNORGANIZED WAY
class database
{
	public $dbhost   = DBHOST;
	public $dbpass = DBPASS;
	public $dbname   = DBNAME;
	public $dbuser   = DBUSER;

	public $con;

	public function __construct()
	{
		$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
		if(!$this->con)
		{
		echo mysqli_connect_error();
		}
	}
	public function getuser()
	{
		$username= $_POST['username'];
		$password= $_POST['password'];
		$firstname= $_POST['firstname'];
		$lastname= $_POST['lastname'];
		$query= "INSERT INTO userinfo(firstname, lastname, username, password) VALUES('$firstname', '$lastname', '$username', '$password')";
		$query_run= mysqli_query($this->con, $query);
	}

	function getuserinfo(){
		
	}
}

$connection= new database;
$connection->getuser();
$connection->getuserinfo();	

/* ######## THIS IS THE PROCEDURAL WAY OF INSERTING DATA IN THE DATABASE ########

$con= mysqli_connect('localhost', 'root', 'Sameer87500', 'myproject');
if(!$con){
echo mysqli_connect_error();
}
if(isset($_POST['submit'])){
$username  = ($_POST['username']) ; 
$password  = ($_POST['password']);
$firstname = ($_POST['firstname']);
$lastname  = ($_POST['lastname']);
$query= "INSERT INTO userinfo(firstname, lastname, username, password) VALUES ('$firstname', '$lastname', '$username', '$password')";
$query_run= mysqli_query($con, $query);
}
// PROCEDURAL END 

*/
?> 
