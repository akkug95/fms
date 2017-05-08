<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Players</title>

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

  <section id="player">
	<div class="container" style="padding-top:1em;"> 
  <?php 
  ?>
    <div class="home-table" id="home-result">               
        <?php        
			$player=$_GET['player'];
			$pquery="SELECT * FROM players where PID='".$player."'";
			$Spquery=mysqli_query($mysqli,$pquery);
			$playerrow=mysqli_fetch_assoc($Spquery);
			$query="SELECT * FROM bids where PID='".$player."'";   
			if($Squery=mysqli_query($mysqli,$query)){
				$i=mysqli_num_rows($Squery);
				$j=1; 
            if($i==0){
                echo '<tr colspan=6>No Bids for the player yet.</tr>';
            }  
            else{
          ?>
		  <table id="results-table" style="width:100%;">
          <tr>
            <th>Manager</th> 
            <th>Club</th>
            <th></th>
			<th>Min Bid</th>
            <th>Bid Placed</td> 
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
							$mquery="SELECT * FROM managers where MGRID='".$row['MGRID']."'";
							$Smquery=mysqli_query($mysqli,$mquery);
							$managerrow=mysqli_fetch_assoc($Smquery);  
							$query2="SELECT NAME FROM clubs where CLUBID='".$managerrow['CLUBID']."'";
							$Squery2=mysqli_query($mysqli,$query2);
							$row2=mysqli_fetch_assoc($Squery2);  
							echo '<td><a href="manager.php?mgr='.$managerrow["MGRID"].'">'.$managerrow['NAME'].'</a></td>'; 
							echo '<td><a href="club.php?club='.$managerrow["CLUBID"].'">'.$row2['NAME'].'</a></td>';
							echo '<td><img class="small-logo" src="assets/img/clubs/'.$managerrow["CLUBID"].'.png" alt="fail"></td>';	
							echo '<td> '.$playerrow['BID_AMOUNT'].'</td>';
							echo '<td> '.$row['AMOUNT'].'</td>';
				?>
					  <td><button type="button" class="btn btn-default btn-sm" onclick="sellplayer('<?php echo $row["PID"];?>','<?php echo $managerrow["CLUBID"];?>')">Sell</button></td>
					  <script>
						function sellplayer(player,club) {
							var r = confirm("Sure you wish to sell?");
							if (r == true) {
								location.replace("sell.php?player="+player+"&club="+club+"");
							} 
							return true;
						}
					  </script>
				  </tr> 
        <?php
							$i--;
							$j++;
						}
					}}
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