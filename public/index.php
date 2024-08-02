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
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">&nbsp;Complaints&nbsp;</a> | <a href="fir.php">FIR Copy</a> | <a href="../logout.php"> &nbsp;</a><a href="../logout.php">Logout&nbsp;</a></div>
</div>
<div id="side">
<ul>
					<li><a href="index.php">Complaints</a></li>
					<li><a href="fir.php">FIR Copy </a></li>
				 
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
			  <td colspan="4" style="border-bottom:1px solid #CCCCCC;padding:10px" bgcolor="#eeeeee" align="center"><h2>ADD COMPLAINTS</h2></td>
			  </tr>

	<tr>
    <td width="38%" align="right"><strong>Date&nbsp;:&nbsp;</strong></td>
    <td width="62%"><input type="text" name="comp_date" value="<?php echo date('d/m/Y'); ?>" readonly="readonly"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Place&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="comp_place"/></td>
  </tr>
  <tr>
    <td align="right"><strong>From&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="comp_from" value="<?php echo $_SESSION['public_name']; ?>" readonly="readonly"/></td>
  </tr>
  <tr>
    <td align="right"><strong>To&nbsp;:&nbsp;</strong></td>
    <td><select name="comp_sta">
      <option value=""> --- Select Station --- </option>
      <?php 
	$sel = "select * from station";
	$fro=mysqli_query($con,$sel);
	while($ps=mysqli_fetch_object($fro))
	{
	?>
      <option value="<?php echo $ps->ps_id;?>"><?php echo $ps->ps_name; ?></option>
      <?php } ?>
    </select></td>
  </tr>
  <tr>
    <td align="right"><strong>Subject&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="comp_sub"/></td>
  </tr>

  <tr>
    <td align="right"><strong>Complaint Details &nbsp;:&nbsp;</strong></td>
    <td rowspan="2"><textarea name="comp_comp" style="width:275px;height:200px"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
   <tr>
    <td>&nbsp;</td>
    <td>
		<input type="submit" name="submit" value="Submit" class="submit_but" />
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
document.form1.comp_place.focus()
var frm = document.form1;

function valid(){



if(frm.comp_place.value =="") { alert("Please Enter The Place"); frm.comp_place.focus(); return false }

if(frm.comp_sta.value =="") { alert("Please Select The Police Station"); frm.comp_sta.focus(); return false }

if(frm.comp_sub.value =="") { alert("Please Enter The Subject"); frm.comp_sub.focus(); return false }

if(frm.comp_comp.value =="") { alert("Please Enter The Complaint Details"); frm.comp_comp.focus(); return false }

}
</script>
<?php
if(isset($_REQUEST['submit']))
{
$ins="INSERT INTO `complaint` (`comp_date` ,
							`comp_place` ,
							`comp_from` ,
							`comp_sta` ,
							`comp_sub` ,
							`comp_comp`)
					VALUES ('".$_REQUEST['comp_date']."',
							'".$_REQUEST['comp_place']."',
							'".$_SESSION['public_id']."',
							'".$_REQUEST['comp_sta']."', 
							'".$_REQUEST['comp_sub']."', 
							'".$_REQUEST['comp_comp']."')";
mysqli_query($con,$ins);		

echo "<script type='text/javascript'> alert('Complaint Posted Successfully ');</script>";
echo "<meta http-equiv='refresh' content='0;url=index.php'>";					
}
?> 