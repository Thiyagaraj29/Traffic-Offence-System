<?php
error_reporting(0);
session_start();
 include_once "../db/db.php"; 
 
$sqlup="Select * from accused where acc_id='".$_REQUEST['id']."' ";
	$we=mysqli_query($con,$sqlup);
	$res=mysqli_fetch_object($we);
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
        
<table align="center" cellpadding="10" cellspacing="0" width="750" bgcolor="#e4e4e4" style="border:1px solid #CCCCCC;font-size:12px">
			<tr bgcolor="#e4e4e4">
			  <td colspan="5" style="border-bottom:1px solid #CCCCCC;padding:10px" bgcolor="#eeeeee" align="center"><h2>VIEW ACCUSED</h2></td>
			  </tr>
  <tr>
    <td width="19%" align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Accused No&nbsp;:&nbsp;</strong></td>
    <td width="31%" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_no; ?></td>
    <td width="16%" align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Name&nbsp;:&nbsp;</strong></td>
    <td width="34%" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_name; ?></td>
  </tr>
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Father Name&nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_father; ?></td>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Mother Name&nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_mother; ?></td>
  </tr>
 
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>DOB&nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_dob; ?></td>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Age &nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_age; ?></td>
  </tr>
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Gender &nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_gender; ?></td>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Native&nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_native; ?></td>
  </tr>
  
   <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>
      <input type="hidden" name="fir_comp" value="<?php echo $res->acc_id ?>"/>
      Offence &nbsp;:&nbsp;</strong></td>
    <td colspan="3" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_offence; ?></td>
    </tr>
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Identifications&nbsp;:&nbsp;</strong></td>
    <td colspan="3" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_mark; ?></td>
    </tr>
 <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Station&nbsp;:&nbsp;</strong></td>
    <td colspan="3" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->acc_station; ?></td>
    </tr>
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
