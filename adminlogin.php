<!-Local Time Clock widget - HTML code - localtimes.info --><div align="center" style="margin:15px 0px 0px 0px"><noscript><div align="center" style="width:140px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold"><a style="padding:2px 1px;margin:2px 1px;font-size:12px;line-height:16px;font-family:arial;text-decoration:none;color:#000" href="http://localtimes.info/Africa/Kenya/Nairobi/"><img src="http://localtimes.info/images/countries/ke.png" border=0 style="border:0;margin:0;padding:0">&nbsp;Time in Nairobi </a></div></noscript><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Africa&country=Kenya&city=Nairobi&color=white-black&widget_number=1100&fwdt=200&lab=1&mon=1"></script></div><!-end of code-->

<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_COURSE']);
	unset($_SESSION['NAME']);
?>
<html>
<head>
<title>
TUK Automated Voting
</title>
<link rel="icon" type="image/png" href="favicon.png" />
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<link href="admin/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="admin/lib/jquery.js" type="text/javascript"></script>
<script src="admin/src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'admin/src/loading.gif',
      closeImage   : 'admin/src/closelabel.png'
    })
  })
</script>
</head>
<body>

<div id="loginform">
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: #FFFFFF; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>
<form action="login.php" method="post"></br> 
   <span>Admin Panel:</span></br> </br> </br> 
<span>User_Number :</span><input type="text" name="username" /><br><br>
<span>Password :</span><input type="password" name="password" /><br><br>
<span style="display: none;">Type :</span>
<select name="asas" style="display: none;">
<option>Admin</option>
</select>
<span>&nbsp;</span><span style="font-size: 11px; font-weight: normal; width: 170px; text-align: left;">Forgot Password? click <a rel="facebox" href="pwordrecoveradmin.php">Here</a></span><br><br>
<span>&nbsp;</span><input id="btn" type="submit" value="Login" />
</form>
</div>
    <center><div class="copyrights">&copy; 

Copyright © 2015 TUKENYA

     Programmed by: Raymond Jeff ::.-P.::
</div>
</body>
</html>