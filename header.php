<?php

	if (!@($mysqli = new mysqli("localhost", "root", "", "fms"))||$mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
	session_start();
}

?>
  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->                                                        
          <!--  Image based logo  -->
          <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="Logo img"></a> 
           <!--  Text based logo  -->
<!--           <a class="navbar-brand" href="index.html"><span>SpicyX</span></a>   -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="fixtures.php">FIXTURES</a></li>                       
            <li><a href="result.php">RESULTS</a></li>    
			<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">CLUBS<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              <?php         
                $query="SELECT CLUBID,NAME FROM clubs";
                if($Squery=mysqli_query($mysqli,$query)){
                   $i=mysqli_num_rows($Squery);
                    while($row=mysqli_fetch_assoc($Squery))
                    {	if($i<=0)
                        break;
                        echo '<li><a href="club.php?club='.$row['CLUBID'].'">'.$row['NAME'].'</a></li>';
                    }
                }       
              ?>                                           
              </ul>
            </li>             
            <li><a href="playerlist.php?p=A">PLAYERS</a></li>
            <li><a href="managerlist.php">MANAGERS</a></li>
			<li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">SEASONS<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
				<li><a href="season.php?season=2014">2014 - 2015</a></li>; 
				<li><a href="season.php?season=2015">2015 - 2016</a></li>; 
				<li><a href="season.php?season=2016">2016 - 2017</a></li>; 
              </ul>
            </li>
			<li><a href="blog.php">CHAT ROOM</a></li>
			<?php
				if(!isset($_SESSION['name'])){
			?>
				<li><a href="login.php">LOGIN</a></li>
			<?php
				}
				else{
			?>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href='#'><?php echo $_SESSION['name'] ?>
					 <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<?php
							if($_SESSION['category']=='Admin')
								echo '<li><a href="admin.php">MY PAGE</a></li>';
							if($_SESSION['category']=='Manager')
								echo '<li><a href="managerlogin.php?manager='.$_SESSION['id'].'">MY PAGE</a></li>';
							if($_SESSION['category']=='Player')
								echo '<li><a href="playerlogin.php?player='.$_SESSION['id'].'">MY PAGE</a></li>';
						?>
						<li><a onclick="signout()">SIGN OUT</a></li>
						<script>
							function signout() {
								var r = confirm("Sign Out?");
								if (r == true) {
									location.replace("signout.php");
								} 
								return true;
							}
						  </script>
					</ul>
				</li>;
			<?php
				}
				
			?>
            
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
 <!-- End header section -->