<?php
	class Database{
		public $connection;
		public function __construct(){
			$this->connection = mysqli_connect('localhost','u932762624_globalhabibie','Singapore2024!','u932762624_agec');
			if (mysqli_connect_error()) {
				die("database connection failed:" .mysqli_connect_error().mysqli_connect_errno());
			}
		}
		public function sanitize($var){
			$return = mysqli_real_escape_string($this->connection,$var);
			return $return;
		}
	}
	$database = new Database();
?>