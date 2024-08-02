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
					 <img src="images/image.jpg" width="123" height="67" />					</div>
					
					<div id="sidebox">
					 <img src="images/hatecrime.jpg" width="125" height="67" />					</div>
			  </div>				
</div>
<div id="banner"></div>
<div class="inner">
<h3>&nbsp;</h3>
<br>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" onSubmit="return valid()" style="padding-left:20px">
        
<table align="center" cellpadding="10" cellspacing="0" width="750" bgcolor="#e4e4e4" style="border:1px solid #CCCCCC;font-size:12px">
			<tr bgcolor="#e4e4e4">
			  <td colspan="2" style="border-bottom:1px solid #CCCCCC;" bgcolor="#eeeeee" align="center"><h2>POLICE LOGIN</h2></td>
			  </tr>
			<tr>
			  <td align="right">&nbsp;</td>
			  <td>&nbsp;</td>
			  </tr>
			<tr>
			<td width="324" align="right">User Name &nbsp;:&nbsp; </td>
			<td width="429">
			  <input type="text" name="user_name"/>			</td>
			</tr>
	<tr>
			  <td align="right">Password&nbsp;:&nbsp;</td>
			  <td><input type="password" name="user_pwd"/></td>
			  </tr>
		
			<tr>
			  
			  <td colspan="2" align="center"><input type="submit" name="submit" value="SUBMIT" class="submit_but"/></td>
			  </tr>
			<tr>
			  <td>&nbsp;</td>
			  <td>&nbsp;</td>
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
document.form1.user_name.focus()
var frm = document.form1;


function valid(){

if(frm.user_name.value =="") { alert("Please Enter The User Name"); frm.user_name.focus(); return false }

if(frm.user_pwd.value =="") { alert("Please Enter The Password"); frm.user_pwd.focus(); return false }

}
</script>
<?php
if(isset($_REQUEST['submit']))
{
$user_name=$_REQUEST['user_name'];
$user_pwd=$_REQUEST['user_pwd'];

$sqlup="Select * from police
	where po_user='".$user_name."' AND po_pwd='".$user_pwd."'";
	
	$we=mysqli_query($con,$sqlup);
	$res=mysqli_fetch_object($we);
if($res->po_user==$user_name && $res->po_pwd ==$user_pwd)
{
	
$_SESSION['police_id']=$res->po_id;
$_SESSION['police_name']=$res->po_name;
$_SESSION['user_name']=$res->po_name;
$_SESSION['user_pwd']=$res->po_pwd;
$_SESSION['po_sta']=$res->po_sta;

	echo "<script type='text/javascript'> alert('Login Successfully');</script>";
	echo "<meta http-equiv='refresh' content='0;url=police/index.php'>";
}
else{	echo "<script type='text/javascript'> alert('Invalid Login');</script>";	}
}
?>