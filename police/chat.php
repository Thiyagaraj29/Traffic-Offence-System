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
        
<table align="center" cellpadding="0" cellspacing="0" width="750" bgcolor="#e4e4e4" style="border:1px solid #CCCCCC;font-size:12px">
			<tr bgcolor="#e4e4e4">
			  <td colspan="2" style="border-bottom:1px solid #CCCCCC;padding:10px" bgcolor="#eeeeee" align="center"><h2>CHAT ROOM</h2></td>
	    </tr>
<tr><td colspan="2">&nbsp;</td></tr>
	 <tr>
  <td align="left" colspan="2">
        	<style type="text/css">
#content 		{ width:800px; text-align:left; margin-left:60px; }

#chatwindow 		{ border:1px solid #aaaaaa; padding:4px; background:#0d1b2e; color:white;  width:690px; height:auto; font-family:courier new;}
#chatnick 		{ border: none; border-bottom:1px solid #aaaaaa; padding:4px; background:#0d1b2e; color:#FFFFFF;}
#chatmsg 		{ border: none; border-bottom:1px solid #aaaaaa; padding:4px; background:#0d1b2e; color:#FFFFFF;}

#info 			{ text-align:left; padding-left:0px; font-family:arial; }
#info td 		{ font-size:12px; padding-right:10px; color:#DFDFDF;  }
#info .small 		{ font-size:12px; padding-left:10px; padding-right:0px;}

#info a 		{ text-decoration:none; color:white; }
#info a:hover 		{ text-decoration:underline; color:#CF9700;}
</style>
		
		
		<div id="contents" style="padding-left:25px;">
			<p id="chatwindow"> </p>		
<!--			<textarea id="chatwindow" rows="19" cols="95" readonly></textarea><br>
--><br>

			<input id="chatnick" type="text" size="12" maxlength="10" value="<?php echo $_SESSION['user_name'];?>">&nbsp;&nbsp;
			<input id="chatmsg" type="text" size="85" maxlength="80"  onkeyup="keyup(event.keyCode);"> 
			<input type="button" value="add" onClick="submit_msg();" style="cursor:pointer;border:1px solid gray;"><br><br>
			
			<br>
		</div>


<script type="text/javascript">
/****************************************************************
 * Most Simple Ajax Chat Script (www.linuxuser.at)		*
 * Version: 3.1							*
 * 								*
 * Author: Chris (chris[at]linuxuser.at)			*
 * Contributors: Derek, BlueScreenJunky (http://forums.linuxuser.at/viewtopic.php?f=6&t=17)
 *								*
 * Licence: GPLv2						*
 ****************************************************************/
 
/* Settings you might want to define */
	var waittime=800;		

/* Internal Variables & Stuff */
	chatmsg.focus()
	document.getElementById("chatwindow").innerHTML = "loading...";

	var xmlhttp = false;
	var xmlhttp2 = false;


/* Request for Reading the Chat Content */
function ajax_read(url) {
	if(window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
		if(xmlhttp.overrideMimeType){
			xmlhttp.overrideMimeType('text/xml');
		}
	} else if(window.ActiveXObject){
		try{
			xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e){
			}
		}
	}

	if(!xmlhttp) {
		alert('Giving up :( Cannot create an XMLHTTP instance');
		return false;
	}

	xmlhttp.onreadystatechange = function() {
	if (xmlhttp.readyState==4) {
		document.getElementById("chatwindow").innerHTML = xmlhttp.responseText;

		zeit = new Date(); 
		ms = (zeit.getHours() * 24 * 60 * 1000) + (zeit.getMinutes() * 60 * 1000) + (zeit.getSeconds() * 1000) + zeit.getMilliseconds(); 
		intUpdate = setTimeout("ajax_read('../chat.txt?x=" + ms + "')", waittime)
		}
	}

	xmlhttp.open('GET',url,true);
	xmlhttp.send(null);
}

/* Request for Writing the Message */
function ajax_write(url){
	if(window.XMLHttpRequest){
		xmlhttp2=new XMLHttpRequest();
		if(xmlhttp2.overrideMimeType){
			xmlhttp2.overrideMimeType('text/xml');
		}
	} else if(window.ActiveXObject){
		try{
			xmlhttp2=new ActiveXObject("Msxml2.XMLHTTP");
		} catch(e) {
			try{
				xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
			} catch(e){
			}
		}
	}

	if(!xmlhttp2) {
		alert('Giving up :( Cannot create an XMLHTTP instance');
		return false;
	}

	xmlhttp2.open('GET',url,true);
	xmlhttp2.send(null);
}

/* Submit the Message */
function submit_msg(){
	nick = document.getElementById("chatnick").value;
	msg = document.getElementById("chatmsg").value;

	if (nick == "") { 
		check = prompt("please enter username:"); 
		if (check === null) return 0; 
		if (check == "") check = "anonymous"; 
		document.getElementById("chatnick").value = check;
		nick = check;
	} 

	document.getElementById("chatmsg").value = "";
	ajax_write("w.php?m=" + msg + "&n=" + nick);
}

/* Check if Enter is pressed */
function keyup(arg1) { 
	if (arg1 == 13) submit_msg(); 
}

/* Start the Requests! ;) */
var intUpdate = setTimeout("ajax_read('../chat.txt')", waittime);

</script></td></tr>
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
