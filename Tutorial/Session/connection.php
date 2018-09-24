<?php 

/**
* 
*/
class connection
{
	public $dbhost= 'localhost';
	public $dbname= 'temporary';
	public $dbpass= 'Sameer87500';
	public $dbuser= 'root';
	public $con;
	public $error;

	function __construct()
	{
		$this->con= new mysqli($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
		if (!$this->con) {
			$this->error="Connection Failed ".$this->con->connect_error();
			return false; 
		}
	}
}

$connection= new connection;