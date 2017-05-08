<!doctype html>
<html style="min-width:405px;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>FMS | Player Search</title>

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
<div class="container" style="margin-top:6%;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <center><h3 class="panel-title">CUSTOM SEARCH</h3></center>
                </div>
                <div class="panel-body">
				
                    <form role="form" method="post" action="">
                        <fieldset>
							VIEW BY POSITION:
							<select class="form-control" id="pos" name="pos" type="text" required>
								<option value='none' selected style="display:none">POSITION</option>
								<option value="FORWARD">FORWARD</option>
								<option value="MIDFIELD">MIDFIELD</option>
								<option value="DEFENCE">DEFENCE</option>
								<option value="GOALKEEPER">GOALKEEPER</option>								
							</select>
							SORT BY RATING:
							<select class="form-control" id="rating" name="rating" type="text" required>
								<option value='none' selected style="display:none">RATING</option>
								<option value="85">85 and above</option>
								<option value="80">80 and above</option>
								<option value="75">75 and above</option>
								<option value="0">Below 75</option>								
							</select>
                            
							<br><input class="btn btn-lg btn-success btn-block" type="submit" value="Submit" id="submit" name="submit" >
                        </fieldset>
                    </form>
					<?php
						$pos=$_GET['pos'];
						$rating=$_GET['rating'];
						if((isset($_POST['submit']))){
							$pos=$_POST['pos'];
							$rating=$_POST['rating'];
							echo '<script>';
							echo 'location.replace("playersearch.php?pos='.$pos.'&rating='.$rating.'");';
							echo '</script>';
						}else{
							//echo 'query fail';
						}
							
							if($pos=='FORWARD'){ $temp=" POS IN ('LW','ST','CF','RW') AND"; }
							if($pos=='MIDFIELD'){ $temp=" POS IN ('LM','CM','CDM','CAM','RM') AND"; }
							if($pos=='DEFENCE'){ $temp=" POS IN ('LB','CB','RB') AND"; }
							if($pos=='GOALKEEPER'){ $temp=" POS = 'GK' AND"; }
							if($rating=='85'){$condition = $temp." RATING >=85";}
							if($rating=='80'){$condition = $temp." RATING >=80";}
							if($rating=='75'){$condition = $temp." RATING >= 75";}
							if($rating=='0'){$condition = $temp." RATING < 75";}
							
							$query1='CREATE VIEW playerview AS SELECT NAME, DOB, NATIONALITY, POS, CLUBID, RATING FROM players NATURAL JOIN skills';
							?>
							
		</div>
            </div>
        </div>
    </div>
							<div class="home-table" id="home-result">                      
							<table id="results-table" style="width:100%;">
						<?php 
									$query="SELECT * FROM playerview Where ".$condition." ORDER BY RATING DESC"; 
									if($Squery=mysqli_query($mysqli,$query)){
										$i=mysqli_num_rows($Squery);
										$j=1; 
										if($i==0){
											echo '<tr colspan=6>No Player found.</tr>';
										}  
							else{
						  ?>
						  <tr>
							<th>Name</th> 
							<th>Age</th>
							<th>Nationality</th>
							<th>Club Name</td> 
							<th></th>
							<th>Position</th>
							<th>Rating</th>
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
										echo '<td>'.$row['NAME'].'</td>';	
										echo '<td> '.(date("Y-m-d")-$row['DOB']).'</td>';	
										echo '<td> '.$row['NATIONALITY'].'</td>';	
										$query2="SELECT NAME FROM clubs where CLUBID='".$row['CLUBID']."'";
										$Squery2=mysqli_query($mysqli,$query2);
										$row2=mysqli_fetch_assoc($Squery2);  
										echo '<td><a href="club.php?club='.$row["CLUBID"].'">'.$row2['NAME'].'</a></td>'; 
										echo '<td><img class="small-logo" src="assets/img/clubs/'.$row["CLUBID"].'.png" alt="fail"></td>';	
										echo '<td> '.$row['POS'].'</td>';	
										echo '<td> '.$row['RATING'].'</td>';
							
								?>
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