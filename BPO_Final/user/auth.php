<?php
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $userid = $_POST['userid'];
  $password = $_POST['password'];

  $db_conn = new mysqli('localhost', 'rolejnic', 'Danielle1', 'rolejnic');

  if (mysqli_connect_errno()) {
   echo 'Connection to database failed:'.mysqli_connect_error();
   exit();
  }

  $query = 'select * from user '
           ."where name='$userid' "
           ." and pword='$password'";

  $result = $db_conn->query($query);
  if ($result->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $userid;    
  }
  $db_conn->close();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Authentication</title>
</head>

<body>


<? 
  if (isset($_SESSION['valid_user']))
  {
	header("Location: http://secs.oakland.edu/~rolejnic/Fruit/veggie/index_Home.html");
	
	exit;
  }else {
  if (isset($userid)){
    echo 'Could not log you in.<br />';
  }else {
	echo 'You are not logged in.<br />';
  }
	echo "Please try to Log-In again or Register as a <a href='../index _new_user.html' style='text-decoration:none'>New User</a>!";  
  }
?>


</body>
</html>
