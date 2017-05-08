<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Player</title>

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
          $player=$_GET['player'];
					$query="SELECT * FROM players NATURAL JOIN skills where PID='".$player."'";
          if($Squery=mysqli_query($mysqli,$query)){
            $row=mysqli_fetch_assoc($Squery);
            if(strcmp($row['POS'],'GK'))
            { $skills=array("PACE","SHOOT","PASS","DRIFT","DEFENCE","PHYSICAL");}
            else
            {  $skills=array("DIVE","HANDLING","KICK","REFLEXES","SPEED","POSITION");}
            $cquery="SELECT NAME FROM clubs where CLUBID='".$row['CLUBID']."'";
            $cSquery=mysqli_query($mysqli,$cquery);
            $crow=mysqli_fetch_assoc($cSquery);
  ?>
  <section id="player">
	<div class="container"> 
  <div style="float:right;  width:75%;" class="playername">
				<br> <br>
            <h3><?php echo $row['TNO']?></h3>
            <h1><?php echo $row['NAME']?></h1>
            <br><br>                  
            <br>
        <button class="toggle-btn" id="toggle-overview" onclick="showoverview()">Overview</button>
        <button class="toggle-btn" id="toggle-skills" onclick="showskills()" >Skills</button>  
		</div>	
		<div style="float:left; width:25%; padding:1em;">
			<img style="height:15em; width:15em;"src="assets\img\player.jpg">
		</div>
		
	</div>
  </section> 

 
  <section id="player-details">
  <div class="container" style="padding:20px">  
    <div style="float:left; width: 20%;" >
            <table style="width:100%" class='player-tables'>
              <tr>
                <td>Club</td>
                <?php
                  echo '<td><a href="club.php?club='.$row["CLUBID"].'">'.$crow['NAME'].'</td>'; 
                ?> 
              </tr>
              <tr>
                <td>Position</td>
                <td><?php echo $row['POS']?></td> 
              </tr>
            </table>                           
            <br>
            <?php    
						echo '<img src="assets/img/clubs/'.$row["CLUBID"].'.png" style="height:15em;" alt="fail"></td>';
            ?>
    </div> 
   <div class="container" style="float:right; width: 75%;"  >
      <div id="overview">
          <table style="width:100%" class='player-tables'>
            <tr>
              <td>Nationality</td>
              <td><?php echo $row['NATIONALITY']?></td> 
            </tr>
            <tr>
              <td>Age</td>
              <td><?php echo (date("Y-m-d")-$row['DOB'])?></td> 
            </tr> 
            <tr>
              <td>Height</td>
              <td><?php echo $row['HEIGHT']?> cm</td> 
            </tr>
            <tr>
              <td>Matches Played</td>
              <td><?php echo $row['PLAYED']?></td> 
            </tr>
            <tr>
              <td>Goals</td>
              <td><?php echo $row['GOALS']?></td> 
            </tr>
          </table> 
        </div>
      <div id="skills" style="display:none;">
          <table style="width:100%" class='player-tables'>
            <tr> 
              <td>RATING</td>
              <td><?php echo $row['RATING']?></td>
            </tr>
            <tr>
              <td><?php echo $skills[0]?></td>
              <td><?php echo $row['SKILL1']?></td> 
            </tr>
            <tr>
              <td><?php echo $skills[1]?></td>
              <td><?php echo $row['SKILL2']?></td> 
            </tr>
            <tr>
              <td><?php echo $skills[2]?></td>
              <td><?php echo $row['SKILL3']?></td> 
            </tr>
            <tr>
              <td><?php echo $skills[3]?></td>
              <td><?php echo $row['SKILL4']?></td> 
            </tr>
            <tr>
              <td><?php echo $skills[4]?></td>
              <td><?php echo $row['SKILL5']?></td> 
            </tr>
            <tr>
              <td><?php echo $skills[5]?></td>
              <td><?php echo $row['SKILL6']?></td> 
            </tr> 
            <tr> 
              <td>WEAK FOOT</td>
              <td><?php echo $row['WEAKFOOT']?>&#9733;</td>
            </tr>
            <tr> 
              <td>SKILL STAR</td>
              <td><?php echo $row['SKILLSTAR']?>&#9733;</td>  
            </tr>
          </table>
      </div>        
   </div>     
 </div>    
 </section>
            <?php
             } 
            else
            {
              echo 'not done';
            }
            ?> 
  
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