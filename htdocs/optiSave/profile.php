<?php
session_start();
if(!isset($_SESSION['user'])){
  $message = "ERROR: not logged in. Redirecting to home page.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header('Refresh: 2; URL = index.html');
  exit;
}
?>
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
  <style>
  nav ul{height:250px; width:100%;}
  nav ul{overflow:hidden; overflow-y:scroll;}
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-32.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
  </style>
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
                <li class="current"><a href="profile.php">View Profile</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</header>
</div>
<!-- Banner -->
<div id="banner-wrapper" style="margin-top: -30px;">
	<div id="banner" class="box container" style="background-image: url(https://images.unsplash.com/photo-1483653085484-eb63c9f02547?auto=format&fit=crop&w=1500&q=60&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D)">
		<div class="row">
      <div class="7u 12u(medium)">
      <h2 style="color:white;">
        <?php
        require_once('./library.php');
        $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

        if (mysqli_connect_errno())
        {
         echo "Failed to connect to MySQL: " . mysqli_connect_error();
         }
          // session_start();
          $session_user = $_SESSION['user'];
          $query1 = "SELECT * FROM registeredUsers WHERE username='$session_user'";
          $result = $con->query($query1);
          $row = mysqli_fetch_array($result);

          // echo $session_user . "<br>";
          // echo $row['username'] . "<br>";
          // echo $row['user_id'] . "<br>";
          echo $row['name'] . "'s Homepage" . "<br>";
          // echo $row['email'] . "<br>";
          //echo $row['address'] . "<br>";
          // echo $row['city'] . "<br>";
          // echo $row['state'] . "<br>";
          // echo $row['zipcode'] . "<br>";
          // echo $row['phone'] . "<br>";
          // echo $row['birthday'] . "<br>";

        ?> </h2>
    </div>
    <div class="5u 12u(medium)">
      <!-- <img src="images/ashley_founder.jpg" alt="" style="width:200px;height:200px;" /> -->
    </div>
		</div>
	</div>
</div>

<!-- Features -->
<div id="features-wrapper">
	<div class="container">
		<div class="row">
      <div class="4u 12u(medium)">
        <section class="box feature">
			       <p> you are currently have __ membership </p>
           </section>
      </div>
		</div>
	</div>
</div>

<!-- Main -->
<div id="banner-wrapper" style="margin-top: -30px;">
	<div class="box container">
		<div class="row">
			<div class="7u 12u(medium)">
				<!-- Content -->
				<div id="content" style="margin-bottom: -50px; margin-top: -5px">
					<h3>
          <?php
          require_once('./library.php');
          $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

          if (mysqli_connect_errno())
          {
           echo "Failed to connect to MySQL: " . mysqli_connect_error();
           }
            //session_start();
            $session_user = $_SESSION['user'];
            $query1 = "SELECT * FROM registeredUsers WHERE username='$session_user'";
            $result = $con->query($query1);
            $row = mysqli_fetch_array($result);

            echo "<strong> Username: </strong>" . $row['username'] . "<br>";
            echo "<br>";
            echo "<strong> Email: </strong>" . $row['email'] . "<br>";
            echo "<br>";
            echo "<strong> Address: </strong>" . $row['address'] . "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" .
            $row['city'] . ", " . $row['state'] . " " . $row['zipcode'] . "<br>";
            echo "<br>";
            echo "<strong> Phone: </strong>" . $row['phone'] . "<br>";
            echo "<br>";
            echo "<strong> Birthday: </strong>" . $row['birthday'] . "<br>";
            echo "<br><button class=btn btn-primary> Edit Info </button>";
            echo "<br>";

          ?>    <br></h3>
				</div>
			</div>
      <h2> Your Coupons </h2>
      <div class="5u 12u(medium)" style="border:3px solid gray;">
        <nav>
            <ul>
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
                <li>Link 4</li>
                <li>Link 5</li>
                <li>Link 6</li>
                <li>Link 7</li>
                <li>Link 8</li>
                <li>Link 9</li>
                <li>Link 10</li>
                <li>Link 11</li>
                <li>Link 13</li>
                <li>Link 13</li>
            </ul>
        </nav>
      </div>
		</div>
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
					<a href="#" class="image featured"><img src="images/personalized.jpg" alt="" /></a>
					<div class="inner">
						<header>
							<h2>New Business 1</h2>
							<p>blah</p>
						</header>
						<p>suggestions</p>
					</div>
				</section>

			</div>
			<div class="4u 12u(medium)">
				<!-- Box -->
				<section class="box feature">
					<a href="#" class="image featured"><img src="images/notification.jpg" alt="" /></a>
          <div class="inner">
						<header>
							<h2>New Business 2</h2>
							<p>blah</p>
						</header>
						<p>suggestions</p>
					</div>
				</section>

			</div>
			<div class="4u 12u(medium)">

				<!-- Box -->
				<section class="box feature">
					<a href="#" class="image featured"><img src="images/why.jpg" alt="" /></a>
          <div class="inner">
						<header>
							<h2>New Business 3</h2>
							<p>blah</p>
						</header>
						<p>suggestions</p>
					</div>
				</section>

			</div>
		</div>
	</div>
</div>

<!-- Search Bar -->
<div id="main-wrapper">
  <div class="container">
    <h2> Search for Coupons </h2>
  	<div class="row">
        <input type="text" name="search" placeholder=" Search">
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
