<!doctype html>
<html style="min-width:405px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Player Login</title>

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
				$query2="SELECT NAME FROM clubs where CLUBID='".$row['CLUBID']."'";
				$Squery2=mysqli_query($mysqli,$query2);
				$row2=mysqli_fetch_assoc($Squery2);
				$clbid=$row['CLUBID'];
  ?>

<div class="container" style="margin-top:5%;">
	<div style="float:left; width:40%;">
		<br><br><?php echo'<img style="height:15em; width:15em;"src="assets\img\player.jpg">';?>
		<div class="home-table" id="home-result">    
		<h2>Present Training Sessions</h2>
			<table id="results-table" style="width:100%;">
			  <?php
				$query3="SELECT * FROM training where CLUB='".$row2['NAME']."' AND DATE >= CURDATE()";
				if($Squery3=mysqli_query($mysqli,$query3)){
					$i=mysqli_num_rows($Squery3);
					$j=1; 
					if($i==0){
						echo '<tr colspan=6>No Training Session for '.$row2['NAME'].' found.</tr>';
					}  
					else{
			  ?>
					  <tr>
						<th>Date</th> 
						<th>Time</th>
					  </tr>
					  <?php
									while($row3=mysqli_fetch_assoc($Squery3))
									{	
										if($i<=0)
											break;	
							?>
					<tr>
					<?php
								$date=date_create($row3['DATE']);
								echo '<td>'.date_format($date,"D, d F Y").'</td>';	
								echo '<td>'.$row3['TIME'].'</td>';
					?>
					</tr> 
					<?php
										$i--;
										$j++;
									}
								}
								}
							else{
									echo 'not done';
								}
							?> 
			</table> 
			</div>
	</div>	
	<div style="float:right; width:50%;">
		<div class="home-table" id="home-fixtures">
    <center> 
    <h2>Upcoming Fixtures</h2>
    </center>                       
			<table id="fixtures-table" style="width:100%;"> 
				<tr>
				  <th>Date</th> 
				  <th>Home</th>
				  <th></th>
				  <th></th> 
				  <th></th>
				  <th>Away</th>
				</tr>  
				<?php
					$query2="SELECT * FROM fixtures where DATE >= CURDATE() && (HOMETEAM = '".$clbid."' OR AWAYTEAM ='".$clbid."') order by DATE LIMIT 0,2";   
					if($Squery2=mysqli_query($mysqli,$query2)){
						$i=mysqli_num_rows($Squery2);
						$j=1;  
						while($row2=mysqli_fetch_assoc($Squery2))
						{	if($i<=0)
								break;
				?>
				<tr>
				  <td><?php $date=date_create($row2['DATE']);
						echo date_format($date,"D, d M Y");
					?></td> 
				  <td><?php echo $row2['HOMETEAM'];?></td> 
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row2["HOMETEAM"].'.png" alt="fail">';?></td>
				  <td>v/s</td>                                                                                                                       
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row2["AWAYTEAM"].'.png" alt="fail">';?></td>
				  <td><?php echo $row2['AWAYTEAM'];?></td>
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
      <center>
        <a href="fixtures.php">See all fixtures <span>&#8594;</span></a> 
      </center>
      </div>
    <div class="home-table" id="home-results">
    <center> 
      <h2>Past Results</h2>
    </center>                       
			<table id="results-table" style="width:100%;"> 
				<tr>
				  <th>Date</th> 
				  <th>Home</th>
				  <th></th>
				  <th>SL</td> 
				  <th></th>
				  <th>Away</th>
				</tr>  
				<?php           
					$query2="SELECT * FROM fixtures where DATE < CURDATE() && (HOMETEAM = '".$clbid."' OR AWAYTEAM ='".$clbid."') order by DATE desc LIMIT 0,2";   
					if($Squery2=mysqli_query($mysqli,$query2)){
						$i=mysqli_num_rows($Squery2);
						$j=1;  
						while($row2=mysqli_fetch_assoc($Squery2))
						{	if($i<=0)
								break;	
				?>
				<tr>
				  <td><?php $date=date_create($row2['DATE']);
						echo date_format($date,"D, d M Y");
					?></td> 
				  <td><?php echo $row2['HOMETEAM'];?></td> 
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row2["HOMETEAM"].'.png" alt="fail">';?></td>
				  <td><?php echo $row2["HOMEGOAL"].' - '.$row2["AWAYGOAL"];?></td>                                                                                                                       
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row2["AWAYTEAM"].'.png" alt="fail">';?></td>
				  <td><?php  echo $row2['AWAYTEAM'];?></td>
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
      <center>
        <a href="result.php">See all results <span>&#8594;</span></a> 
      </center>
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