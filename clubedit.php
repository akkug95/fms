<!doctype html>
<html style="min-width:405px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Edit Club</title>

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
	$club=$_GET['club'];
	$query="SELECT * FROM clubs where CLUBID='".$club."'";
	if($Squery=mysqli_query($mysqli,$query)){
		$row=mysqli_fetch_assoc($Squery)
  ?>

<div class="container" style="margin-top:15%;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Edit the club details</h3></center>
                </div>
                <div class="panel-body">
				
                    <form role="form" method="post" action="">
                        <fieldset>
                            Club ID:
							<input class="form-control" placeholder="CLUB ID" id="clubid" name="clubid" type="text" value="<?php echo $row['CLUBID']?>" required readonly>
							Club Name:
							<input class="form-control" placeholder="NAME" id="name" name="name" type="text" value="<?php echo $row['NAME']?>" required readonly>
                            Established Year:
							<input class="form-control" placeholder="YEAR" id="year" name="year" type="text" value="<?php echo $row['YEAR']?>" required readonly>
                            Stadium:
							<input class="form-control" placeholder="GROUND" id="ground" name="ground" type="text" value="<?php echo $row['GROUND']?>" required readonly>
                            Played:
							<input class="form-control" placeholder="PLAYED" id="played" name="played" type="text" value="<?php echo $row['PLAYED']?>" required>
                            Win:
							<input class="form-control" placeholder="WIN" id="win" name="win" type="text" value="<?php echo $row['WIN']?>" required>
                            Draw:
							<input class="form-control" placeholder="DRAW" id="draw" name="draw" type="text" value="<?php echo $row['DRAW']?>" required>
                            Loss:
							<input class="form-control" placeholder="LOSS" id="loss" name="loss" type="text" value="<?php echo $row['LOSS']?>" required>
                            Goals:
							<input class="form-control" placeholder="GOALS" id="goals" name="goals" type="text" value="<?php echo $row['GOALS']?>" required>
                            Conceeded:
							<input class="form-control" placeholder="CONCEEDED" id="conceeded" name="conceeded" type="text" value="<?php echo $row['CONCEEDED']?>" required>
                            Clean Sheets:
							<input class="form-control" placeholder="CLEAN SHEETS" id="cleansheets" name="cleansheets" type="text" value="<?php echo $row['CLEANSHEETS']?>" required>
                            Trophies:
							<input class="form-control" placeholder="TROPHIES" id="trophies" name="trophies" type="text" value="<?php echo $row['TROPHIES']?>" required>
                            <br><input class="btn btn-lg btn-success btn-block" type="submit" value="Update" id="update" name="update" >
							
                        </fieldset>
                    </form>
					<?php
					}
						if((isset($_POST['clubid']))){
							$clubid=$_POST['clubid'];
							$played=$_POST['played'];
							$win=$_POST['win'];
							$draw=$_POST['draw'];
							$loss=$_POST['loss'];
							$goals=$_POST['goals'];
							$conceeded=$_POST['conceeded'];
							$cleansheets=$_POST['cleansheets'];
							$trophies=$_POST['trophies'];
							
							$query="UPDATE clubs SET PLAYED=".$played." ,WIN=".$win." ,DRAW=".$draw." ,LOSS=".$loss." ,GOALS=".$goals." ,CONCEEDED=".$conceeded." ,CLEANSHEETS=".$cleansheets." ,TROPHIES=".$trophies." WHERE CLUBID='".$clubid."'";
							if(mysqli_query($mysqli,$query)){
								echo '<script> alert("Entry Updated");';
								echo 'location.replace("clubadmin.php");';
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