<?php
session_start();
 include_once "db/db.php"; 
?><html><head><title>Traffic Offense System</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.png"></link>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<body>
<div id="main">
<div id="header">
<div id="title">
				&nbsp;&nbsp; Traffic Offense System </div>
                    <div id="title1">
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">&nbsp;HOME&nbsp;</a> | <a href="about.php"> &nbsp;ABOUT US&nbsp;</a> | <a href="admin.php">ADMIN LOGIN&nbsp;</a> | <a href="police.php">POLICE LOGIN&nbsp;</a> | <a href="user.php"> &nbsp;PUBLIC LOGIN&nbsp;</a></div>
</div>
<div id="side">
<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
				  <li><a href="admin.php">Admin Login</a></li>
				  <li><a href="police.php">Police Login</a></li>
					<li><a href="user.php">Public Login</a></li>
				</ul>
<div class="side2">
					<h3>&nbsp;</h3>
					<div id="sidebox">
					 <img src="images/image.jpg" width="123" height="67" />	</div>
					
					<div id="sidebox">
					 <img src="images/hatecrime.jpg" width="125" height="67" />	</div>
			  </div>				
</div>
<div id="banner"></div>
<div class="inner">
<h3>&nbsp;</h3>
<br>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return valid()" style="padding-left:20px">
        
<table align="center" cellpadding="10" cellspacing="0" width="750" bgcolor="#e4e4e4" style="border:1px solid #CCCCCC;font-size:12px">
			<tr bgcolor="#e4e4e4">
			  <td colspan="2" style="border-bottom:1px solid #CCCCCC;" bgcolor="#eeeeee" align="center"><h2>PUBLIC REGISTER HERE </h2></td>
			  </tr>
			 <tr>
    <td width="43%" align="right"><strong>Name&nbsp;:&nbsp;</strong></td>
    <td width="57%"><input type="text" name="pub_name"/></td>
  </tr>
  <tr>
    <td align="right"><strong>DOB&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="pub_dob"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Area Police Station &nbsp;:&nbsp;</strong></td>
    <td><select name="pub_sta">
      <option value=""> --- Select Station --- </option>
      <?php 
	$sel = "select ps_name from station";
	$fro=mysqli_query($con,$sel);
	while($ps=mysqli_fetch_object($fro))
	{
	?>
      <option value="<?php echo $ps->ps_name; ?>"><?php echo $ps->ps_name; ?></option>
      <?php } ?>
    </select></td>
  </tr>
  <tr>
    <td align="right"><strong>Contact&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="pub_con"/></td>
  </tr>
  <tr>
    <td align="right"><strong>E - Mail&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="pub_email"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Address&nbsp;:&nbsp;</strong></td>
    <td rowspan="2"><textarea name="pub_add" style="width:175px"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    </tr>
  <tr>
    <td align="right"><strong>User Name&nbsp;:&nbsp;</strong></td>
    <td><input type="text" name="pub_user"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Password&nbsp;:&nbsp;</strong></td>
    <td><input type="password" name="pub_pwd"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
	<input type="submit" name="submit" value="Submit" class="submit_but" />	</td>
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
document.form1.pub_name.focus()
var frm = document.form1;

function valid(){

if(frm.pub_name.value =="") { alert("Please Enter The Name"); frm.pub_name.focus(); return false }

if(frm.pub_dob.value =="") { alert("Please Enter The Date Of Birth"); frm.pub_dob.focus(); return false }

if(frm.pub_sta.value =="") { alert("Please Select The Police Station"); frm.pub_sta.focus(); return false }

if(frm.pub_con.value =="") { alert("Please Enter The Contact"); frm.pub_con.focus(); return false }

if(frm.pub_email.value =="") { alert("Please Enter The E-Mail Id"); frm.pub_email.focus(); return false }

if(frm.pub_add.value =="") { alert("Please Enter The Address"); frm.pub_add.focus(); return false }

if(frm.pub_user.value =="") { alert("Please Enter The User Name"); frm.pub_user.focus(); return false }

if(frm.pub_pwd.value =="") { alert("Please Enter The Password"); frm.pub_pwd.focus(); return false }

}
</script>
<?php
if(isset($_REQUEST['submit']))
{
	$sqlup="Select * from public where pub_user='".$_REQUEST['pub_user']."' ";
	$we=mysqli_query($con,$sqlup);
	$res=mysqli_fetch_row($we);
	if($res==0)
	{
		$ins="INSERT INTO `public` (`pub_name` ,
							`pub_dob` ,
							`pub_sta` ,
							`pub_con` ,
							`pub_email` ,
							`pub_add`,
							`pub_user`,
							`pub_pwd`)
					VALUES ('".$_REQUEST['pub_name']."',
							'".$_REQUEST['pub_dob']."',
							'".$_REQUEST['pub_sta']."',
							'".$_REQUEST['pub_con']."', 
							'".$_REQUEST['pub_email']."', 
							'".$_REQUEST['pub_add']."', 
							'".$_REQUEST['pub_user']."', 
							'".$_REQUEST['pub_pwd']."')";
			mysqli_query($con,$ins);		

			echo "<script type='text/javascript'> alert('Successfully Inserted');</script>";
			echo "<meta http-equiv='refresh' content='0;url=user.php'>";
	}
	else
	{
		echo "<script type='text/javascript'> alert('User Already Exists');</script>";
		echo "<meta http-equiv='refresh' content='0;url=reg.php'>";
	}
	
	
					
}
?> 