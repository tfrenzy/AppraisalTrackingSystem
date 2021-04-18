<?php $_SESSION['appraisee'] = "" ?>
<?php if ($_SESSION['username'] != null) {session_destroy();} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>Appraisal Tracking System</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="mm_health_nutr.css" type="text/css" />
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
<style type="text/css">
<!--
.style1 {font-size: 12px}
.style2 {
	color: #993300;
	font-weight: bold;
}
.style4 {font-size: 12px; color: #000000; }
.style14 {
	font-size: 9px;
	color: #990000;
}
.style15 {
	font-size: 36px
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<table width="100%" height="427" border="0" cellpadding="0" cellspacing="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="2" rowspan="2" bgcolor="#D5EDB3"><img src="k1672166[1].jpg" width="155" height="123" /></td>
    <td width="800" height="30" align="center" valign="middle" nowrap="nowrap" bgcolor="#D5EDB3" id="logo">&nbsp;</td>
    <td width="330" bgcolor="#D5EDB3">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="75" align="center" valign="top" bgcolor="#D5EDB3" id="tagline"><p class="style1">&nbsp;</p>
    <p class="style15">Employee Performance Appraisal</p>    </td>
	<td width="330" bgcolor="#D5EDB3">&nbsp;</td>
  </tr>

  <tr>
    <td height="2" colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
  <tr bgcolor="#99CC66">
  <td><span class="style14">APPRAISAL TRACKING SYSTEM </span></td>
  	<td height="19" colspan="3" bgcolor="#99CC66" id="dateformat">&nbsp;</td>
  </tr>

  <tr>
  <tr>
    <td height="2" colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
 <tr>
    <td width="166" height="244" bgcolor="#D5EDB3">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
      <table width="360" height="191" border="0" cellpadding="2" cellspacing="0">
        <tr>
          <td width="356" class="pageName style2"> <div align="center">Employee Performance Management</div></td>
        </tr>
        <tr>
          <td height="158" class="bodyText"><p align="justify"><span class="style4 style1">Employee Appraisal is a  performance management system  that focuses on the evaluation of employees' performance within an organisation. Managing employees’ performance is a continuous  process. It involves making sure that the performance of employees contributes  to the goals of their teams and the business as a whole. </span></p>
          <p align="justify" class="style1">This software &quot;The Appraisal Tracking System&quot; is an E-Appraisal System that can be applied for systematic evaluation of employees' performance and  also for keeping track of their performance trend in electronic format.</p></td>
        </tr>
      </table>     
   <div align="center"></div></td>
   
    <td width="330" valign="top" bgcolor="#D5EDB3"><form id="form1" name="form1" method="post" action="welcome.php">
        <label></label>
        <p>
          <label></label>
        </p>
        <p><font color="#FF0000"><?php 
if (isset($_POST['button'])) {
$username = $_POST['textfield'];
$password = $_POST['textfield2'];
include("connection.inc");
$query = "SELECT * FROM `users` WHERE `Username` = '$username' AND `Password` = '$password'";
$result = mysql_query($query);
if (mysql_num_rows($result) == 0) {
echo "Invalid username or password";
}
}
		 ?></font>   </p>
        <table width="229" height="92" border="0">
          <tr>
            <td width="69">Username</td>
            <td width="144"><label>
              <input type="text" name="textfield" id="textfield" />
            </label></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><label>
              <input type="password" name="textfield2" id="textfield2" />
            </label></td>
          </tr>
          <tr>
            <td><label>
              <input type="submit" name="button" id="button" value="Login" />
            </label></td>
            <td valign="middle">&nbsp;</td>
          </tr>
        </table>
        <p>
          <label></label>
        </p>
        <p>&nbsp; </p>
    </form>    </td>
  </tr>

 <tr>
    <td width="166" height="55" bgcolor="#99CC66">&nbsp;</td>
    <td width="4" bgcolor="#99CC66">&nbsp;</td>
    <td width="800" bgcolor="#99CC66"><div align="center"></div></td>
	<td width="330" bgcolor="#99CC66">&nbsp;</td>
  </tr>
</table>
</body>
</html>
