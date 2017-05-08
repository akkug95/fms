<!doctype html>
<html style="min-width:405px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Sell Player</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">    
    <!-- Date Picker -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">    
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="style.css" rel="stylesheet">
    <link href="mystyle.css" rel="stylesheet">
        
   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>        
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

<body>
<?php include 'header.php'; ?>
<!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="mu-preloader">
      <img src="assets/img/preloader.gif" alt=" loader img">
    </div>
  </div>
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Top</span>
    </a>
  <!-- END SCROLL TOP BUTTON -->
  <?php
	$player=$_GET['player'];
	$query="SELECT * FROM players where PID='".$player."'";
	if($Squery=mysqli_query($mysqli,$query)){
		$row=mysqli_fetch_assoc($Squery);
  ?>

<div class="container" style="margin-top:15%;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Player Details</h3></center>
                </div>
                <div class="panel-body">
				
                    <form role="form" method="post" action="">
                        <fieldset>
                            Player ID:
							<input class="form-control" placeholder="PLAYER ID" id="pid" name="pid" type="text" value="<?php echo $row['PID']?>" required readonly>
							Player Name:
							<input class="form-control" placeholder="NAME" id="name" name="name" type="text" value="<?php echo $row['NAME']?>" required readonly>
                            Nationality:
							<input class="form-control" placeholder="NATIONALITY" id="nationality" name="nationality" type="text" value="<?php echo $row['NATIONALITY']?>" required readonly>
                            <center>
							<table class="form-table" style="width:100%;">
								<tr>
									<td>T No</td>
									<td>Pos</td>
									<td>Honours</td>
								</tr>
								<tr>
									<td><input class="form-control" style="width:50px;" id="tno" name="tno" type="text" value="<?php echo $row['TNO']?>" required readonly></td>
									<td><input class="form-control" style="width:50px;" id="pos" name="pos" type="text" value="<?php echo $row['POS']?>" required readonly></td>
									<td><input class="form-control" style="width:50px;" id="honours" name="honours" type="text" value="<?php echo $row['HONOURS']?>" required readonly></td>
								</tr>	
							</table>
							</center>
							Minimum Biding Value:
							<input class="form-control" placeholder="0.00" id="minbid" name="minbid" type="text" required>
                            <br><input class="btn btn-lg btn-success btn-block" type="submit" value="Put For Sale" id="sale" name="sale" >
							
                        </fieldset>
                    </form>
					<?php
					}
						if((isset($_POST['sale']))){
							$pid=$_POST['pid'];
							echo $pid;
							$minbid=$_POST['minbid'];
							$query1="UPDATE players SET SALE=1 ,BID_AMOUNT=".$minbid." WHERE PID='".$pid."'";
							if(mysqli_query($mysqli,$query1)){
								echo '<script> alert("Player Put on Sale");';
								echo 'location.replace("managerlogin.php?manager='.$_SESSION['id'].'");';
								echo '</script>';
							}
						}else{
							//echo 'query fail';
							}
					?>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 

  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
  <script src="myjs.js"></script> 

</body>

</html>