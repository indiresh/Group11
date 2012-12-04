


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

	
	
	
	
	
	
	
	
<h1>Log out</h1>
<?php 
  if (!empty($old_user))
  {
    echo '<br>You have Logged Out!<br />';
	//header("Location: http://secs.oakland.edu/~rolejnic/Fruit/veggie/index.html");
  }
  else
  {
    echo 'you are alaready logged out<br />'; 
	
  }
?> 
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24" title="btnTZ">
  <param name="movie" value="btnLogOutTZ.swf" />
  <param name="quality" value="high" />
  <embed src="btnLogOutTZ.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" ></embed>
</object>
  </div>
	<div style="clear: both;">&nbsp;</div>
</div>
<div id="footer"><a href="../user/logout.php"></a></p>
</div>
</body>
</html>
