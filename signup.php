<!doctype html>
<html style="min-width:405px;">
<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Signup</title>

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
<body >
<?php include 'header.php'; ?>
<div class="container" style="margin-top:10%;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Registration</h3>
                </div>
                <div class="panel-body">
                    <form role="form" id="registration" name="registration" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Username" id='name' name="username" required>
                            </div>
							<div class="form-group">
                                <input class="form-control" type="date" placeholder="DOB (YYYY-MM-DD)" id='DOB' name="DOB" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Password" id='password' name="password" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Confirm password" id='confirm_password' name="confirm_password"  value="" required>
                            </div>
								<button class="btn btn-lg btn-success btn-block" id='register' name="register" onclick="reg();">Register</button>
                        </fieldset>
                    </form>
					<div id="status"></div>
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center>
					<?php
					
						if((!empty($_POST['username'])) && (!empty($_POST['DOB']))){
							$username= $_POST['username'];
							$dob = $_POST['DOB'];
							
								//Validates password & confirm passwords.
								if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["confirm_password"])) {
								$password = $_POST["password"];
								$confirm_password = $_POST["confirm_password"];
								if (strlen($_POST["password"]) < 8) {
									$passwordErr = "Your Password Must Contain At Least 8 Characters!";
									echo $passwordErr;
								}
								elseif(!preg_match("#[0-9]+#",$password)) {
									$passwordErr = "Your Password Must Contain At Least 1 Number!";
									echo $passwordErr;
								}
								elseif(!preg_match("#[A-Z]+#",$password)) {
									$passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
									echo $passwordErr;
								}
								elseif(!preg_match("#[a-z]+#",$password)) {
									$passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
									echo $passwordErr;
								}else{
									$query = "SELECT * FROM users WHERE USERNAME='".$username."'";
									if($result = mysqli_query($mysqli,$query)){
										$i=mysqli_num_rows($result);
										$row = mysqli_fetch_assoc($result);
										if($row['DOB']==$dob){
											if($row['STATUS']==0){
												$new_password = md5($password);
											}
											$query2 = "UPDATE users SET PASSWORD='".$new_password."',STATUS=1 WHERE USERNAME='".$username."'";
											if($result2 = mysqli_query($mysqli,$query2)){
												echo '<script> location.replace("login.php"); </script>';
											}
										}else{
											echo 'Incorrect username or dob';
										}
									
									}
									
								}
							
							}else{
								echo "Please Check You've Entered Or Confirmed Your Password!";
							}
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
