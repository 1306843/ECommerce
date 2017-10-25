<?php
  require_once('./library.php');
  $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

  if (mysqli_connect_errno())
  {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
  $username = $_POST['login_user'];
  $password = $_POST['login_password'];
  $passHash = password_hash($password, PASSWORD_DEFAULT);
  //session_start();
  //$_SESSION['email'] = $email;
  //$_SESSION['username'] = $username;

  #verify password

  $query1 = "SELECT * FROM registeredUsers WHERE username='$username'";
  $result = $con->query($query1);
  //mysqli_query($con, $query1);
  //while($row = mysqli_fetch_array($result)) {
    if($result->num_rows == 1) {
      $row = mysqli_fetch_array($result);
      if(password_verify($password,$row['password'])){
        echo "match";
      }
      else{
        echo 'Username and password do not match';
      }
      	mysqli_close($con);
      }
?>
