<?php
//For the Connection
	include('ConnectDB.php');

//Variables from the user
	$user_username_reg = $_POST["reg_usernamePost"];
	$user_password_reg = $_POST["reg_passwordPost"];
	$user_email_reg = $_POST["reg_emailPost"];


	$sql = "INSERT INTO users (username, password, email)
			VALUES ('".$user_username_reg."','".md5($user_password_reg)."','".$user_email_reg."')";
	$result = mysqli_query($conn,$sql);
	echo "User has been registered! ";

	

?>