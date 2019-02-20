<?php 

	session_start();
	if(array_key_exists("email",$_COOKIE)){
		$_SESSION['email'] = $_COOKIE['email'];
	}
	if(array_key_exists("email",$_SESSION)){
		echo "<p>you are logged in <a href='login.php?logout=1'>logout</a></p>";
	}
	else{
		header("location: login.php");
	}
?>