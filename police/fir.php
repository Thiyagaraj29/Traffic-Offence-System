<?php
error_reporting(0);
session_start();
 include_once "../db/db.php"; 
 if($_GET['Mode'] =="Edit") {
	$sqlup="Select * from complaint
	inner join public on public.pub_id =complaint.comp_from
	where comp_id='".$_REQUEST['id']."' ";
	$we=mysqli_query($con,$sqlup);
	$res=mysqli_fetch_object($we);
}
?>
<html><head><title>Traffic Offense System</title>
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
                    <div id="title1">
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">&nbsp;Complaints&nbsp;</a> | <a href="fir.php">FIR&nbsp;</a> | <a href="firview.php">View FIR&nbsp;</a> | <a href="accused.php">Accused&nbsp;</a> | <a href="../logout.php"> &nbsp;</a> <a href="../logout.php"> &nbsp;</a><a href="../logout.php">Logout&nbsp;</a></div>
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
			  <td colspan="4" style="border-bottom:1px solid #CCCCCC;padding:10px" bgcolor="#eeeeee" align="center"><h2>REGISTER FIR </h2>
              <input type="hidden" name="contact" value="<?php echo $res->pub_con; ?>"/></td>
			  </tr>

	  <tr>
    <td width="19%" align="right"><strong>FIR No &nbsp;:&nbsp;</strong></td>
    <td width="25%" align="left">
	<input name="fir_no" readonly type="text" 
				value="<?php 
				$auto="select fir_no from fir order by fir_id desc";
				$num=mysqli_query($con,$auto);
				$gen=mysqli_fetch_object($num);
				if($gen->fir_no !='')
				{
				$spl=explode('FIR',$gen->fir_no);
				$val=$spl[1]+1;
				}else
				{
				$val='10001';
				}
				echo 'FIR'.$val;  ?>" style="width:125px"/></td>
    <td width="15%" align="right"><strong>Date&nbsp;:&nbsp;</strong></td>
    <td width="41%" align="left">
	<input type="text" name="fir_date" value="<?php echo date('Y-m-d'); ?>" readonly style="width:125px"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Act&nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="fir_act" style="width:125px"/></td>
    <td align="right"><strong>Section &nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="fir_section" style="width:125px"/></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><strong>
      <input type="hidden" name="fir_comp" value="<?php echo $res->comp_id ?>"/>
      Occurence of offence &nbsp;:&nbsp;</strong></td>
    <td colspan="2" align="left"><textarea name="fir_offence" style="width:250px;height:100px"><?php echo $res->comp_comp ?></textarea></td>
    </tr>
  <tr>
    <td align="right"><strong>Date From  &nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="fir_df" style="width:125px" id="example"/></td>
    <td align="right"><strong>To &nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="fir_dt" style="width:125px" id="example2"/></td>
  </tr>
  <tr>
    <td align="right"><strong>Time From &nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="fir_tf" style="width:125px"/></td>
    <td align="right"><strong>To &nbsp;:&nbsp;</strong></td>
    <td align="left"><input type="text" name="fir_tt" style="width:125px"/></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><strong>Informant Details &nbsp;:&nbsp;</strong></td>
    <td colspan="2" align="left"><textarea name="fir_informant" style="width:250px;height:75px"><?php echo $res->pub_name.'   '.$res->pub_dob.'   '.$res->pub_con.'   '.$res->pub_email.'   '.$res->pub_add; ?></textarea></td>
    </tr>
  <tr>
    <td colspan="2" align="right"><strong>Suspect Details  &nbsp;:&nbsp;</strong></td>
    <td colspan="2" align="left"><textarea name="fir_suspect" style="width:250px;height:75px"></textarea></td>
    </tr>


   <tr>
     <td colspan="2" align="right"><strong>FIR Status   &nbsp;:&nbsp;</strong></td>
     <td colspan="2" align="left">
	 <select name="fir_status">
	 <option value="">Select Status</option>
     <option value="Under The Investigation">Under The Investigation</option>
	 <option value="Closed">Closed</option>
	 <option value="Reopened">Reopened</option>
	 </select>
     </td>
   </tr>
   <tr>
    <td colspan="4" align="center">
		<input type="submit" name="submit" value="Submit" class="submit_but" />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="firview.php" style="text-decoration:none">
		<input type="button" value="View FIR" class="submit_but" /></a></td>
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

if(frm.fir_act.value =="") { alert("Please Enter The Act"); frm.fir_act.focus(); return false }

if(frm.fir_section.value =="") { alert("Please Enter The Section"); frm.fir_section.focus(); return false }

if(frm.fir_offence.value =="") { alert("Please Enter The Occurence Of Offence"); frm.fir_offence.focus(); return false }

if(frm.fir_df.value =="") { alert("Please Enter The Date From"); frm.fir_df.focus(); return false }

if(frm.fir_dt.value =="") { alert("Please Enter The Date To"); frm.fir_dt.focus(); return false }

if(frm.fir_tf.value =="") { alert("Please Enter The Time From"); frm.fir_tf.focus(); return false }

if(frm.fir_tt.value =="") { alert("Please Enter The Time To"); frm.fir_tt.focus(); return false }

if(frm.fir_informant.value =="") { alert("Please Select The Informant Details"); frm.fir_informant.focus(); return false }

if(frm.fir_suspect.value =="") { alert("Please Select The Suspect Details"); frm.fir_suspect.focus(); return false }

if(frm.fir_status.value =="") { alert("Please Select The FIR Status"); frm.fir_status.focus(); return false }

}
</script>
<?php
if(isset($_REQUEST['submit']))
{
if($_REQUEST['contact'] != "")
{
	$mobile = $_REQUEST['contact'];
	
	$message = "FIR has been registered on your complaint.";

 echo "<script type='text/javascript'>
window.open('http://bulksmsindia.mobi/sendurlcomma.aspx?user=20064973&pwd=crisp1996&senderid=PROJEC&mobileno=$mobile&msgtext=$message&smstype=4&priority=High');
</script>";

}
$insert="INSERT INTO `fir` (`fir_no` ,
							`fir_date` ,
							`fir_act` ,
							`fir_section` ,
							`fir_offence` ,
							`fir_df` ,
							`fir_dt` ,
							`fir_tf` ,
							`fir_tt` ,
							`fir_informant` ,
							`fir_suspect`,
							`fir_comp`,
							`fir_sta` ,
							`fir_status` )
						VALUES ( '".$_REQUEST['fir_no']."',
								 '".$_REQUEST['fir_date']."', 
								 '".$_REQUEST['fir_act']."', 
								 '".$_REQUEST['fir_section']."', 
								 '".$_REQUEST['fir_offence']."', 
								 '".$_REQUEST['fir_df']."', 
								 '".$_REQUEST['fir_dt']."', 
								 '".$_REQUEST['fir_tf']."', 
								 '".$_REQUEST['fir_tt']."', 
								 '".$_REQUEST['fir_informant']."', 
								 '".$_REQUEST['fir_suspect']."', 
								 '".$_REQUEST['fir_comp']."', 
								 '".$_SESSION['po_sta']."', 
								 '".$_REQUEST['fir_status']."')";
					 
mysqli_query($con,$insert);

echo "<script type='text/javascript'> alert('Successfully Registered');</script>";
	echo "<meta http-equiv='refresh' content='0;url=firview.php'>";

}
?>