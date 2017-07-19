<?php
	if(isset($_POST['email']) && isset($_POST['username'])){
		if(!empty($_POST['email']) && $_POST['username']){
			
			$email = $_POST['email'];
			$username = $_POST['username'];
			echo "HEllo"." ".$email." ".$username;
	}
}
?>