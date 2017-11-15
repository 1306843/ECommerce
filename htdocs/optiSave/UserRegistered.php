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
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="about-us.html">About Us</a></li>
				<!-- <li class="current"><a href="register.html">Register</a></li> -->
								<!-- <li><a href="profile.html">View Profile</a></li> -->
								<li><a href="login.php">Login</a></li>
			</ul>
		</nav>

	</header>
</div>

<!-- Banner -->
<div id="banner-wrapper" style="margin-top: -30px;">
	<div id="banner" class="box container">
		<div class="row">
				<p style="font-size: 35px"> <?php
	   use PHPMailer\PHPMailer\PHPMailer;
	   use PHPMailer\PHPMailer\Exception;
           include_once("./library.php"); // To connect to the database
           $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
           // Check connection
           if (mysqli_connect_errno())
           {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $hashed_password = null;
            // Form the SQL query (an INSERT query)
            $name = $_POST['form_name'];
            $email = $_POST['form_email'];
            $address = $_POST['form_address'];
            $city = $_POST['form_city'];
            $state = $_POST['form_state'];
            $zipcode = $_POST['form_zipcode'];
            $phone= $_POST['form_phone'];
            $birthday = $_POST['form_birthday'];
            $username = $_POST['form_username'];
            $password = $_POST['form_password'];
            $hashed_password= password_hash($password, PASSWORD_DEFAULT);
            // session_start();
            // $_SESSION["Email"] = $email;
						$sql=mysqli_query($con, "SELECT * FROM registeredUsers WHERE username='$username' OR email='$email'");
 						if(mysqli_num_rows($sql)>=1)
   					{
    				echo "<h2> Username or email has been taken! <h2>";
						echo "<h6> <h6>";
						echo "<div><a href='#' onclick='window.history.back();' class='button alt big icon'>Fill out form again.</a></div>";

   					}
 					else
    				{
						$sql="INSERT INTO registeredUsers (name, email, address, city, state, zipcode,phone,birthday,username, password)
	            VALUES  ('$name', '$email', '$address', '$city', '$state', '$zipcode','$phone','$birthday','$username',
	              '$hashed_password')";
	          	if (!mysqli_query($con,$sql))
	          	{
	            	die('Error: ' . mysqli_error($con));
	          	}
	          	else
	          	{
								// session_start();
								// $_SESSION['user'] = $username;
								echo "<center><h2> Successfully Registered! </h2></center>";
	            						echo "<div><p style='text-align:center;'>Welcome $name. You are registered as $username.</p></div><br/>\n";
								require 'Exception.php';
								require 'PHPMailer.php';
								require 'SMTP.php';
								$mail = new PHPMailer;
								$mail->isSMTP();
								$mail->SMTPDebug = 0;
								$mail->Host = 'smtp.gmail.com';
								$mail->Port = 587;
								$mail->SMTPSecure = 'tls';
								$mail->SMTPAuth = true;
								$mail->Username = 'jedbarson@gmail.com';
								$mail->Password = 'jedib0501';
								$mail->setFrom('jedbarson@gmail.com', 'Your friends at optiSave');
								$mail->addAddress($email, $name);
								$mail->Subject = 'Welcome to optiSave!';
								$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
								$mail->AltBody = 'Thanks for joining optiSave! We\'re glad to have you';
								if(!$mail->send()) {
									echo 'Message could not be sent.';
									echo 'Mailer Error : ' . $mail->ErrorInfo;
								} else {
									echo '<br><br><br><h3 style="text-align:center;">Confirmation email sent!</h3>';
								}
								echo "<p></p>";
								echo "<p></p>";

								echo "<a href='login.php' class='button big icon fa-arrow-circle-right'>First Login</a>";
								echo "<a href='survey.html' class='button alt big icon'>Questionnaire</a>";

	          	}
	          	mysqli_close($con);
    				}


          ?>
        </p>
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
