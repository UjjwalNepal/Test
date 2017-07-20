<?php

	$dbHost = "localhost";
	$dbUser = "root";
	$dbPass = "";
	$dbName = "ADMIN";



	$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

	if($conn->connect_error){
		echo "Something Went Wrong";
	}else{
		echo "Connection was successfull";
	}

	if(isset($_POST['password']) && isset($_POST['username'])){
		if(!empty($_POST['password']) && $_POST['username']){
			
			$username = $_POST['username'];
			$password = $_POST['password'];

			$sql = "INSERT Into tbl_admin (username, password) VALUES ('$username' ,'$password')";
			if($conn->query($sql)){
				echo "Successfully Inserted";
			}else{
				echo "Failed";
			}


	}
}
?>