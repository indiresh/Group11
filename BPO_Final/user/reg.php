<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration</title>
</head>

<body>
<h2>Registration</h2>



<?php
require_once 'dbLogin.php';
$db_server=mysql_connect($db_hostname, $db_username, $db_password);
	if (!$db_server) die("Unable to connect to MySQ: " .mysql_error());
mysql_select_db($db_database, $db_server)
	or die("Unable to Select database: ".mysql_error());

session_start();
extract($_POST);
$username=$_POST['username'];
$pword=$_POST['pword'];
$pword2=$_POST['pword2'];

if (!$username | !$pword | !$pword2) {
	echo 'Registration Failed! You did not complete all of the required fields!<br>';
	echo "<a href='../index _new_user.html' style='text-decoration:none'>Go back and try again!</a>";
	exit;
}

$query = "SELECT username FROM user WHERE username = '$username'";
$result = mysql_query($query);
$check = mysql_num_rows($result);

if ($check != 0) {
	echo 'Registration Failed! Sorry, the username '.$username.' is already in use.<br>';
	echo "<a href='../index _new_user.html' style='text-decoration:none'>Please go back and try again!</a>";
	exit;
}

if ($pword != $pword2) {
	echo 'Registration Failed!  Your passwords did not match.<br>';
	echo "<a href='../index _new_user.html' style='text-decoration:none'>Please go back and try again!</a>";
	exit;
}

if ((strlen($pword) < 6) || (strlen($pword) > 20)) {
	echo 'Registration Failed! Your password must be between 6 and 20 characters.<br>';
	echo "<a href='../index _new_user.html' style='text-decoration:none'>Please go back and try again!</a>";
	exit;
}

$sql= "INSERT INTO user VALUES('$username','$pword')";
$result=mysql_query($sql);

echo "<table>";
echo "<tr>";
	echo "<td colspan='3'>&nbsp;</td>";
echo "</tr>";

echo "<tr>";
	echo "<td style='width:120px;' align='left' colspan='2'>Username: </td>";
	echo "<td align='left'>$username</td>";
echo "</tr>";

echo "<tr>";
	echo "<td align='left' colspan='3'>Congratulations, you may now Log-In!</td>";
echo "</tr>";
echo "</table>";
mysql_close($db_server);
?>

<a href="../index.html">Click To Login</a>
</body>
</html>

