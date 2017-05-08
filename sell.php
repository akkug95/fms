<?php
		if (!@($mysqli = new mysqli("localhost", "root", "", "fms"))||$mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
	session_start();
}

	$player=$_GET['player'];
	$club=$_GET['club'];
	$query="UPDATE players SET CLUBID='".$club."', SALE =0, BID_AMOUNT=0 where PID='".$player."'";
	$query2="DELETE from bids where PID='".$player."'";
?>
<?php
	if(mysqli_query($mysqli,$query) && mysqli_query($mysqli,$query2)){
		echo $_SESSION['id'];
		header('Location: managerlogin.php?manager='.$_SESSION['id'].'');
	}
?>