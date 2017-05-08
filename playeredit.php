<!doctype html>
<html style="min-width:405px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Edit Player</title>

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
	$query="SELECT * FROM players NATURAL JOIN skills where PID='".$player."'";
	if($Squery=mysqli_query($mysqli,$query)){
		$row=mysqli_fetch_assoc($Squery);
			if(strcmp($row['POS'],'GK'))
			{ $skills=array("Pace","Shoot","Pass","Drift","Defence","Physical");}
			else
			{  $skills=array("Dive","Handling","Kick","Reflexes","Speed","Position");}
  ?>

<div class="container" style="margin-top:15%;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Edit the player details</h3></center>
                </div>
                <div class="panel-body">
				
                    <form role="form" method="post" action="">
                        <fieldset>
                            Player ID:
							<input class="form-control" placeholder="PLAYER ID" id="pid" name="pid" type="text" value="<?php echo $row['PID']?>" required readonly>
							Player Name:
							<input class="form-control" placeholder="NAME" id="name" name="name" type="text" value="<?php echo $row['NAME']?>" required readonly>
                            Date of Birth:
							<input class="form-control" placeholder="DOB (YYYY-MM-DD)" id="dob" name="dob" type="date" value="<?php echo $row['DOB']?>" required readonly>
                            Nationality:
							<input class="form-control" placeholder="NATIONALITY" id="nationality" name="nationality" type="text" value="<?php echo $row['NATIONALITY']?>" required readonly>
                            Club ID:
							<input class="form-control" placeholder="CLUBID" id="clubid" name="clubid" type="text" value="<?php echo $row['CLUBID']?>" required readonly>
                            Height:
							<input class="form-control" placeholder="HEIGHT" id="height" name="height" type="text" value="<?php echo $row['HEIGHT']?>" required readonly>
                            <center>
							<table class="form-table" style="width:100%;">
								<tr>
									<td>T No</td>
									<td>Pos</td>
									<td>Played</td>
									<td>Goals</td>
									<td>Honours</td>
									<td>Rating</td>
								</tr>
								<tr>
									<td><input class="form-control" style="width:50px;" id="tno" name="tno" type="text" value="<?php echo $row['TNO']?>" required readonly></td>
									<td><input class="form-control" style="width:50px;" id="pos" name="pos" type="text" value="<?php echo $row['POS']?>" required readonly></td>
									<td><input class="form-control" style="width:50px;" id="played" name="played" type="text" value="<?php echo $row['PLAYED']?>" required></td>
									<td><input class="form-control" style="width:50px;" id="goals" name="goals" type="text" value="<?php echo $row['GOALS']?>" required></td>
									<td><input class="form-control" style="width:50px;" id="honours" name="honours" type="text" value="<?php echo $row['HONOURS']?>" required></td>
									<td><input class="form-control" style="width:50px;" id="rating" name="rating" type="text" value="<?php echo $row['RATING']?>" required></td>
								</tr>
								<tr><td>&nbsp;</td></tr>
								<tr>
									<td><?php echo $skills[0]?></td>
									<td><?php echo $skills[1]?></td>
									<td><?php echo $skills[2]?></td>
									<td><?php echo $skills[3]?></td>
									<td><?php echo $skills[4]?></td>
									<td><?php echo $skills[5]?></td>
								</tr>
								<tr>
									<td><input class="form-control" style="width:50px;" id="skill1" name="skill1" type="text" value="<?php echo $row['SKILL1']?>" required></td>
									<td><input class="form-control" style="width:50px;" id="skill2" name="skill2" type="text" value="<?php echo $row['SKILL2']?>" required></td>
									<td><input class="form-control" style="width:50px;" id="skill3" name="skill3" type="text" value="<?php echo $row['SKILL3']?>" required></td>
									<td><input class="form-control" style="width:50px;" id="skill4" name="skill4" type="text" value="<?php echo $row['SKILL4']?>" required></td>
									<td><input class="form-control" style="width:50px;" id="skill5" name="skill5" type="text" value="<?php echo $row['SKILL5']?>" required></td>
									<td><input class="form-control" style="width:50px;" id="skill6" name="skill6" type="text" value="<?php echo $row['SKILL6']?>" required></td>
								</tr>
								<tr><td>&nbsp;</td></tr>
								<tr>
									<td></td>
									<td colspan='2'>Weak Foot</td>
									<td colspan='2'>Skill Star</td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td colspan='2'><input class="form-control" style="width:50px;" id="weakfoot" name="weakfoot" type="text" value="<?php echo $row['WEAKFOOT']?>" required></td>
									<td colspan='2'><input class="form-control" style="width:50px;" id="skillstar" name="skillstar" type="text" value="<?php echo $row['SKILLSTAR']?>" required></td>
									<td></td>
								</tr>
							</table>
							</center>
							<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Update" id="update" name="update" >
							
                        </fieldset>
                    </form>
					<?php
					}
						if((isset($_POST['update']))){
							$pid=$_POST['pid'];
							echo $pid;
							$played=$_POST['played'];
							$goals=$_POST['goals'];
							$honours=$_POST['honours'];
							$rating=$_POST['rating'];
							$skill1=$_POST['skill1'];
							$skill2=$_POST['skill2'];
							$skill3=$_POST['skill3'];
							$skill4=$_POST['skill4'];
							$skill5=$_POST['skill5'];
							$skill6=$_POST['skill6'];
							$weakfoot=$_POST['weakfoot'];
							$skillstar=$_POST['skillstar'];
							$query1="UPDATE players SET PLAYED=".$played." ,GOALS=".$goals." ,HONOURS=".$honours." WHERE PID='".$pid."'";
							$query2="UPDATE skills SET RATING=".$rating." ,SKILL1=".$skill1." ,SKILL2=".$skill2." ,SKILL3=".$skill3." ,SKILL4=".$skill4." ,SKILL5=".$skill5." ,SKILL6=".$skill6." ,WEAKFOOT=".$weakfoot." ,SKILLSTAR=".$skillstar." WHERE PID='".$pid."'";
							if(mysqli_query($mysqli,$query1) && mysqli_query($mysqli,$query2)){
								echo '<script> alert("Entry Updated");';
								echo 'location.replace("playeradmin.php?p=A");';
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