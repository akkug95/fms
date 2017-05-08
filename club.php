<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Club</title>

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

  <?php 
  
  include 'header.php';
  
  $clbid=$_GET['club'];
  $query="SELECT * FROM clubs where CLUBID='".$clbid."'";
  $Squery=mysqli_query($mysqli,$query);
  $row=mysqli_fetch_assoc($Squery);
  $query2="SELECT MGRID, NAME FROM managers where CLUBID='".$row['CLUBID']."'";
  $Squery2=mysqli_query($mysqli,$query2);
  $row2=mysqli_fetch_assoc($Squery2);
  $mgrid=$row2['MGRID'];
  $mgrname=$row2['NAME'];
  ?>

  <section id="player">
	<div class="container"> 
		<div style="float:left;  width:75%;" class="playername">
			<?php echo '<br><br><img src="assets/img/clubs/'.$row['CLUBID'].'.png" style="float:left; height:200px;">'?>
			<br><br>
			<center>
				<h3><?php echo $row['CLUBID']?></h3>
				<h1><?php echo $row['NAME']?></h1>
			</center>
			<br><br>                  
			<br><br>
			<button class="toggle-btn" id="toggle-view" onclick="showview()">Overview</button>   
			<button class="toggle-btn" id="toggle-squad" onclick="showsquad()" >Squad</button>
			<button class="toggle-btn" id="toggle-fixtures" onclick="showfixtures()" >Fixtures</button>
			<button class="toggle-btn" id="toggle-result" onclick="showresult()" >Results</button>
			<button class="toggle-btn" id="toggle-stats" onclick="showstats()" >Stats</button>
		</div>	
		<div style="float:right; width:25%;">
			<?php echo '<img src="assets/img/stadium/'.$row['CLUBID'].'.jpg" style="float:left; height:334px;">'  ?>
		</div>
	</div>
  </section> 
 <section id="club-toggle">
 <div id="view">        
	<div class="container">
	<div class="left" style="float:left; width:30%;">
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
        <a onclick="showfixtures()">See all fixtures <span>&#8594;</span></a> 
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
        <a onclick="showresult()">See all results <span>&#8594;</span></a> 
      </center>
      </div>
	</div>
		<div class="right" style="float:right; width:60%;"> 
      <div class="home-table">
        <table> 
          <tr>
            <th>Established</th>
            <td><?php echo $row['YEAR']?></td>
          </tr> 
          <tr>
            <th>Stadium</th>
            <td><?php echo $row['GROUND']?></td>
          </tr>
          <tr>
            <th>Manager</th>
            <td><?php echo'<a href="manager.php?mgr='.$mgrid.'">'. $mgrname.'</a>'?></td>
          </tr> 
        </table>
      </div>
      <center><?php echo '<img style="width:30em;" src="assets/img/managers/'.$mgrid.'.jpg">;'?></center>
    </div>
	</div>
 </div>
 <div id="squad" style="display:none;">
  <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-gallery-content"> 
              <!-- Start gallery image -->
              <div class="mu-gallery-body">
              <?php              
                $pquery="SELECT * FROM players where CLUBID = '".$row['CLUBID']."'";   
                if($pSquery=mysqli_query($mysqli,$pquery)){
                  $k=mysqli_num_rows($pSquery);
                  while($prow=mysqli_fetch_assoc($pSquery))
                  {	if($k<=0)
                      break;
              ?>
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4 mix food">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <img alt="img" src="assets/img/player.jpg">
                    </figure>
                    <div class="mu-single-gallery-info">
                      <?php echo'<a href="player.php?player='.$prow['PID'].'" data-fancybox-group="gallery" class="fancybox">';?>
                        <h2 style="color:#ffffff;"><?php echo $prow['NAME']?></h2>
                      </a>
                    </div>                  
                  </div>
                </div>
                <!-- End single gallery image -->  
                 <?php
                      $i--;
                    }
                  }else{
                    echo 'not done';
                  }
                ?>                   
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 </div>
 <div id="fixture-list" style="display:none;"> 
  <div class="home-table" id="home-fixtures">  
      <table style="width:100%;"> 
				<tr>
					<th>Date</th> 
				  <th>Home</th>
				  <th></th>
				  <th></th> 
				  <th></th>
				  <th>Away</th>
				</tr> 
				<?php           
					$query2="SELECT * FROM fixtures where DATE >= CURDATE() && (HOMETEAM = '".$clbid."' OR AWAYTEAM ='".$clbid."') order by DATE";   
					if($Squery2=mysqli_query($mysqli,$query2)){
						$i=mysqli_num_rows($Squery2);
						$j=1;  
						while($row2=mysqli_fetch_assoc($Squery2))
						{	if($i<=0)
								break;	
				?>
				<tr>
				  <td><?php $date=date_create($row2['DATE']);
						echo date_format($date,"D, d F Y");
					?></td> 
				  <td><?php
				  $query3="SELECT NAME FROM clubs where CLUBID='".$row2['HOMETEAM']."'";   
					if($Squery3=mysqli_query($mysqli,$query3)){
						$row3=mysqli_fetch_assoc($Squery3);
						$team=$row3['NAME'];
					}
				  echo $team;?></td> 
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row2["HOMETEAM"].'.png" alt="fail">';?></td>
				  <td>v/s</td>                                                                                                                       
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row2["AWAYTEAM"].'.png" alt="fail">';?></td>
				  <td><?php
				  $query3="SELECT NAME FROM clubs where CLUBID='".$row2['AWAYTEAM']."'";   
					if($Squery3=mysqli_query($mysqli,$query3)){
						$row3=mysqli_fetch_assoc($Squery3);
						$team=$row3['NAME'];
					}
				  echo $team;?></td>
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
 <div id="result-list" style="display:none;"> 
  <div class="home-table" id="home-results">  
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
					$query2="SELECT * FROM fixtures where DATE < CURDATE() && (HOMETEAM = '".$clbid."' OR AWAYTEAM ='".$clbid."') order by DATE desc";   
					if($Squery2=mysqli_query($mysqli,$query2)){
						$i=mysqli_num_rows($Squery2);
						$j=1;  
						while($row2=mysqli_fetch_assoc($Squery2))
						{	if($i<=0)
								break;	
				?>
				<tr>
				  <td><?php $date=date_create($row2['DATE']);
						echo date_format($date,"D, d F Y");
					?></td> 
				  <td><?php
				  $query3="SELECT NAME FROM clubs where CLUBID='".$row2['HOMETEAM']."'";   
					if($Squery3=mysqli_query($mysqli,$query3)){
						$row3=mysqli_fetch_assoc($Squery3);
						$team=$row3['NAME'];
					}
				  echo $team;?></td> 
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row2["HOMETEAM"].'.png" alt="fail">';?></td>
				  <td><?php echo $row2["HOMEGOAL"].' - '.$row2["AWAYGOAL"];?></td>                                                                                                                       
				  <td><?php echo '<img class="small-logo" src="assets/img/clubs/'.$row2["AWAYTEAM"].'.png" alt="fail">';?></td>
				  <td><?php
				  $query3="SELECT NAME FROM clubs where CLUBID='".$row2['AWAYTEAM']."'";   
					if($Squery3=mysqli_query($mysqli,$query3)){
						$row3=mysqli_fetch_assoc($Squery3);
						$team=$row3['NAME'];
					}
				  echo $team;?></td>
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
 <div id="club-stats" style="display:none;">
 <div class="container">
	<div class="left" style="float:left; width:30%;">
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
        <a onclick="showfixtures()">See all fixtures <span>&#8594;</span></a> 
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
        <a onclick="showresult()">See all results <span>&#8594;</span></a> 
      </center>
      </div>
	</div>
		<div class="right" style="float:right; width:60%;"> 
      <div class="home-table">
        <table> 
          <tr>
            <th>Played</th>
            <td><?php echo $row['PLAYED']?></td>
          </tr>
          <tr>
            <th>Wins</th>
            <td><?php echo $row['WIN']?></td>
          </tr>
          <tr>
            <th>Draw</th>
            <td><?php echo $row['DRAW']?></td>
          </tr>
          <tr>
            <th>Loss</th>
            <td><?php echo $row['LOSS']?></td>
          </tr>
          <tr>
            <th>Win %</th>
            <td>
            <?php    
                  $wp=round((($row['WIN']/$row['PLAYED'])*100),2);
                  echo $wp; 
                ?>
            </td>
          </tr>
          <tr>
            <th>Goals Scored</th>
            <td><?php echo $row['GOALS']?></td>
          </tr>
          <tr>
            <th>Conceeded</th>
            <td><?php echo $row['CONCEEDED']?></td>
          </tr>
          <tr>
            <th>Clean Sheets</th>
            <td><?php echo $row['CLEANSHEETS']?></td>
          </tr>
          <tr>
            <th>Trophies</th>
            <td><?php echo $row['TROPHIES']?></td>
          </tr>
        </table>
      </div>
    </div>
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