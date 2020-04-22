<!-Local Time Clock widget - HTML code - localtimes.info --><div align="center" style="margin:15px 0px 0px 0px"><noscript><div align="center" style="width:140px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold"><a style="padding:2px 1px;margin:2px 1px;font-size:12px;line-height:16px;font-family:arial;text-decoration:none;color:#000" href="http://localtimes.info/Africa/Kenya/Nairobi/"><img src="http://localtimes.info/images/countries/ke.png" border=0 style="border:0;margin:0;padding:0">&nbsp;Time in Nairobi </a></div></noscript><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Africa&country=Kenya&city=Nairobi&color=white-black&widget_number=1100&fwdt=200&lab=1&mon=1"></script></div><!-end of code-->
<html>
<head>
<title>
	School Admin Panel
</title>
<link rel="icon" type="image/png" href="../favicon.png" />
<!-- CSS Style -->
<link rel="stylesheet" href="admin.css">
<!--sa poip up-->
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=700, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 700px; font-size:11px; font-family:arial; font-weight:normal;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
</head>
<body>
	<div id="top">
		<div class="logo">
			<img src="../psu.png" style="width: 44px;">
		</div>
		<div class="welcome">
			<img alt="" src="img/userpic.png">
			<span>Raymond Jeff, Admin!</span>
		</div>
	</div>
	<div class="container  clearfix">
		<div class="one-third1 column">
			<ul>
				<li><a href="index.php"><img alt="" src="img/home.png"><span>Live Streaming</span></a></li>
				<li class="active"><a href="winner.php"><img alt="" src="img/win.png"><span>Final Results</span></a></li>
				<li><a href="candidates.php"><img alt="" src="img/candidates.png"><span>Candidates</span></a></li>
				<li><a href="parties.php"><img alt="" src="img/parties.png"><span>Faculties</span></a></li>
				<li><a href="students.php"><img alt="" src="img/user.png"><span>Voters</span></a></li>
				<li><a href="idnumbers.php"><img alt="" src="img/numbers.png"><span>Student Information</span></a></li>
				<li><a href="admin.php"><img alt="" src="img/userpic.png"><span>Admin Acount</span></a></li>
				<li><a href="course.php"><img alt="" src="img/page.png"><span>School</span></a></li>
				<li><a href="position.php"><img alt="" src="img/position.png"><span>Position</span></a></li>
				<li><a href="../adminlogin.php"><img alt="" src="img/logout.png"><span>Logout</span></a></li>
			</ul>
		</div>
		<div class="two-thirds1 column">
			<div class="thewraper">
			<div style="margin-top: 18px;">
			<a id="addd" href="javascript:Clickheretoprint()"><img alt="" src="img/details_open.png"><span></span></a>
			</div>
				<div class="content" id="content">
				<div style="margin-bottom: 30px;">
				<img src="../psu.png" style="width: 44px; float: left; margin-left: 215px;">
				<span style="text-align: center; font-weight: bold;display: inline-block; margin-top: 6px;">The Technical University of Kenya Voting Result</span>
				<br>Free and Fair Elections
				</div>
				
				
				<?php
				include('../connect.php');
				$resultasa = $db->prepare("SELECT * FROM position");
					$resultasa->execute();
					for($i=0; $rowasa = $resultasa->fetch(); $i++){
					$exrxrxrx=$rowasa['name'];
					if(($exrxrxrx != 'Senator') AND ($exrxrxrx != 'Representative')) {
					$dsds=$exrxrxrx;
					echo '<div style="margin-top: 18px;">';
					echo '<strong>'.$exrxrxrx.'</strong><br>';
					$results = $db->prepare("SELECT * FROM candidates WHERE position= :a ORDER BY votes DESC LIMIT 1");
						$results->bindParam(':a', $dsds);
						$results->execute();
						for($i=0; $rows = $results->fetch(); $i++){
							echo $rows['name'].'&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['votes'].'<br>';
						}
					echo '</div>';
					}
					if(($exrxrxrx == 'Senator') AND ($exrxrxrx != 'Representative')) {
					$dsds=$exrxrxrx;
					echo '<div style="margin-top: 18px;">';
					echo '<strong>'.$exrxrxrx.'</strong><br>';
					$results = $db->prepare("SELECT * FROM candidates WHERE position= :a ORDER BY votes DESC LIMIT 12");
						$results->bindParam(':a', $dsds);
						$results->execute();
						for($i=0; $rows = $results->fetch(); $i++){
							echo $rows['name'].'&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['votes'].'<br>';
						}
					echo '</div>';
					}
					}
					
				?>
				
				<div style="margin-top: 18px;">
				<strong>Representative</strong><br>
				<?php
				$dsds='Representative';
				$resultsa = $db->prepare("SELECT * FROM course");
					$resultsa->execute();
					for($i=0; $rowsa = $resultsa->fetch(); $i++){
					?>
				<?php
				$jnjnj=$rowsa['name'];
				$dsds='Representative';
				$results = $db->prepare("SELECT * FROM candidates WHERE position= :a AND course= :b ORDER BY votes DESC LIMIT 1");
					$results->bindParam(':a', $dsds);
					$results->bindParam(':b', $jnjnj);
					$results->execute();
					for($i=0; $rows = $results->fetch(); $i++){
						echo $rows['course'].'&nbsp;&nbsp;'.$rows['name'].'&nbsp;&nbsp;=&nbsp;&nbsp;'.$rows['votes'].'<br>';
					}
				?>
				<?php
				}
				?>
				</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="copyrights">&copy; 

Copyright © 2015 TUKENYA

     Programmed by: Raymond Jeff ::.-P.::
</div>
	</div>
</body>
</html>
