<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "tup_otg";
	
	//Make Connection
	$conn = new mysqli($servername, $username, $password, $dbName);
	if(!$conn){
		die("Connection failed." . mysqli_connect_error());
	}
	else echo ("Connection Success!! ");
?>