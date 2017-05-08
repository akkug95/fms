<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Season</title>

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

  
  <?php include 'header.php';?>  
  <?php                      
          $season=$_GET['season'];
		  $season2=$season+1;
  ?>
  <section id="player">
	<div class="container"> 
  <div style="float:right;  width:65%;" class="playername">
			<br><br>
            <h1><?php echo $season.' - '.$season2;?></h1>
			<h3>Points Table</h3>
		</div>	
		<div style="float:left; width:25%; padding:1em;">
			<img style="height:15em; width:22em;"src="assets/img/premier.jpg">
		</div>
	</div>
  </section> 

 
  <section id="player-details">
  <div class="container" style="padding:20px">  
    <div class="home-table" id="home-results">
			<table id="results-table" style="width:100%;"> 
				<tr>
					<th>Club Name</th> 
				  <th>Club ID</th>
				  <th></th>
				  <th>Played</th> 
				  <th>Won</th>  
			      <th>Draw</th>
				  <th>Lost</th>
				  <th>GF</th>
				  <th>GA</th>
				  <th>GD</th>
				  <th>Points</th>
				</tr>
				<?php           
					$query="SELECT *, (3*WON+DRAW) AS POINTS FROM ".$season."finalpoints order by POINTS DESC";  
					if($Squery=mysqli_query($mysqli,$query)){
						$i=mysqli_num_rows($Squery);
						$j=1;  
						while($row=mysqli_fetch_assoc($Squery))
						{	if($i<=0)
								break;
						  $query2="SELECT CLUBID FROM clubs where NAME='".$row['TEAM']."'";   
							if($Squery2=mysqli_query($mysqli,$query2)){
								$row2=mysqli_fetch_assoc($Squery2);
								$clbid=$row2['CLUBID'];
							}
				?>
				<tr>
				  <td><?php echo '<a href="club.php?club='.$clbid.'">'.$row["TEAM"].'</a>';?></td> 
				  <td><?php 
					echo $clbid;
					?>
					</td> 
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$clbid.'.png" alt="fail">';?></td>
				  <td><?php echo $row["PLAYED"];?></td>                                                             
				  <td><?php echo $row["WON"];?></td>                                                             
				  <td><?php echo $row["DRAW"];?></td>                                                             
				  <td><?php echo $row["LOST"];?></td>                                                             
				  <td><?php echo $row["GF"];?></td>                                                             
				  <td><?php echo $row["GA"];?></td>  
				  <td><?php echo $row["GD"];?></td>                                                             
				  <td><?php echo $row["POINTS"];?></td>
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
 </section>  
  
  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="mu-footer-area">
           <div class="mu-footer-social">
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-google-plus"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
          </div>       
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  
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