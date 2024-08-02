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
                    <div id="title1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">&nbsp;Complaints&nbsp;</a> | <a href="fir.php">FIR&nbsp;</a> | <a href="firview.php">View FIR&nbsp;</a> | <a href="accused.php">Accused&nbsp;</a> | <a href="../logout.php"> &nbsp;</a><a href="../logout.php">Logout&nbsp;</a></div>
</div>
<div id="side">
  <ul>
    <li><a href="index.php">Complaints</a></li>
    <li><a href="fir.php">FIR</a></li>
    <li><a href="firview.php">View FIR</a></li>
    <li><a href="accused.php">Accused</a></li>
    <!--<li><a href="chat.php">Chat</a></li>-->
    <li><a href="../logout.php">Logout</a></li>
  </ul>
  <div class="side2">
    <h3>&nbsp;</h3>
    <div id="sidebox"> <img src="../images/image.jpg" width="123" height="67" /> </div>
    <div id="sidebox"> <img src="../images/hatecrime.jpg" width="125" height="67" /> </div>
  </div>
</div>
<div id="banner"></div>
<div class="inner">
<h3>&nbsp;</h3>
<br>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return valid()" style="padding-left:20px">
        
<table align="center" cellpadding="0" cellspacing="0" width="750" bgcolor="#e4e4e4" style="border:1px solid #CCCCCC;font-size:12px">
			<tr bgcolor="#e4e4e4">
			  <td colspan="2" style="border-bottom:1px solid #CCCCCC;padding:10px" bgcolor="#eeeeee" align="center"><h2>VIEW COMPLAINTS</h2></td>
	    </tr>

		<tr>
  <td align="center">
  <table width="100%" border="1" cellpadding="0px" cellspacing="0px" bordercolor="#000000" style="font-size:13px">
  
  <tr style="background-color:#333333;color:#FFFFFF">
    <td width="73" height="32" align="center" style="border-bottom:1px solid #CCCCCC;">Date</td>
    <td width="40" align="center" style="border-bottom:1px solid #CCCCCC;">Place</td>
	<td width="106" height="32" align="center" style="border-bottom:1px solid #CCCCCC;">Informant</td>
    <td width="49" align="center" style="border-bottom:1px solid #CCCCCC;">Subject</td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;">Complaint</td>
    <td width="57" align="center" style="border-bottom:1px solid #CCCCCC;">Action</td>
  </tr>
 <?php
 $sel="select * from complaint
 inner join public on public.pub_id=complaint.comp_from
  INNER JOIN station ON station.ps_id=complaint.comp_sta
  where ps_name='".$_SESSION['po_sta']."'
  order by comp_from desc";
  //echo $sel;
 $from=mysqli_query($con,$sel);
 while($sta=mysqli_fetch_object($from))
 {
 ?>
  <tr>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->comp_date; ?></td>
	<td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->comp_place; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->pub_name; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->comp_sub; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->comp_comp; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;">
	<?php
	$fir="select * from fir where fir_comp='".$sta->comp_id."'";
	$que=mysqli_query($con,$fir);
	$exe=mysqli_fetch_object($que);
	if($exe > 0)
	{ ?>
	<a href="view.php?id=<?php echo $exe->fir_id; ?>" style="text-decoration:none">
		<strong>View FIR</strong></a>
	<?php } else {
	?>
	 <a href="fir.php?id=<?php echo $sta->comp_id ?>&amp;Mode=Edit" style="text-decoration:none">
	 <img src="../images/editform.png" width="26" height="26" /></a>
	 <?php } ?></td>
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
