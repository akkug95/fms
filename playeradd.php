<!doctype html>
<html style="min-width:405px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Add Player</title>

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
                    <center><h3 class="panel-title">Add New Player</h3></center>
                </div>
                <div class="panel-body">
				
                    <form role="form" method="post" action="">
                        <fieldset>
							Player Name:
							<input class="form-control" placeholder="NAME" id="name" name="name" type="text" required>
                            Date of Birth:
							<input class="form-control" placeholder="DOB (YYYY-MM-DD)" id="dob" name="dob" type="date" required >
                            Nationality:
							<input class="form-control" placeholder="NATIONALITY" id="nationality" name="nationality" type="text" required >
                            Club:
							<select class="form-control" id="club" name="club" type="text" required>
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
                            Height:
							<input class="form-control" placeholder="HEIGHT" id="height" name="height" type="text" required>
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
									<td><input class="form-control" style="width:50px;" id="tno" name="tno" type="text" required ></td>
									<td><input class="form-control" style="width:50px;" id="pos" name="pos" type="text" required></td>
									<td><input class="form-control" style="width:50px;" id="played" name="played" type="text" required></td>
									<td><input class="form-control" style="width:50px;" id="goals" name="goals" type="text" required></td>
									<td><input class="form-control" style="width:50px;" id="honours" name="honours" type="text" required></td>
									<td><input class="form-control" style="width:50px;" id="rating" name="rating" type="text" required></td>
								</tr>
								<tr><td>&nbsp;</td></tr>
								<tr>
									<td>Skill 1</td>
									<td>Skill 2</td>
									<td>Skill 3</td>
									<td>Skill 4</td>
									<td>Skill 5</td>
									<td>Skill 6</td>
								</tr>
								<tr>
									<td><input class="form-control" style="width:50px;" id="skill1" name="skill1" type="text" required></td>
									<td><input class="form-control" style="width:50px;" id="skill2" name="skill2" type="text" required></td>
									<td><input class="form-control" style="width:50px;" id="skill3" name="skill3" type="text" required></td>
									<td><input class="form-control" style="width:50px;" id="skill4" name="skill4" type="text" required></td>
									<td><input class="form-control" style="width:50px;" id="skill5" name="skill5" type="text" required></td>
									<td><input class="form-control" style="width:50px;" id="skill6" name="skill6" type="text" required></td>
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
									<td colspan='2'><input class="form-control" style="width:50px;" id="weakfoot" name="weakfoot" type="text" required></td>
									<td colspan='2'><input class="form-control" style="width:50px;" id="skillstar" name="skillstar" type="text" required></td>
									<td></td>
								</tr>
							</table>
							</center>
							<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Add" id="add" name="add" >
                        </fieldset>
                    </form>
					<?php
						if((isset($_POST['name']))){
							$name=$_POST['name'];
							$dob=date("Y-m-d", strtotime($_POST['dob']));
							$nationality=$_POST['nationality'];
							$club=$_POST['club'];
							$height=$_POST['height'];
							$tno=$_POST['tno'];
							$pos=$_POST['pos'];
							$pid=$club."0".$tno;
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
							$query1='INSERT INTO players VALUES ("'.$pid.'","'.$name.'","'.$dob.'",'.$height.',"'.$nationality.'","'.$pos.'",'.$tno.',"'.$club.'",'.$played.','.$goals.','.$honours.',0,0)';
							$query2='INSERT INTO skills VALUES ("'.$pid.'",'.$rating.','.$skill1.','.$skill2.','.$skill3.','.$skill4.','.$skill5.','.$skill6.','.$weakfoot.','.$skillstar.')';
							$query3='INSERT INTO users VALUES("'.$pid.'","","Player","'.$dob.'",0)';
							if(mysqli_query($mysqli,$query1) && mysqli_query($mysqli,$query2) && mysqli_query($mysqli,$query3)){
								echo '<script> alert("Entry Added");';
								echo 'location.replace("playeradmin.php?p=A");';
								echo '</script>';
							}
						}else{
							echo 'query fail';
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