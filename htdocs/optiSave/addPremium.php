<!DOCTYPE HTML>
<!--
Verti by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>optiSave</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!-- Favicon-->
	<link rel="shortcut icon" href="images/pic08.jpg"/>
</head>
<body class="right-sidebar">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			<header id="header" class="container" style="margin-top: -50px;">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="index.html">opti$ave</a></h1>
					<div>
						<span><i>Save money and study rich.</i></span>
						<div>
						</div>


						<!-- Nav -->
						<nav id="nav" >
							<ul>
								<!-- <li><a href="index.html">Home</a></li>
								<li><a href="about-us.html">About Us</a></li> -->
								<!-- <li><a href="register.html">Register</a></li> -->
								<li><a href="profile.php">View Profile</a></li>
								<li class="current"><a href="shop.php">Shop </a></li>
								<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>

	</header>
</div>

<!-- Banner -->
<div id="banner-wrapper" style="margin-top: -30px;">
	<div id="banner" class="box container">
		<div class="row">
				<center><h2 style="font-size: 35px" >
        <?php
          session_start();
           include_once("./library.php"); // To connect to the database
           $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
           // Check connection
           if (mysqli_connect_errno())
           {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            //Get username
            $session_user = $_SESSION['user'];
            $query1 = "SELECT * FROM registeredUsers WHERE username='$session_user'";
            $result = $con->query($query1);
            $row = mysqli_fetch_array($result);
            //Get user id
            $user_id = $row['user_id'];
            $membership = "Premium";

            //Check if user already has a membership
            $query2=mysqli_query($con, "SELECT * FROM userMembership WHERE username='$session_user'");
 						if(mysqli_num_rows($query2)>=1)
   					{
    	         echo "<h2>You already have an assigned membership.</h2><br>";
               echo "<i style='font-size:32px; margin-bottom:20px;'>Click below change your membership status.</i><br>";
               echo "<br>";
               echo "<a href='editmembership.php' class='button icon fa-backward'>Update</a>";
   					}
            else{
              $sql="INSERT INTO userMembership (user_id, username, membership_type)
                VALUES  ('$user_id', '$session_user', '$membership')";
              $result1 = $con->query($sql);
              echo "<div style='margin-left:80px;'";
              echo "<h2>You have signed up for</h2>";
              echo "<h2 style='color:DarkCyan; margin-left:120px;'>Premium Membership!</h2>";
              echo "<br>";
              echo "<a style='margin-left:50px;' href='profile.php' class='button icon fa-arrow-circle-right'>View profile</a>";
              echo "</div>";
              // echo "<div style='background-image: url(https://i.pinimg.com/originals/af/4f/f6/af4ff6302647186761f30ce8b92afa31.jpg)'>";
              }
              mysqli_close($con);
          ?>
        </h2></center>
			<!-- </div> -->
		</div>
	</div>
</div>

<!-- Footer -->
<div id="footer-wrapper" style="margin-top: -45px; margin-bottom: -20px">
	<footer id="footer" class="container">
		<h2 class="ctr">Contact Us</h2>
		<div class="row" style="margin-right: -200px">
			<div class="3u 6u(medium) 12u$(small)" style="margin-left: 80px; margin-right: -80px">
				<!-- Links -->
				<section class="widget contact">
					<h3>Email</h3>
					<ul>
						<li><a href="mailto:apn2my@virginia.edu,jb3bt@virginia.edu" class="icon fa-envelope-o" ><span class="label"></span></a></li>
					</ul>
				</section>
			</div>

			<div class="3u 6u$(medium) 12u$(small)" style="margin-right: -80px">
				<!-- Links -->
				<section class="widget contact">
					<h3>GitHub</h3>
						<ul>
							<li><a href="http://github.com/apn2my" class="icon fa-github" ><span class="label"></span></a></li>
						</ul>
				</section>

			</div>

			<div class="3u 6u(medium) 12u$(small)" style="margin-right: -80px">
				<!-- Links -->
				<section class="widget contact">
					<h3>University</h3>
						<ul>
							<li><a href="http://virginia.edu" class="icon fa-graduation-cap" ><span class="label"></span></a></li>
						</ul>
				</section>
			</div>

			<div class="3u 6u$(medium) 12u$(small)">
				<!-- Contact -->
				<section class="widget contact last">
					<h3>Address</h3>
					<p>85 Engineer's Way, Rice Hall<br />
						University of Virginia<br/>
						Charlottesville, VA 22903</p>
					</section>
				</div>
			</div>
			<div class="row" style="margin-bottom: -200px;">
				<div class="12u" style="margin-top: -80px;">
					<div id="copyright">
						<ul class="menu">
							<li>&copy; CS4753 Fall 2017. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>

</div>

<!-- Scripts -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>
