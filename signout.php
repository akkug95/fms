<?php
	if (!@($mysqli = new mysqli("localhost", "root", "", "fms"))||$mysqli->connect_errno) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		session_start();
	}
	session_destroy();
	$query4="UPDATE users SET logged=0 WHERE USERNAME='".$_SESSION['username']."'";
	mysqli_query($mysqli,$query4);
	echo '<script> location.replace("index.php"); </script>';
?>