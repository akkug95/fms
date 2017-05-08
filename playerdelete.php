<?php
		if (!@($mysqli = new mysqli("localhost", "root", "", "fms"))||$mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

	$player=$_GET['player'];
	$query="DELETE from players WHERE PID='".$player."'";
	$query1="DELETE from skills WHERE PID='".$player."'";
	$query2="DELETE from users WHERE USERNAME='".$player."'";
	if(mysqli_query($mysqli,$query) && mysqli_query($mysqli,$query1)&& mysqli_query($mysqli,$query2)){
		echo '<script> alert("Player Deleted");';
		echo 'location.replace("playeradmin.php?p=A");';
		echo '</script>';
	}
?>