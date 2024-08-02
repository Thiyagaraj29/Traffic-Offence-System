<?php
session_start();
error_reporting(0);
 include_once "../db/db.php"; 
if($_GET['Mode'] =="Edit") {
	$sqlup="Select * from station
	where ps_id='".$_REQUEST['id']."' ";
	//echo $sqlup;
	//exit;
	$we=mysqli_query($con,$sqlup);
	$res=mysqli_fetch_object($we);
}

if($_GET['Mode'] =="Delete") {
	$sqldel="Delete from station
	where ps_id='".$_REQUEST['id']."' ";
	//echo $sqldel;
	//exit;
	mysqli_query($con,$sqldel);
	
    
	echo "<meta http-equiv='refresh' content='0;url=station.php'>";
	}


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
			  <td colspan="2" style="border-bottom:1px solid #CCCCCC;" bgcolor="#eeeeee" align="center"><h2>ADD POLICE STATIONS </h2></td>
			  </tr>
			 <tr>
    <td width="38%"><a href="station.php" style="text-decoration:none"><strong>VIEW</strong></a></td>
    <td width="62%"><input type="hidden" name="id" value="<?php echo $res->ps_id; ?>"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Name&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="ps_name" value="<?php echo $res->ps_name; ?>"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Circle&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="ps_circle" value="<?php echo $res->ps_circle; ?>"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Contact&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="ps_con" value="<?php echo $res->ps_con; ?>"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Fax&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="ps_fax" value="<?php echo $res->ps_fax; ?>"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Address&nbsp;:&nbsp;</strong></td>
    <td rowspan="2"><textarea name="ps_add" style="width:175px"><?php echo $res->ps_add; ?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
	<?php if($_GET['Mode'] =="Edit") { ?>
	<input type="submit" name="update" value="Update" class="submit_but" />
	<?php } else { ?>
		<input type="submit" name="submit" value="Submit" class="submit_but" />
	<?php } ?>
	</td>
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
<script type="text/javascript">
document.form1.ps_name.focus()
var frm = document.form1;

function valid(){

if(frm.ps_name.value =="") { alert("Please Enter The Police Station Name"); frm.ps_name.focus(); return false }

if(frm.ps_circle.value =="") { alert("Please Enter The Circle"); frm.ps_circle.focus(); return false }

if(frm.ps_con.value =="") { alert("Please Enter The Contact"); frm.ps_con.focus(); return false }

if(frm.ps_fax.value =="") { alert("Please Enter The Fax No"); frm.ps_fax.focus(); return false }

if(frm.ps_add.value =="") { alert("Please Enter The Address"); frm.ps_add.focus(); return false }
}
</script>
<?php
if(isset($_REQUEST['submit']))
{
$ins="INSERT INTO `station` (`ps_name` ,
							`ps_circle` ,
							`ps_con` ,
							`ps_fax` ,
							`ps_add`)
					VALUES ('".$_REQUEST['ps_name']."',
							'".$_REQUEST['ps_circle']."', 
							'".$_REQUEST['ps_con']."', 
							'".$_REQUEST['ps_fax']."', 
							'".$_REQUEST['ps_add']."')";
mysqli_query($con,$ins);		

echo "<script type='text/javascript'> alert('Successfully Inserted');</script>";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";					
}elseif(isset($_REQUEST['update']))
{
$ins="UPDATE `station` SET `ps_name` = '".$_REQUEST['ps_name']."',
							`ps_circle` = '".$_REQUEST['ps_circle']."', 
							`ps_con` = '".$_REQUEST['ps_con']."', 
							`ps_fax` = '".$_REQUEST['ps_fax']."',
							`ps_add` = '".$_REQUEST['ps_add']."'
	                  WHERE `ps_id` ='".$_REQUEST['id']."'";
  mysqli_query($con,$ins);		

echo "<script type='text/javascript'> alert('Successfully Updated');</script>";
echo "<meta http-equiv='refresh' content='0;url=station.php'>";					
}
?> 