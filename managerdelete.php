<?php
		if (!@($mysqli = new mysqli("localhost", "root", "", "fms"))||$mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

	$manager=$_GET['manager'];
	$query="DELETE from managers WHERE MGRID='".$manager."'";
	$query2="DELETE from users WHERE USERNAME='".$manager."'";
	if(mysqli_query($mysqli,$query) && mysqli_query($mysqli,$query2)){
		echo '<script> alert("Manager Deleted");';
		echo 'location.replace("manageradmin.php");';
		echo '</script>';
	}
?>