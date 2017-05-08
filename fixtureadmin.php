
<!doctype html>
<html style="min-width:405px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Edit Manager</title>

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
  

<div class="container" style="margin-top:15%;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Add the Fixture details</h3></center>
                </div>
                <div class="panel-body">
				
                    <form role="form" method="post" action="">
                        <fieldset>
                            Date of Fixture:
							<input class="form-control" placeholder="DATE (YYYY-MM-DD)" id="date" name="date" type="date" value="<?php echo $row['DATE']?>" required>
                            Home Team:
							<select class="form-control" id="hometeam" name="hometeam" type="text" required>
								<option value='none' selected style="display:none">CLUB</option>
								<?php
									$query="SELECT CLUBID,NAME FROM clubs";
									if($Squery=mysqli_query($mysqli,$query)){
									   $i=mysqli_num_rows($Squery);
										while($row=mysqli_fetch_assoc($Squery))
										{	if($i<=0)
											break;
											echo '<option value="'.$row['CLUBID'].'">'.$row['NAME'].'</option>';
										}
									} 
								?>
							</select>
							Away Team:
							<select class="form-control" id="awayteam" name="awayteam" type="text" required>
								<option value='none' selected style="display:none">CLUB</option>
								<?php
									$query="SELECT CLUBID,NAME FROM clubs";
									if($Squery=mysqli_query($mysqli,$query)){
									   $i=mysqli_num_rows($Squery);
										while($row=mysqli_fetch_assoc($Squery))
										{	if($i<=0)
											break;
											echo '<option value="'.$row['CLUBID'].'">'.$row['NAME'].'</option>';
										}
									} 
								?>
							</select>
							                           
							<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Add" id="add" name="add" >
							
                        </fieldset>
                    </form>
					 <?php
					
						if((isset($_POST['add']))){
							$date=date("Y-m-d", strtotime($_POST['date']));
							$hometeam=$_POST['hometeam'];
							$awayteam=$_POST['awayteam'];
							$matchid=$hometeam.$awayteam;
							echo $matchid;
							
							
									$query='SELECT GROUND FROM clubs WHERE CLUBID = "'.$hometeam.'"';
									if($Squery=mysqli_query($mysqli,$query)){
										$row=mysqli_fetch_assoc($Squery);
									} 
							
							
							$stadium=$row['GROUND'];
							echo $stadium;
							
							$query1='INSERT INTO fixtures VALUES ("'.$matchid.'","'.$date.'","'.$hometeam.'",0,0,"'.$awayteam.'","'.$stadium.'",0)';
							
							if(mysqli_query($mysqli,$query1)){
								echo '<script> alert("Entry Added");';
								echo 'location.replace("admin.php");';
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