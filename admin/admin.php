<!-Local Time Clock widget - HTML code - localtimes.info --><div align="center" style="margin:15px 0px 0px 0px"><noscript><div align="center" style="width:140px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold"><a style="padding:2px 1px;margin:2px 1px;font-size:12px;line-height:16px;font-family:arial;text-decoration:none;color:#000" href="http://localtimes.info/Africa/Kenya/Nairobi/"><img src="http://localtimes.info/images/countries/ke.png" border=0 style="border:0;margin:0;padding:0">&nbsp;Time in Nairobi </a></div></noscript><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Africa&country=Kenya&city=Nairobi&color=white-black&widget_number=1100&fwdt=200&lab=1&mon=1"></script></div><!-end of code-->
<html>
<head>
<title>
	School Admin Panel
</title>
<link rel="icon" type="image/png" href="../favicon.png" />
<!-- CSS Style -->
<link rel="stylesheet" href="admin.css">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<!--sa poip up-->
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
				<li><a href="winner.php"><img alt="" src="img/win.png"><span>final Results</span></a></li>
				<li><a href="candidates.php"><img alt="" src="img/candidates.png"><span>Candidates</span></a></li>
				<li><a href="parties.php"><img alt="" src="img/parties.png"><span>Faculties</span></a></li>
				<li><a href="students.php"><img alt="" src="img/user.png"><span>Voters</span></a></li>
				<li><a href="idnumbers.php"><img alt="" src="img/numbers.png"><span>Student Information</span></a></li>
				<li class="active"><a href="admin.php"><img alt="" src="img/userpic.png"><span>Admin Acount</span></a></li>
				<li><a href="course.php"><img alt="" src="img/page.png"><span>School</span></a></li>
				<li><a href="position.php"><img alt="" src="img/position.png"><span>Position</span></a></li>
                                <li><a href="../adminlogin.php"><img alt="" src="img/logout.png"><span>Logout</span></a></li>
			</ul>
		</div>
		<div class="two-thirds1 column">
			<div class="thewraper">
			<div id="formdesign"><input type="text" name="filter" value="" id="filter" placeholder="search..." autocomplete="off" /></div>
			<a rel="facebox" href="addadmin.php"> <img alt="" src="img/add-item.png"> </a> | 
			<a rel="facebox" href="backup/restoreform.php"> <img alt="" src="img/database.png"> </a> | 
                        <a href="backup/export.php"> <img alt="" src="img/cloud-outline.png" ></a><br>
			<table id="resultTable" data-responsive="table">
				<thead>
					<tr>
						<th> Username </th>
						<th> Password </th>
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php
						include('../connect.php');
						$result = $db->prepare("SELECT * FROM admin");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
					?>
					<tr class="record">
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td><a rel="facebox" href="editadmin.php?id=<?php echo $row['id']; ?>"> <img alt="" src="img/edit.png"> </a> | <a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><img alt="" src="img/delete-item.png"></a></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="copyrights">&copy; 

Copyright © 2015 TUKENYA

     Programmed by: Raymond Jeff ::.-P.::
</div>
	</div>
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteadmin.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>
