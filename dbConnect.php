<?php
	
	function connect(){
		include("./dbConfig.php");
		$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

		if($conn->connect_error){
		return false;
	}
	return $conn;
	}	
?>