


<?php
  session_start();
  
  // store to test if they *were* logged in
  $old_user = $_SESSION['valid_user'];  
  unset($_SESSION['valid_user']);
  session_destroy();
?>
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
	
	
	
	
	
	
	
	
	<div id="colOne">
		<div id="menu1">
			<ul>
			
				<li id="menu-01"><a href="http://www.secs.oakland.edu/~rolejnic/index.html">Home</a></li>
				<li id="menu-02"><a href="http://www.secs.oakland.edu/~rolejnic/Fruit/veggie/index_products.html">Products</a></li>
				<li id="menu-03"><a href="http://www.secs.oakland.edu/~rolejnic/Fruit/veggie/index_ordering.html">About Organic Food</a></li>
				<li id="menu-04"><a href="http://www.secs.oakland.edu/~rolejnic/Fruit/veggie/index_contact_us.html">Contact Us</a></li>
			</ul>
		</div>
		<div id="colTwo">
<h1>Log out</h1>
<?php 
  if (!empty($old_user))
  {
    echo '<br>You have Logged Out!<br />';
  }
  else
  {
    echo 'You were not logged in.<br />'; 
  }
?> 
	</div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"><a href="../user/logout.php">Log Out?</a></p>
</div>
</body>
</html>
