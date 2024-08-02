<?php
error_reporting(0);
session_start();
 include_once "../db/db.php"; 
?>
<html><head><title>Traffic Offense System</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.png"></link>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<body>
<div id="main">
<div id="header">
<div id="title">
				&nbsp;&nbsp; Traffic Offense System </div>
                    <div id="title1">
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">&nbsp;Staions&nbsp;</a> | <a href="police.php"> &nbsp;Police&nbsp;</a> | <a href="viewfir.php">FIR&nbsp;</a> | <a href="acc.php">Accused&nbsp;</a> | <a href="../logout.php"> &nbsp;Logout&nbsp;</a></div>
</div>
<div id="side">
<ul>
					<li><a href="index.php">Stations</a></li>
					<li><a href="police.php">Police</a></li>
				    <li><a href="viewfir.php">FIR</a></li>
				    <li><a href="acc.php">Accused</a></li>
					<li><a href="../logout.php">Logout</a></li>
				</ul>
<div class="side2">
					<h3>&nbsp;</h3>
					<div id="sidebox">
					 <img src="../images/image.jpg" width="123" height="67" />					</div>
					
					<div id="sidebox">
					 <img src="../images/hatecrime.jpg" width="125" height="67" />					</div>
			  </div>				
</div>
<div id="banner"></div>
<div class="inner">
<h3>&nbsp;</h3>
<br>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return valid()" style="padding-left:20px">
        
<table align="center" cellpadding="0" cellspacing="0" width="750" bgcolor="#e4e4e4" style="border:1px solid #CCCCCC;font-size:12px">
			<tr bgcolor="#e4e4e4">
			  <td colspan="2" style="border-bottom:1px solid #CCCCCC;padding:10px" bgcolor="#eeeeee" align="center"><h2>VIEW POLICE OFFICERS </h2></td>
			  </tr>
<tr>
    <td colspan="6"><a href="police.php" style="text-decoration:none"><< BACK</a></td>
    </tr>			  
		<tr>
  <td align="center">
  <table width="100%" border="1" cellpadding="0px" cellspacing="0px" bordercolor="#000000" style="font-size:13px">
  <tr style="background-color:#333333;color:#FFFFFF">
    <td width="74" height="32" align="center"  style="border-bottom:1px solid #CCCCCC;">Station</td>
	<td width="107" height="32" align="center" style="border-bottom:1px solid #CCCCCC;">Name</td>
    <td width="41" align="center" style="border-bottom:1px solid #CCCCCC;">DOB</td>
    <td width="50" align="center" style="border-bottom:1px solid #CCCCCC;">Position</td>
    <td width="86" align="center" style="border-bottom:1px solid #CCCCCC;">Contact</td>
    <td width="87" align="center" style="border-bottom:1px solid #CCCCCC;">E-Mail</td>
    <td width="47" align="center" style="border-bottom:1px solid #CCCCCC;">Address</td>
    <td width="48" align="center" style="border-bottom:1px solid #CCCCCC;">User<br />
      Name</td>
    <td width="122" align="center" style="border-bottom:1px solid #CCCCCC;">Action</td>
  </tr>
 <?php
 $sel="select * from police order by po_id desc";
 $from=mysqli_query($con,$sel);
 while($sta=mysqli_fetch_object($from))
 {
 ?>
  <tr>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->po_sta; ?></td>
	<td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->po_name; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->po_dob; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->po_pos; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->po_con; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->po_email; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->po_add; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->po_user; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;">
	 <a href="police.php?id=<?php echo $sta->po_id ?>&amp;Mode=Edit" style="text-decoration:none">
	 <img src="../images/editform.png" width="26" height="26" /></a>
	 <img src="../images/space.png" />
	 <a href="police.php?id=<?php echo $sta->po_id ?>&Mode=Delete" onClick="return confirm(' Are You Sure To Delete? ');" style="text-decoration:none">
	  <img src="../images/deleteform.png" width="26" height="26" /></a>	</td>
  </tr>
  <?php } ?>
  </table></td></tr>
			</table>
			</form>
<h1>&nbsp;</h1>
		  </div>
 <div id="footer"><span class="divider"></span>
            All Rights Reserved
</div>
</div>
</body>
</html>
