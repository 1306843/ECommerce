<?php
  session_start();
  require_once('./library.php');
  $con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 $new_membership = $_POST['edit_membership'];
 //Current user's information
 $session_user = $_SESSION['user'];
 $query1 = "SELECT * FROM userMembership WHERE username='$session_user'";
 $result = $con->query($query1);
 $row = mysqli_fetch_array($result);
 //update query
 $sql = "UPDATE userMembership SET membership_type='$new_membership' WHERE username='$session_user'";
 $result = $con->query($sql);
 if ($result) {
   $message = "Membership Updated!";
   echo "<script type='text/javascript'>alert('$message');</script>";
   header('Refresh: 2; URL = profile.php');
  } else {
    echo "Error updating record: " . $con->error;
  }

$con->close();
?>
