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
  nav ul{height:300px; width:100%;}
  nav ul{overflow:hidden; overflow-y:scroll;}
  input[type=textsearch] {
    width: 1000px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-32.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: height 0.0s ease-in-out;
    transition: width 0.0s ease-in-out;
}

input[type=textsearch]:focus {
    width: 100%;
}
.wrapper{
    width: 1000px;
    overflow-x: scroll;
    white-space: nowrap;
}

.slide{
    /*background: #ccc;*/
    height: 200px;
    display: inline-block;
    width: 200px;
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
          echo $row['name'] . "'s Homepage" . "<br>";
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
      <div class="7u 12u(medium)">
        <section class="box feature">
               <?php
               require_once('./library.php');
               $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
               if (mysqli_connect_errno())
               {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                 $session_user = $_SESSION['user'];
                 $query1 = "SELECT * FROM userMembership WHERE username='$session_user'";
                 $result = $con->query($query1);
                 $row = mysqli_fetch_array($result);
                 if($row['membership_type']==null){
                   echo "<strong style='font-size:20px; margin:25px;'>You currently do not have a membership! </strong>";
                   echo "<br>";
                   echo "<a style='font-size:18px; margin:25px;' class='icon fa-arrow-circle-o-left' href='shop.php'> Select Membership </a>";
                 }
                 else{
                   echo "<strong style='font-size:22px; margin:25px;'> Membership Status: </strong><em style='font-size:20px; color:DeepPink;'>" . $row['membership_type'] . "</em>";
                   echo "<a style='font-size:18px; margin:25px;' class='icon fa-arrow-circle-o-right' href='editmembership.php'> Time to Upgrade? </a>";
                  //  if($row['membership_type'] == "Basic"){
                  //    echo "<center><h2 style='color:DimGrey;margin-bottom:50px;'>" . $row['membership_type'] . "</h2></center>";
                  //  }
                  //  elseif($row['membership_type'] == "Premium"){
                  //    echo "<center><h1 style='color:DarkCyan;'>" . $row['membership_type'] . "</h1></center>";
                  //  }
                  //  elseif($row['membership_type'] == "Gold"){
                  //    echo "<h2 style='color:GoldenRod'>" . $row['membership_type'] . "</h2>";
                  //  }

                 }

               ?>
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
            echo "<br><button type='submit' class='btn btn-primary'><a href='editprofile.php'> Edit Info </a></button>";
            echo "<br>";

          ?>    <br></h3>
				</div>
			</div>
      <h2> Your Coupons </h2>
      <div class="5u 12u(medium)" style="border:3px solid gray;">
        <nav>
            <ul>
                <li><a href='https://www.retailmenot.com/' class='icon fa-hourglass-half'> Free Appetizer at Applebee's</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-hourglass-2'> Buy One Tide Detergent, Get One Free</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> $0.80 off for two Spaghetti-O's cans</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> $1.00 for any Scotch Tape Product</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> Free Personal Pan Pizza at Pizza Hut</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> Buy One 24oz Tropical Smoothie, Get One Half Off</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> 20% off any Yoplait product</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> Buy two Lunchables, Get One Free</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> $0.50 off any Purdue product</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> 15% off Capri-Sun products</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> $3.50 off when you purchase Gillette Shaving Cream and Gillette razor</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> Free Dunkin Donuts Coffee Pack</a></li>
                <li><a href='https://www.retailmenot.com/' class='icon fa-chevron-circle-right'> 25% off any Silk Soymilk Product</a></li>
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
    <h2> You may also like... </h2>
		<div class="row">
			<div class="4u 12u(medium)">
        <div class="wrapper">
          <div id="slider4" class="text-center">
            <div class="slide">
              <a href="https://kroger.softcoin.com/programs/kroger/digital_coupons/?origin=DigitalCoupons&banner=Kroger">
              <img src="images/cereal.jpg"> </a>
                <p style="font-weight: bold;">$1.00 off any <br> Big G Cereal</p>
            </div>
          <div class="slide">
            <a href="https://kroger.softcoin.com/programs/kroger/digital_coupons/?origin=DigitalCoupons&banner=Kroger">
            <img src="images/cinna.jpg"> </a>
              <p style="font-weight: bold;">Buy one get one free <br> any Pillsbury</p>
          </div>
          <div class="slide">
            <a href="https://kroger.softcoin.com/programs/kroger/digital_coupons/?origin=DigitalCoupons&banner=Kroger">
            <img src="images/gogurt.jpg"> </a>
              <p style="font-weight: bold;">$1.00 off any <br> two Yoplait products</p>
         </div>
         <div class="slide">
           <a href="https://kroger.softcoin.com/programs/kroger/digital_coupons/?origin=DigitalCoupons&banner=Kroger">
           <img src="images/fiberone.jpg"> </a>
             <p style="font-weight: bold;">$0.25 off any <br> Fiber One Granola</p>
        </div>
        <div class="slide">
          <a href="https://kroger.softcoin.com/programs/kroger/digital_coupons/?origin=DigitalCoupons&banner=Kroger">
          <img src="images/soup.jpg"> </a>
            <p style="font-weight: bold;">2 Progresso Soups <br> cans for 1</p>
        </div>
          <div class="slide">
            <a href="https://kroger.softcoin.com/programs/kroger/digital_coupons/?origin=DigitalCoupons&banner=Kroger">
            <img src="images/bounty.jpg"> </a>
              <p style="font-weight: bold;">$0.80 off <br> Bounty Products</p>
          </div>
          <div class="slide">
            <a href="https://kroger.softcoin.com/programs/kroger/digital_coupons/?origin=DigitalCoupons&banner=Kroger">
            <img src="images/hamhelp.jpg"> </a>
              <p style="font-weight: bold;">$2.00 for any two <br> Hamburger Helper </p>
          </div>
           <div class="slide">
             <a href="https://kroger.softcoin.com/programs/kroger/digital_coupons/?origin=DigitalCoupons&banner=Kroger">
             <img src="images/pep.jpg"> </a>
               <p style="font-weight: bold;">$0.50 off <br> Hormer Pepperoni products </p>
          </div>
    </div>
</div>
			</div>
		</div>
	</div>
</div>

<!-- Search Bar -->
<!-- <div id="banner-wrapper">
  <div class="box container" style="margin-bottom:-40px;">
    <center><h2 style='color:DimGray;'> Search for Coupons </h2></center>
  </div>
</div>

<div id="main-wrapper" style="background-image: url(https://shopify-ecommerce-university.s3.amazonaws.com/production/legacy/guides/50-ways/header-images/couponcodes.jpg)">
  <div class="container" >
  	<div class="row" >
        <input type="textsearch" name="search" placeholder=" Search">
  	</div>
  </div>
</div> -->

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
