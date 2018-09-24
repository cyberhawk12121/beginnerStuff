<?php

class Database{
	public $host= DB_HOST;
	public $username= DB_USER;
	public $password= DB_PASS;
	public $db_name= DB_NAME;

	public $link;
	public $error;

/*	
	public function __construct($host, $username, $password, $db_name) {		########### THIS IS NOT REQUIRED ###########
		$this->host=$host;
		$this->username=$username;
		$this->password=$password;
		$this->db_name=$db_name; */

		// CALL A CONNECT 
		$this->connect();

	private function connect(){				 // This is the same old connection
		$this->link= new mysqli($this->host, $this->username, $this->password, $this->db_name); // You have seen "new mysqli()" before, haven't you? 
		if (!$this->link){
			$this->error= "CONNECTION FAILED: ". $this->link->connect_error();
			return false;
		}
}
	public function select($query){			// This is the function for $query. 
		$result= $this->link->query($query) or die ($this->link->error.__LINE___);
		if($result->num_rows>0){					// This gives the number of rows. This is here so that we can know if it even gives any rows or not. 
			return $result;
		}
		else{
			return false;
		}

	}

}

?>