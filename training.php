<!doctype html>
<html style="min-width:405px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Training</title>

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
  <section>
	<div class="container" style="padding-top:10%;"> 
	<div class="home-table" id="home-result">    
		<h2>Present Training Sessions</h2>
			<table id="results-table" style="width:100%;">
  <?php
	$club=$_GET['club'];
	$query="SELECT * FROM training where CLUB='".$club."' AND DATE >= CURDATE()";
	if($Squery=mysqli_query($mysqli,$query)){
		$i=mysqli_num_rows($Squery);
		$j=1; 
		if($i==0){
			echo '<tr colspan=6>No Training Session for '.$club.' found.</tr>';
		}  
		else{
  ?>
		  <tr>
            <th>Date</th> 
            <th>Time</th>
          </tr>
          <?php
						while($row=mysqli_fetch_assoc($Squery))
						{	
							if($i<=0)
								break;	
				?>
        <tr>
		<?php
					$date=date_create($row['DATE']);
					echo '<td>'.date_format($date,"D, d F Y").'</td>';	
					echo '<td>'.$row['TIME'].'</td>';
		?>
		</tr> 
        <?php
							$i--;
							$j++;
						}
					}
					}
				else{
						echo 'No training Session organised';
					}
				?> 
			</table> 
			</div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <center><h3 class="panel-title">Training Session</h3></center>
                </div>
                <div class="panel-body">
				
                    <form role="form" method="post" action="">
                        <fieldset>
                            CLUB:
							<input class="form-control" placeholder="CLUB" id="club" name="club" type="text" value="<?php echo $club?>" required readonly>
							DATE:
							<input class="form-control" placeholder="DATE" id="date" name="date" type="date" required>
                            TIME:
							<input class="form-control" placeholder="TIME" id="time" name="time" type="time" required>
                            <br><input class="btn btn-lg btn-success btn-block" type="submit" value="Set Session" id="train" name="train" >
                        </fieldset>
                    </form>
					<?php
						if((isset($_POST['train']))){
							$club=$_POST['club'];
							$date=$_POST['date'];
							$time=$_POST['time'];
							$query1="INSERT INTO training VALUES ('".$club."','".$date."','".$time."')";
							if(mysqli_query($mysqli,$query1)){
								echo '<script> alert("Training Session Set");';
								echo 'location.replace("managerlogin.php?manager='.$_SESSION['id'].'");';
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
</section>

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