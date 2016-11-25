<?php
//For the Connection
	include('ConnectDB.php');

//Variables from the user
	$user_username = $_POST["usernamePost"];
	$user_password = $_POST["passwordPost"];


	$sql = "SELECT password FROM users WHERE username = '".$user_username."'";
	$result = mysqli_query($conn,$sql);

//Get the result and confirm Login
	if (mysqli_num_rows($result) > 0){
	//show data for each row	
		while($row = mysqli_fetch_assoc($result)){
			if($row['password'] == md5($user_password)){
				echo "Login has been successful! ";
			}
			else{
				echo "username or password is incorrect! ";
			}
		}
	} 
	else{
		echo "User not found! ";
	}
	
//github change test
?>