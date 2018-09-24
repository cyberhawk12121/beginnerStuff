<?php
include 'configurationfile.php';
	class connection
	{
		public $dbhost = DBHOST;
		public $dbuser = DBUSER;
		public $dbpass = DBPASS;
		public $dbname = DBNAME;
		public $con;
		public function __construct()
		{
			$this->con = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if (!$this->con) 
			{
				return mysqli_connect_error();
			}
		}
	}

	$connect= new connection;

?>