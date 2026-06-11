<?php
	$host = "localhost";
	$uname = "root";
	$pass = "";
	$dbname = "solar";
	
	
	$conn = mysqli_connect($host, $uname, $pass, $dbname);
	
	if($conn){
		echo "connection succrssfully";
	}
	else{
		echo "error".mysqli_connect_error();
	}
?>