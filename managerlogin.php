<!doctype html>
<html style="min-width:405px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Manager Login</title>

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
          $mgrid=$_GET['manager'];
			$query="SELECT * FROM managers where MGRID='".$mgrid."'";
			if($Squery=mysqli_query($mysqli,$query)){
				$row=mysqli_fetch_assoc($Squery);
				$query2="SELECT NAME FROM clubs where CLUBID='".$row['CLUBID']."'";
				$Squery2=mysqli_query($mysqli,$query2);
				$row2=mysqli_fetch_assoc($Squery2);
  ?>

<div class="container" style="margin-top:5%;">
	<div style="float:left; width:20%;">
		<br><br><?php echo'<img style="height:15em; width:15em;"src="assets/img/managers/'.$mgrid.'.jpg">';?>
		<br><br><a href="playerbuy.php"><button class="btn btn-lg btn-success btn-block">Buy a Player</button></a>
		<br><br><a href="training.php?club=<?php echo $row2['NAME']?>"><button class="btn btn-lg btn-success btn-block">Set Training Date</button></a>
	</div>	
	<div style="float:right; width:80%;">
					<div class="panel-body">
						<div class="home-table" id="home-result">                      
						<table id="results-table" style="width:100%;">
					<?php      
								$query="SELECT * FROM players where CLUBID='".$row['CLUBID']."'";   
								if($Squery=mysqli_query($mysqli,$query)){
									$i=mysqli_num_rows($Squery);
									$j=1;
					  ?>
					  <tr>
						<th>Name</th> 
						<th>Nationality</th>
						<th>Position</th>
						<th></th>
						<th></th>
					  </tr>
					 </tr>   
					  <?php
									while($row=mysqli_fetch_assoc($Squery))
									{	
						if($i<=0)
											break;	
							?>
					<tr>
					<?php
									echo '<td><a  href="player.php?playersale='.$row['PID'].'">'.$row['NAME'].'</td>';
									echo '<td> '.$row['NATIONALITY'].'</td>';		
									echo '<td> '.$row['POS'].'</td>';
									if($row['SALE']==1){
										echo '<td><a href="bidcheck.php?player='.$row["PID"].'">'.$row['BID_AMOUNT'].'</a></td>';										
									}
									else{
										echo '<td><a href="playersale.php?player='.$row["PID"].'"><button type="button" class="btn btn-default btn-sm">Sell</button></a></td>';
									}
							?>
							  
							</tr> 
					<?php
										$i--;
										$j++;
									}
								}
					  else{
									echo 'not done';
								}
							?> 
						</table> 
				  </div>
				</div>
				</div>
</div>
	<?php
		  }
	?>
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