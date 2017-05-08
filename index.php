<!DOCTYPE html>
<html lang="en">
  <head>     
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Home</title>

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
	
	<!-- Main style sheet -->
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

  <!--Start Top Containers-->
  <section id="mu-lists">
	<div class="container">
		<div class="left" style="float:left; width:35%;">
    <div class="home-table" id="home-fixtures">
    <center> 
      <h2>Fixtures</h2>
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
					$query="SELECT * FROM fixtures where DATE >= CURDATE() order by DATE LIMIT 0,2";   
					if($Squery=mysqli_query($mysqli,$query)){
						$i=mysqli_num_rows($Squery);
						$j=1;  
						while($row=mysqli_fetch_assoc($Squery))
						{	if($i<=0)
								break;	
				?>
				<tr>
				  <td><?php $date=date_create($row['DATE']);
						echo date_format($date,"D, d F Y");
					?></td> 
				  <td><?php echo $row['HOMETEAM'];?></td> 
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row["HOMETEAM"].'.png" alt="fail">';?></td>
				  <td>v/s</td>                                                                                                                       
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row["AWAYTEAM"].'.png" alt="fail">';?></td>
				  <td><?php echo $row['AWAYTEAM'];?></td>
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
      <h2>Results</h2>
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
					$query="SELECT * FROM fixtures where DATE < CURDATE() order by DATE desc LIMIT 0,2";   
					if($Squery=mysqli_query($mysqli,$query)){
						$i=mysqli_num_rows($Squery);
						$j=1;  
						while($row=mysqli_fetch_assoc($Squery))
						{	if($i<=0)
								break;	
				?>
				<tr>
				  <td><?php $date=date_create($row['DATE']);
						echo date_format($date,"D, d F Y");
					?></td> 
				  <td><?php echo $row['HOMETEAM'];?></td> 
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row["HOMETEAM"].'.png" alt="fail">';?></td>
				  <td><?php echo $row["HOMEGOAL"].' - '.$row["AWAYGOAL"];?></td>                                                                                                                       
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row["AWAYTEAM"].'.png" alt="fail">';?></td>
				  <td><?php  echo $row['AWAYTEAM'];?></td>
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
		<div class="right" style="float:right; width:60%;">
	  <div class="home-table" id="home-results">
    <center> 
      <h2>Points Table</h2>
    </center>                       
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
					$query="SELECT *, (3*WON+DRAW) AS POINTS FROM 2016finalpoints order by POINTS DESC";  
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
	</div>
  </section>
  <!--End Top Containers-->

  <!-- Start Counter Section -->
  <section id="mu-counter">
    <div class="mu-counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-counter-area">
            <ul class="mu-counter-nav">
               <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Matches</span>
                   <h3><span class="counter">380</h3>
                </div>
              </li>
               <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Goals</span>
                  <h3><span class="counter">1026</span><sup></sup></h3>
                </div>
              </li>
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Average Attendees</span>
                  <h3><span class="counter">36451</span></h3>
                </div>
              </li>
              <li class="col-md-3 col-sm-3 col-xs-12">
                <div class="mu-single-counter">
                  <span>Clean Sheets</span>
                  <h3><span class="counter">74</span></h3>
                </div>
              </li>
            </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Counter Section --> 

  <!--Start Statistics Section-->
  <section id="mu-statistics">
    <div class="container"  style="padding-top:2em;">
    <h2>Premier League Player Records</h2>
      <br><br>
      <table class="player-records" style="width:100%">
        <tr> 
             <td style="padding-left:2em; padding-right:2em;">
             <div class="home-table" style="border:solid 2px #000000;">
              <table style="width:100%; border:none;"> 
                <tr>
                  <th colspan="4">Appearences</th>
                </tr>                             
                <?php           
                  $query="SELECT * FROM players order by PLAYED DESC LIMIT 5";   
                  if($Squery=mysqli_query($mysqli,$query)){
                    $i=mysqli_num_rows($Squery);
                    $j=1;  
                    while($row=mysqli_fetch_assoc($Squery))
                    {	if($i<=0)
                        break;	
                ?>
                <tr>
                <?php               
                    echo '<td> '.$j.'</td>';
                    echo '<td><a  href="player.php?player='.$row['PID'].'">'.$row['NAME'].'</td>';
                    echo '<td> '.$row['PLAYED'].'</td>';	
                ?>
                </tr> 
                <?php
                      $i--;
                      $j++;
                    }
                  }else{
                    echo 'not done';
                  }
                ?>
              </table> 
              <!--center><a href="#">View Full List <span>&#8594;</span></a-->
              </div>
             </td>        
             <td style="padding-left:2em; padding-right:2em;">
             <div class="home-table" style="border:solid 2px #000000;">
              <table style="width:100%; border:none;"> 
                <tr>
                  <th colspan="4">Goals</th>
                <tr>                             
                <?php           
                  $query="SELECT * FROM players order by GOALS DESC LIMIT 5";   
                  if($Squery=mysqli_query($mysqli,$query)){
                    $i=mysqli_num_rows($Squery);
                    $j=1;  
                    while($row=mysqli_fetch_assoc($Squery))
                    {	if($i<=0)
                        break;	
                ?>
                <tr>
                <?php               
                    echo '<td> '.$j.'</td>';
                    echo '<td><a  href="player.php?player='.$row['PID'].'">'.$row['NAME'].'</td>';
                    echo '<td> '.$row['GOALS'].'</td>';	
                ?>
                </tr> 
                <?php
                      $i--;
                      $j++;
                    }
                  }else{
                    echo 'not done';
                  }
                ?>
              </table> 
              <!--center><a href="#">View Full List <span>&#8594;</span></a-->
              </div>
             </td>
             <td style="padding-left:2em; padding-right:2em;">
             <div class="home-table" style="border:solid 2px #000000;">
              <table style="width:100%; border:none;"> 
                <tr>
                  <th colspan="4">Honours</th>
                <tr>                             
                <?php           
                  $query="SELECT * FROM players order by HONOURS DESC LIMIT 5";   
                  if($Squery=mysqli_query($mysqli,$query)){
                    $i=mysqli_num_rows($Squery);
                    $j=1;  
                    while($row=mysqli_fetch_assoc($Squery))
                    {	if($i<=0)
                        break;	
                ?>
                <tr>
                <?php               
                    echo '<td> '.$j.'</td>';
                    echo '<td><a  href="player.php?player='.$row['PID'].'">'.$row['NAME'].'</td>';
                    echo '<td> '.$row['HONOURS'].'</td>';	
                ?>
                </tr> 
                <?php
                      $i--;
                      $j++;
                    }
                  }else{
                    echo 'not done';
                  }
                ?>
              </table> 
              <!--center><a href="#">View Full List <span>&#8594;</span></a-->
              </div>
             </td>
             <td style="padding-left:2em; padding-right:2em;">
             <div class="home-table" style="border:solid 2px #000000;">
              <table style="width:100%; border:none;"> 
                <tr>
                  <th colspan="4">Rating</th>
                <tr>                             
                <?php           
                  $query="SELECT * FROM players NATURAL JOIN skills order by RATING DESC LIMIT 5";   
                  if($Squery=mysqli_query($mysqli,$query)){
                    $i=mysqli_num_rows($Squery);
                    $j=1;  
                    while($row=mysqli_fetch_assoc($Squery))
                    {	if($i<=0)
                        break;	
                ?>
                <tr>
                <?php               
                    echo '<td> '.$j.'</td>';
                    echo '<td><a  href="player.php?player='.$row['PID'].'">'.$row['NAME'].'</td>';
                    echo '<td> '.$row['RATING'].'</td>';	
                ?>
                </tr> 
                <?php
                      $i--;
                      $j++;
                    }
                  }else{
                    echo 'not done';
                  }
                ?>
              </table> 
              <!--center><a href="#">View Full List <span>&#8594;</span></a-->
              </div>
             </td>
        </tr>
      </table>
    </div>
  </section>
  <!--End Statistics Section--> 
  
  <!--Start Sponsors List-->
  <section id="mu-sponsors" style="background-color: #c1a35f; padding-bottom:2em;">
    <div class="container">   
    <h2>Official Sponsors</h2>
      <table style="width:100%; border:solid 2px;" class="sponsors-table"> 
      <tr> 
        <td  style="border-right:solid 1px;"><img src="assets\img\sponsors\ea_sports.png" class="sponsors"></td>
        <td><img src="assets\img\sponsors\barclays.png" class="sponsors"></td>
        <td><img src="assets\img\sponsors\nike.png" style="height:3em;"></td>
        <td><img src="assets\img\sponsors\carling.jpg" class="sponsors"></td>
        <td   style="border-right:solid 1px;"><img src="assets\img\sponsors\TAG_Heuer.png" class="sponsors"></td>
        <td><img src="assets\img\sponsors\sportingid.jpg" style="height:3em;"></td>
        <td><img src="assets\img\sponsors\Topps.png" class="sponsors"></td>
      </tr>  
      <tr> 
        <td style="border-right:solid 1px;">Lead Partner</td>
        <td>Official Bank</td>
        <td>Official Ball</td>
        <td>Official Beer</td>
        <td   style="border-right:solid 1px;">Official TimeKeeper</td>
        <td>Official Licensee</td>
        <td>Official Licensee</td>
      </tr>
      </table>
    </div>
  </section>
  <!--End Sponsors List-->

  
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

  </body>
</html>