<?php

class Dbh{		
	protected function connect(){
		$host = "localhost";
		$dbname = "zuriphp";
		$username = "root";
		$password = "";
		try {
			$db = new mysqli($host, $username, $password, $dbname);
			return $db;
		}catch (mysqli_sql_exception $e) {
     			throw new mysqli_sql_exception($e->getMessage(), $e->getCode());
		}
	}
}
?>
