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
			  <td colspan="5" style="border-bottom:1px solid #CCCCCC;padding:10px" bgcolor="#eeeeee" align="center"><h2>VIEW ACCUSED</h2></td>
			  </tr>
<tr style="background-color:#333333;color:#FFFFFF">
    <td width="89" height="32" align="center">Accused <br />
      No</td>
	<td width="96" height="32" align="center">Name</td>
    <td width="183" height="32" align="center">DOB</td>
    <td width="150" align="center">AGE</td>
    <td width="150" align="center">Action</td>
	</tr>
 <?php
 $sel="select * from accused order by acc_id desc";
 $from=mysqli_query($con,$sel);
 while($sta=mysqli_fetch_object($from))
 {
 ?>
  <tr>
    <td height="40" align="center"><?php echo $sta->acc_no; ?></td>
	<td align="center"><?php echo $sta->acc_name; ?></td>
	<td align="center"><?php echo $sta->acc_dob; ?></td>
    <td align="center"><?php echo $sta->acc_age; ?></td>
    <td align="center"><a href="a.php?id=<?php echo $sta->acc_id; ?>" style="text-decoration:none">
		<strong>View Details </strong></a></td>
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
