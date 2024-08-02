<?php
error_reporting(0);
session_start();
 include_once "../db/db.php"; 

?><html><head><title>Traffic Offense System</title>
<link rel="shortcut icon" type="image/x-icon" href="images/icon.png"></link>
</head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../calendar/styles/glDatePicker.default.css" rel="stylesheet" type="text/css">
    <script src="../calendar/jquery.min.js"></script>
    <script src="../calendar/glDatePicker.min.js"></script>

    <script type="text/javascript">
        $(window).load(function()
        {
            $('#example').glDatePicker();
			$('#example2').glDatePicker();
        });
    </script>
<body>
<div id="main">
<div id="header">
<div id="title">
				&nbsp;&nbsp; Traffic Offense System </div>
                    <div id="title1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">&nbsp;Complaints&nbsp;</a> | <a href="fir.php">FIR&nbsp;</a> | <a href="firview.php">View FIR&nbsp;</a> | <a href="accused.php">Accused;</a> | <a href="../logout.php"> &nbsp;</a>| <a href="../logout.php"> &nbsp;</a><a href="../logout.php">Logout&nbsp;</a></div>
</div>
<div id="side">
  <ul>
    <li><a href="index.php">Complaints</a></li>
    <li><a href="fir.php">FIR</a></li>
    <li><a href="firview.php">View FIR</a></li>
    <li><a href="accused.php">Accused</a></li>
   
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
			  <td colspan="4" style="border-bottom:1px solid #CCCCCC;padding:10px" bgcolor="#eeeeee" align="center"><h2>ACCUSED REGISTER </h2></td>
	    </tr>

	 <tr>
    <td width="19%" align="right"><strong>Accused No&nbsp;:&nbsp;</strong></td>
    <td width="25%" align="left">
	<input name="acc_no" readonly="readonly" type="text" 
				value="<?php 
				$auto="select acc_no from accused order by acc_id desc";
				$num=mysqli_query($con,$auto);
				$gen=mysqli_fetch_object($num);
				if($gen->acc_no !='')
				{
				$spl=explode('ASD',$gen->acc_no);
				$val=$spl[1]+1;
				}else
				{
				$val='10001';
				}
				echo 'ASD'.$val;  ?>" style="width:125px"/></td>
    <td width="15%" align="right"><strong>Name&nbsp;:&nbsp;</strong></td>
    <td width="41%" align="left">
	<input type="text" name="acc_name" value="<?php echo $res->acc_name; ?>" style="width:125px"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Father Name&nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="acc_father" style="width:125px" /></td>
    <td align="right"><strong>Mother Name&nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="acc_mother" style="width:125px" /></td>
  </tr>
 
  <tr>
    <td align="right"><strong>DOB&nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="acc_dob" style="width:125px" /></td>
    <td align="right"><strong>Age &nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="acc_age" style="width:125px" /></td>
  </tr>
  <tr>
    <td align="right"><strong>Gender &nbsp;:&nbsp;</strong></td>
    <td align="left"><select name="acc_gender">
					 <option value="">Select Gender</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					</select></td>
    <td align="right"><strong>Native&nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="acc_native" style="width:125px" /></td>
  </tr>
  
   <tr>
    <td align="right"><strong>
      <input type="hidden" name="fir_comp" />
      Offence &nbsp;:&nbsp;</strong></td>
    <td colspan="3" align="left"><textarea name="acc_offence" style="width:350px;height:100px"></textarea></td>
    </tr>
  <tr>
    <td align="right"><strong>Identifications</strong></td>
    <td colspan="3" align="left"><textarea name="acc_mark" style="width:350px;height:100px"></textarea></td>
    </tr>


   <tr>
    <td colspan="4" align="center">
		<input type="submit" name="submit" value="Submit" class="submit_but" />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="acc.php" style="text-decoration:none">
		<input type="button" value="View" class="submit_but" /></a></td>
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
var frm = document.form1;

function valid(){

if(frm.acc_name.value =="") { alert("Please Enter The Accused Name"); frm.acc_name.focus(); return false }

if(frm.acc_father.value =="") { alert("Please Enter The Father Name"); frm.acc_father.focus(); return false }

if(frm.acc_mother.value =="") { alert("Please Enter The Mother Name"); frm.acc_mother.focus(); return false }

if(frm.acc_dob.value =="") { alert("Please Enter The DOB"); frm.acc_dob.focus(); return false }

if(frm.acc_age.value =="") { alert("Please Enter The Age"); frm.acc_age.focus(); return false }

if(frm.acc_gender.value =="") { alert("Please Enter The Gender"); frm.acc_gender.focus(); return false }

if(frm.acc_native.value =="") { alert("Please Enter The Native"); frm.acc_native.focus(); return false }

if(frm.acc_offence.value =="") { alert("Please Enter The Offence Details"); frm.acc_offence.focus(); return false }

if(frm.acc_mark.value =="") { alert("Please Select The Identification Marks Details"); frm.acc_mark.focus(); return false }

}
</script>
<?php
if(isset($_REQUEST['submit']))
{
$insert="INSERT INTO `accused` (`acc_no` ,
								`acc_name` ,
								`acc_father` ,
								`acc_mother` ,
								`acc_dob` ,
								`acc_age` ,
								`acc_gender` ,
								`acc_native` ,
								`acc_offence` ,
								`acc_mark`,
								`acc_station`)
						VALUES ( '".$_REQUEST['acc_no']."',
								 '".$_REQUEST['acc_name']."', 
								 '".$_REQUEST['acc_father']."', 
								 '".$_REQUEST['acc_mother']."', 
								 '".$_REQUEST['acc_dob']."', 
								 '".$_REQUEST['acc_age']."', 
								 '".$_REQUEST['acc_gender']."', 
								 '".$_REQUEST['acc_native']."', 
								 '".$_REQUEST['acc_offence']."', 
								 '".$_REQUEST['acc_mark']."', 
								 '".$_SESSION['po_sta']."')";
					 
mysqli_query($con,$insert);

echo "<script type='text/javascript'> alert('Successfully Registered');</script>";
	echo "<meta http-equiv='refresh' content='0;url=acc.php'>";

}
?>