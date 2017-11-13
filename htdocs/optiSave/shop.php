<!DOCTYPE HTML>
<?php
session_start();
if(!isset($_SESSION['user'])){
  $message = "ERROR: not logged in. Redirecting to home page.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header('Refresh: 2; URL = index.html');
  exit;
}
?>
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
<body class="homepage">
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
	<div id="banner" class="box container" style="background-image: url(https://images.unsplash.com/photo-1453614512568-c4024d13c247?w=2689)">
		<div class="row">
			<h2 style="color:white;"> Shop subcriptions below </h2>
		</div>
	</div>
</div>

<!-- Features -->
<div id="features-wrapper">
	<div class="container">
		<div class="row">
			<div class="4u 12u(medium)">

				<!-- Box -->
				<section class="box feature">
					<!-- <a href="#" class="image featured"><img src="images/personalized.jpg" alt="" /></a> -->
					<div class="inner" style="background-image: url(https://i.pinimg.com/736x/87/ce/af/87ceaf4af8f647d88bd606fa47a4cbcd--hallway-paint-colors-neutral-paint-colors.jpg)">
						<header>
							<h2 style="color:white;">Basic Membership</h2>
							<p style="color:white;">Monthly coupons</p>
							<p style="color:white;"> 0.00078 BTC/month </p>
						</header>
						<p style="color:white;">Customized coupons will be sent to you on a <b>monthly basis</b>, these coupons are
            suited to the business you frequent to often.</p>
            <!-- Bit pay -->
            <br>
            <form action="https://test.bitpay.com/checkout" method="post" >
              <input type="hidden" name="action" value="checkout" />
              <input type="hidden" name="posData" value="" />
              <input type="hidden" name="data" value="BnmpqZPilxSU1AhU/aAFjbO1ZoddAp0P5zqAG2rMY9lS8Qdbz1mOQASMz5kV+AE69xBVmLkzQ/Y9iJuZBxO68J/NcJwzZL9gjbh1UaeEe3M2c8bfOyyrqKDsh+qJFke8xfIGv+F/2GP38c2IYJJnWXFi/k3nM/vofeydMCo8OcYJs0ZfCyqFE7GrffRpPzIY" />
              <input type="image" src="https://test.bitpay.com/img/button-medium.png" style="margin-left:50px;" border="1" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
            </form>
            <!-- Bit pay -->
            <center><a class="icon fa-plus-circle" style="color:white; border:3px solid white; padding:5px; margin-left:-10px;" href="addBasic.php"> Add to profile </a> </center>
					</div>
				</section>

			</div>
			<div class="4u 12u(medium)">

				<!-- Box -->
				<section class="box feature">
					<div class="inner" style="background-image: url(https://i.pinimg.com/236x/19/f4/ae/19f4ae60fd6e7197e7b05f60a0ffc0f8--blue-paint-colors-kitchen-paint-colors.jpg)">
						<header>
							<h2 style="color:white;">Premium Membership</h2>
							<p style="color:white;">Weekly Coupons</p>
							<p style="color:white;"> 0.00125 BTC/month </p>
						</header>
						<p style="color:white;">Personalized coupons sent <b>each week</b> via email, mobile app or website.
            Eligible to participate in rewards program.</p>
            <!-- Bit pay -->
            <br>
            <form action="https://test.bitpay.com/checkout" method="post" >
              <input type="hidden" name="action" value="checkout" />
              <input type="hidden" name="posData" value="" />
              <input type="hidden" name="data" value="BnmpqZPilxSU1AhU/aAFjbO1ZoddAp0P5zqAG2rMY9lS8Qdbz1mOQASMz5kV+AE69xBVmLkzQ/Y9iJuZBxO68J/NcJwzZL9gjbh1UaeEe3M2c8bfOyyrqKDsh+qJFke8xfIGv+F/2GP38c2IYJJnWXFi/k3nM/vofeydMCo8OcYJs0ZfCyqFE7GrffRpPzIY" />
              <input type="image" src="https://test.bitpay.com/img/button-medium.png" style="margin-left:50px;" border="1" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
            </form>
            <!-- Bit pay -->
            <center><a class="icon fa-plus-circle" style="color:white; border:3px solid white; padding:5px; margin-left:-10px;" href="addPremium.php"> Add to profile </a> </center>
          </div>
				</section>
				<p><b>Want to figure out how much your subscription really costs? Try our BTC to USD converter!</b></p>
	<script src="https://mining-profit.com/js/simple-converter.js"></script>
	<script type="text/javascript">
    		MiningProfitConverter.draw();
	</script>
			</div>
			<div class="4u 12u(medium)">

				<!-- Box -->
				<section class="box feature">
					<div class="inner" style="background-image: url(https://i.pinimg.com/originals/af/4f/f6/af4ff6302647186761f30ce8b92afa31.jpg)">
						<header>
							<h2>Gold Membership</h2>
							<p>Daily Coupons</p>
							<p> 0.0187 BTC/month </p>
						</header>
						<p>Coupons will be sent <b>each day</b> at a time you prefer, so that you can save at the businesses you frequent.
            Eligible for rewards program.</p>
            <!-- Bit pay -->
            <br>
            <form action="https://test.bitpay.com/checkout" method="post" >
              <input type="hidden" name="action" value="checkout" />
              <input type="hidden" name="posData" value="" />
              <input type="hidden" name="data" value="BnmpqZPilxSU1AhU/aAFjbO1ZoddAp0P5zqAG2rMY9lS8Qdbz1mOQASMz5kV+AE69xBVmLkzQ/Y9iJuZBxO68J/NcJwzZL9gjbh1UaeEe3M2c8bfOyyrqKDsh+qJFke8xfIGv+F/2GP38c2IYJJnWXFi/k3nM/vofeydMCo8OcYJs0ZfCyqFE7GrffRpPzIY" />
              <input type="image" src="https://test.bitpay.com/img/button-medium.png" style="margin-left:50px;" border="1" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
            </form>
            <!-- Bit pay -->
            <center><a class="icon fa-plus-circle" style="color:white; border:3px solid white; padding:5px; margin-left:-10px;" href="addGold.php"> Add to profile </a> </center>
					</div>
				</section>

			</div>
		</div>
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
						<li><a href="mailto:apn2my@virginia.edu,ntg9vz@virginia.edu,jb3bt@virginia.edu" class="icon fa-envelope-o" ><span class="label"></span></a></li>
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
