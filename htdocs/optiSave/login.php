<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!--
Verti by HTML5 UP
html5up.net | @ajlkn
Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php session_start(); ?>
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
<body class="no-sidebar">
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
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="about-us.html">About Us</a></li>
								<li><a href="register.html">Register</a></li>
								<li class="current"><a href="login.php">Login</a></li>
							</ul>
		</nav>

	</header>
</div>

<!-- Main -->
<div id="main-wrapper" style="margin-top: -30px;">
	<div class="container">
		<div id="content">

			<!-- Content -->
			<form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<div class="form-group">
					<h3 for="exampleInputEmail1">Username</h3>
					<input type="text" class="form-control" id="login_user" name="login_user" placeholder="Enter username or email">
				</div>
				<br>
				<div class="form-group">
					<h3 for="exampleInputPassword1">Password</h3>
					<input type="password" class="form-control" id="login_password" name="login_password" placeholder="Password">
				</div>
				<!-- <div class="form-check">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input">
						Remember Me
					</label>
				</div> -->
				<br>
				<button type="submit" class="button button-primary" name="submit">Login</button>
			</form>
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
<?php
	require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

	if (mysqli_connect_errno())
	{
	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 }

	//Username exists
	if(isset($_POST['submit'])){
		$username = $_POST['login_user'];
		$_SESSION['user'] = $username;
		$password = $_POST['login_password'];
		$_SESSION['pass'] = $password;
		$passHash = password_hash($password, PASSWORD_DEFAULT);
		$query1 = "SELECT * FROM registeredUsers WHERE username='$username'";
		$result = $con->query($query1);
		if($result->num_rows == 1) {
			$row = mysqli_fetch_array($result);
			if(password_verify($password,$row['password'])){
				echo "<script> window.location.assign('UserLoginSuccess.php'); </script>";
			}
			else{
				$message = "Password incorrect.\\nTry again.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
		//Username does not exists
			else{
				$message = "Username incorrect.\\nTry again.";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
		}
			mysqli_close($con);


?>
