<?php

class Database
{

	public $db_host= DB_HOST; ####  These DB_CONN
	public $db_user= DB_USER; ####	DB_USER
	public $db_pass= DB_PASS; ####	DB_PASS etc. ARE JUST CONSTANT CHARACTER variable that store a value in another file.
	public $db_name= DB_NAME; ####	They store the real names of of host, username, password and other credentials of database that are not meant to be changed.

	//call connect
	$this->connect();

	 private function connect()
	 {
	 	$this->link= new sqli($this->host, $this->db_user, $this->db_pass, $this->db_name);
	 	if(!$this->link)
	 	{
	 		echo "ERROR :". mysqli_error();
	 		die();
	 	}
	 }

}

?>