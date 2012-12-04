<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Big Pickle Organics</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link href="http://www.secs.oakland.edu/~rolejnic/Fruit/veggie/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<h1>Big Pickle Organics</h1>
	
</div>
	<div style="clear: both;">&nbsp;</div>
<div id="content">
	<div><img src="http://www.secs.oakland.edu/~rolejnic/img/img4.jpg" alt="" /></div>
	
	
	
	
	
	
	
	

<?php
  echo '<h1>Congratulations</h1>';

  // check session variable

  if (isset($_SESSION['valid_user']))
  {
    echo '<p>You are logged in as '.$_SESSION['valid_user'].'</p>';
  }
  else
  {
    echo '<p>You are not logged in.</p>';
	echo '<p>Only logged in members may see this page.</p>';
	header("Location: http://secs.oakland.edu/~rolejnic/user/logout.php");
  }
  
?>
<a href="../user/logout.php">Log Out?</a>
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"><a href="../user/logout.php">Log Out?</a></p>
</div>
</body>
</html>

