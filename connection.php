<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "project";
		$conn = mysqli_connect($servername, $username, $password, $dbname );
		if($conn){
			
		}else{
			die("Connection failed because ".mysqli_connect_error());
		}
?>