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

<body onLoad="doOnLoad();">
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
			  <td colspan="2" style="border-bottom:1px solid #CCCCCC;padding:10px" bgcolor="#eeeeee" align="center"><h2>VIEW FIR </h2></td>
	</tr>
			<tr>
<td height="34" colspan="2">Select Status&nbsp;:&nbsp;
  <select name="fir_status" onChange="check1()">
    <option value="">Select Status</option>
    <option value="Under The Investigation">Under The Investigation</option>
    <option value="Closed">Closed</option>
    <option value="Reopened">Reopened</option>
  </select>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	<link rel="stylesheet" type="text/css" href="../codebase/dhtmlxcalendar.css"></link>
	<link rel="stylesheet" type="text/css" href="../codebase/skins/dhtmlxcalendar_dhx_skyblue.css"></link>
	<script src="../codebase/dhtmlxcalendar.js"></script>
	<style>
		input#date_from, input#date_to {
			font-family: Tahoma;
			font-size: 12px;
			background-color: #fafafa;
			border: #c0c0c0 1px solid;
			width: 100px;
		}
		span.label {
			font-family: Tahoma;
			font-size: 12px;
		}
	</style>
	<script>
		var myCalendar;
		function doOnLoad() {
			myCalendar = new dhtmlXCalendarObject(["date_from","date_to"]);
			myCalendar.hideTime();
			// init values
			var t = new Date();
			byId("date_from").value = myCalendar.getFormatedDate(null, t);
			t.setDate(t.getDate()+10);
			byId("date_to").value = myCalendar.getFormatedDate(null, t);
		}

		function setSens(id, k) {
			// update range
			if (k == "min") {
				myCalendar.setSensitiveRange(byId(id).value, null);
			} else {
				myCalendar.setSensitiveRange(null, byId(id).value);

			}
		}
		function byId(id) {
			return document.getElementById(id);
		}
	</script>
<span class="label">From</span> <input type="text" name="date_from" id="date_from" onClick="setSens('date_to', 'max');" readonly="true">
<span class="label">Till</span> <input type="text" name="date_to" id="date_to" onClick="setSens('date_from', 'min');" readonly="true">
  &nbsp;&nbsp;
  <input type="button" value="GO" onClick="check1()"></td>
	    </tr>
<tr>
  <td align="center">
 <table width="100%" border="1" cellpadding="0px" cellspacing="0px" bordercolor="#000000" style="font-size:13px">
  <tr style="background-color:#333333;color:#FFFFFF">
    <td width="91" height="32" align="center">FIR No</td>
	<td width="106" height="32" align="center">Date</td>
    <td width="141" height="32" align="center">Station</td>
    <td width="206" align="center">Informant</td>
    <td width="206" align="center">FIR Status </td>
    <td width="72" align="center">Action</td>
	</tr>
 <?php

 		
if($_REQUEST['fir_status'] != '')
{
		
$where = "fir_status ='".$_REQUEST['fir_status']."'";
		
}elseif($_REQUEST['date_from'] != '' && $_REQUEST['date_to'] != '')
{

$where = "fir_date between '".$_REQUEST['date_from']."' AND '".$_REQUEST['date_to']."'";
 
}else{

$where="fir_id like '%'";
 
}
$sel="select * from fir where ".$where." order by fir_id desc";

 $from=mysqli_query($con,$sel);
 while($sta=mysqli_fetch_object($from))
 {
 ?>
  <tr>
    <td height="34" align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->fir_no; ?></td>
	<td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->fir_date; ?></td>
	<td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->fir_sta; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->fir_informant; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><?php echo $sta->fir_status; ?></td>
    <td align="center" style="border-bottom:1px solid #CCCCCC;"><a href="view.php?id=<?php echo $sta->fir_id; ?>" style="text-decoration:none;">
		VIEW</a></td>
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
<script type="text/javascript">
function check1() {
document.form1.submit()
}
</script>
