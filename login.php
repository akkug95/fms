<!doctype html>
<html style="min-width:405px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Login</title>

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
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign In</h3>
                </div>
                <div class="panel-body">
				
                    <form role="form" method="post" action="">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Username" id="name" name="username" type="text" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" id="pass" name="password" type="password" value="" required>
                            </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" id="login" name="login" >
								 <center><b>Not registered yet?</b> <br></b><a href="signup.php"><u>Sign Up here</u></a></center>
                        </fieldset>
                    </form>
					<?php
						if(isset($_SESSION['name'])){
							echo '<script> location.replace("index.php"); </script>';
						}
						if((isset($_POST['username']))&&(isset($_POST['password']))){
						$username= $_POST['username'];
						$password= md5($_POST['password']);
						
						$query="SELECT * FROM users WHERE USERNAME='".$username."'";
						if($result= mysqli_query($mysqli,$query)){
							if(mysqli_num_rows($result)>0){
								$row= mysqli_fetch_assoc($result);
								if($row['PASSWORD']==null){
									?> <script>alert("Please Signup");</script><?php
								}else{				
									if($password==$row['PASSWORD'] && $row['STATUS']==1){
																		
										$category = $row['CATEGORY'];
										
										if($category=="Manager"){
											$query2= "SELECT NAME FROM managers WHERE MGRID='".$username."'";
											if($result2 = mysqli_query($mysqli,$query2)){
												$row2 = mysqli_fetch_assoc($result2);
												$_SESSION['name']=$row2['NAME'];
												$_SESSION['id']=$username;
												$query3="UPDATE users SET logged=1 WHERE USERNAME='".$username."'";
												mysqli_query($mysqli,$query3);
											}
										}
										if($category=="Player"){
											$query2= "SELECT NAME FROM players WHERE PID='".$username."'";
											if($result2 = mysqli_query($mysqli,$query2)){
												//echo 'success';
												$row2 = mysqli_fetch_assoc($result2);
												$_SESSION['name']=$row2['NAME'];
												$_SESSION['id']=$username;
												$query3="UPDATE users SET logged=1 WHERE USERNAME='".$username."'";
												mysqli_query($mysqli,$query3);
											}
										}
										if($category=="Admin"){
											$_SESSION['name']="ADMIN";
											$query3="UPDATE users SET logged=1 WHERE USERNAME='".$username."'";
											mysqli_query($mysqli,$query3);
										}
										$_SESSION['username']=$username;
										$_SESSION['category']=$category;
										
										echo '<script> location.replace("index.php"); </script>';
									}
									
									else{echo 'Wrong Password';}
								}
							}else{
								echo 'Invalid user';
							}
							
							
						}else{//echo 'query fail';
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