<?php
session_start();
require_once('./library.php');
$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 $new_email = $_POST['editemail'];
 $new_address = $_POST['editaddress'];
 $new_city = $_POST['editcity'];
 $new_state = $_POST['editstate'];
 $new_zipcode = $_POST['editzipcode'];
 $new_phone= $_POST['editphone'];
 $new_birthday = $_POST['editbirthday'];
 // $password = $_POST['form_password'];
 //Current user's information
 $session_user = $_SESSION['user'];
 $query1 = "SELECT * FROM registeredUsers WHERE username='$session_user'";
 $result = $con->query($query1);
 $row = mysqli_fetch_array($result);

 if($new_address == null){
      $new_address = $row['address'];
 }
 if($new_email == null){
   $new_email = $row['email'];
 }
 if($new_city == null){
      $new_city = $row['city'];
    }
 if($new_state == null){
       $new_state = $row['state'];
     }
 if($new_zipcode == null){
       $new_zipcode = $row['zipcode'];
      }
  if($new_phone == null){
    $new_phone= $row['phone'];
  }
  if($new_birthday == null){
    $new_birthday = $row['birthday'];
  }

 //check for existing email
 $query2=mysqli_query($con, "SELECT * FROM registeredUsers WHERE email='$new_email'");
 if(mysqli_num_rows($query2)>=1 and $new_email!=$row['email'])
 {
   $message = "Email has already been taken! Try again.";
   echo "<script type='text/javascript'>alert('$message');</script>";
   header('Refresh: 2; URL = editprofile.php');
 }
 //Email is unique and valid
 else{
   //update query
    $sql = "UPDATE registeredUsers SET email='$new_email', address='$new_address',
            city='$new_city', state='$new_state', zipcode='$new_zipcode', phone='$new_phone',
            birthday='$new_birthday' WHERE username='$session_user'";
    $result = $con->query($sql);

   if ($result) {
     $message = "Record updated successfully";
     echo "<script type='text/javascript'>alert('$message');</script>";
     header('Refresh: 2; URL = profile.php');
    } else {
      echo "Error updating record: " . $conn->error;
    }
 }
$con->close();
?>
