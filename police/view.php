<?php
error_reporting(0);
session_start();
 include_once "../db/db.php"; 

	$sqlup="Select * from fir where fir_id='".$_REQUEST['id']."' ";
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
                    <div id="title1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">&nbsp;Complaints&nbsp;</a> | <a href="fir.php">FIR&nbsp;</a> | <a href="firview.php">View FIR&nbsp;</a> | <a href="accused.php">Accused&nbsp;</a> | <a href="../logout.php"> &nbsp;</a><a href="chat.php">Chat&nbsp;</a> | <a href="../logout.php"> &nbsp;</a><a href="../logout.php">Logout&nbsp;</a></div>
</div>
<div id="side">
  <ul>
    <li><a href="index.php">Complaints</a></li>
    <li><a href="fir.php">FIR</a></li>
    <li><a href="firview.php">View FIR</a></li>
    <li><a href="accused.php">Accused</a></li>
    <li><a href="chat.php">Chat</a></li>
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
        
<table align="center" cellpadding="10" cellspacing="0" width="750" bgcolor="#e4e4e4" style="border:1px solid #CCCCCC;font-size:12px">
			<tr bgcolor="#e4e4e4">
			  <td colspan="4" style="border-bottom:1px solid #CCCCCC;padding:10px" bgcolor="#eeeeee" align="center"><h2>VIEW FIR </h2></td>
	    </tr>

	<tr>
    <td width="19%" align="right" style="border-bottom:1px solid #CCCCCC;"><strong>FIR No &nbsp;:&nbsp;</strong></td>
    <td width="25%" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_no ?></td>
    <td width="15%" align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Date&nbsp;:&nbsp;</strong></td>
    <td width="41%" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_date ?></td>
  </tr>
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Act&nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_act ?></td>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Section &nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_section ?></td>
  </tr>
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>
      Occurence of offence &nbsp;:&nbsp;</strong></td>
    <td colspan="3" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_offence ?></td>
    </tr>
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Date From  &nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_df ?></td>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>To &nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_dt ?></td>
  </tr>
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Time From &nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_tf ?></td>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>To &nbsp;:&nbsp;</strong></td>
    <td align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_tt ?></td>
  </tr>
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Informant Details &nbsp;:&nbsp;</strong></td>
    <td colspan="3" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_informant ?></td>
    </tr>
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Suspect Details  &nbsp;:&nbsp;</strong></td>
    <td colspan="3" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_suspect ?></td>
    </tr>
  <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>FIR Status   &nbsp;:&nbsp;</strong></td>
    <td colspan="3" align="left" style="border-bottom:1px solid #CCCCCC;"><?php echo $res->fir_status ?></td>
  </tr>
<?php
if($res->fir_sta == $_SESSION['po_sta']) {
?>  
    <tr>
    <td align="right" style="border-bottom:1px solid #CCCCCC;"><strong>Change Status   &nbsp;:&nbsp;</strong></td>
    <td colspan="3" align="left" style="border-bottom:1px solid #CCCCCC;">
	 <select name="fir_status">
	 <option value="<?php echo $res->fir_status ?>"><?php echo $res->fir_status ?></option>
     <option value="Under The Investigation">Under The Investigation</option>
	 <option value="Closed">Closed</option>
	 <option value="Reopened">Reopened</option>
	 </select>
	 &nbsp;&nbsp;&nbsp;&nbsp;
	 <input name="update" type="submit" value="Update" class="submit_but">
	</td>
  </tr>
<?php } ?>
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
<?php
if(isset($_REQUEST['update']))
{
$ins="UPDATE `fir` SET `fir_status` = '".$_REQUEST['fir_status']."' WHERE `fir_id` ='".$_REQUEST['id']."'";
mysqli_query($con,$ins);

echo "<script type='text/javascript'> alert('Update Successfully');</script>";
	echo "<meta http-equiv='refresh' content='0;url=firview.php'>";
}
?>