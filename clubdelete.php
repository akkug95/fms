<?php
		if (!@($mysqli = new mysqli("localhost", "root", "", "fms"))||$mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

	$club=$_GET['club'];
	$query="DELETE from clubs WHERE CLUBID='".$club."'";
	if(mysqli_query($mysqli,$query)){
		echo '<script> alert("Club Deleted");';
		echo 'location.replace("clubadmin.php");';
		echo '</script>';
	}
?>