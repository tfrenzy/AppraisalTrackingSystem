<?php session_start(); ?>
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
.style10 {font-size: 18px}
.style15 {color: #990000}
.style16 {color: #CC6600; font-size: 18px;}
.style18 {
	color: #AA0000;
	font-weight: bold;
}
.style19 {color: #AA0000; font-size: 12px;}
.style20 {font-size: 24px}
.style24 {font-weight: bold; font-size: 14px;}
.style25 {color: #FF0000}
.style26 {
	color: #000000;
	font-weight: bold;
}
.style27 {font-size: 12px}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
 <form id="form1" name="form1" method="post" action="welcome2.php">
<table width="100%" height="647" border="0" cellpadding="0" cellspacing="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="2" rowspan="2" bgcolor="#D5EDB3">&nbsp;</td>
    <td width="628" height="50" align="center" valign="bottom" nowrap="nowrap" bgcolor="#D5EDB3" class="style18 style20" id="logo">Employee Appraisal Tracking</td>
    <td width="494" bgcolor="#D5EDB3"><label></label></td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" align="center" valign="top" bgcolor="#D5EDB3" id="tagline">&nbsp;</td>
	<td width="494" bgcolor="#D5EDB3"><label></label></td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
  <tr bgcolor="#99CC66">
  <td bgcolor="#D5EDB3">&nbsp;</td>
  	<td height="20" colspan="3" bgcolor="#D5EDB3" id="dateformat">&nbsp;&nbsp;
  	  <span class="style25">
  	  <strong>
  	  <?php 
	if (isset($_POST['buttonx'])) {$_SESSION['appraisee'] = $_POST['select'];}
	echo " ";
	echo $_SESSION['appraisee']; 
	?>
  	  </strong>
      <script language="JavaScript" type="text/javascript"> ;	</script>
  	  </span></td>
  </tr>

  <tr>
  <tr bgcolor="#D5EDB3">
    <td colspan="4"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
 <tr>
    <td width="171" height="444" valign="middle" bgcolor="#D5EDB3"><label>
    <div align="center">
      <?php
	include("connection.inc");
	 if (($_SESSION['category'] == "Senior Manager")||($_SESSION['category'] == "Appraiser")||($_SESSION['category'] == "Administrator")) {
	$sql = "SELECT * FROM `users` WHERE `Category` = 'Appraisee'";
	$result = mysql_query($sql);
	?>
      <select name="select" id="select">
        <option>Select Appraisee Name</option>
        <?php for ($i = 0; $i <= mysql_num_rows($result)-1; $i++) {
		?>
        <option>
          <?php
		 $rel = mysql_result($result, $i, "Username");
		 $rel2 = mysql_result($result, $i, "Password");
		 echo "$rel $rel2";
		 ?>
          </option>
        <?php } ?>
      </select>
      <?php } ?>
      <br />
        <?php if (($_SESSION['category'] == "Senior Manager")||($_SESSION['category'] == "Appraiser")||($_SESSION['category'] == "Administrator")) {
	?>
        <input type="submit" name="buttonx" id="buttonx" value="Enter" />
        <?php } ?>
      <br />
      <br />
      <br />
      <br />
      <a href="index.php">Sign out</a></div>
    </label></td>
    <td colspan="2" valign="top" bgcolor="#FFFFFF">&nbsp;
     
      <br />
   <table border="0" cellspacing="0" cellpadding="2" width="632">
        <tr>
          <td width="628" bgcolor="#FFFFFF" class="bodyText">
          <?php
		  $sql1 = "SELECT * FROM `annualappraisal` WHERE `SubmitType` = 'Submit1'";
		  $result1 = mysql_query($sql1);
		  
		  if (mysql_num_rows($result1) > 0) {
		  $lname = mysql_result($result1, 0, "LastName");
		  $fname = mysql_result($result1, 0, "FirstName");
		  $appraisee = "$lname $fname";
		  
		  if ($_SESSION['category'] == "Senior Manager") {
		  ?>
          <p align="left" class="style15"><?php echo "An appraisal form of $appraisee has been submmitted to you" ?></p>
          <?php
          }
		  if ($_SESSION['category'] == "Appraisee") {
		  ?>
          <p align="left" class="style15"><?php echo "Your appraisal form has been submitted to the senior manager" ?></p>
          <?php
          }
		  }
		  $sql1 = "SELECT * FROM `annualappraisal` WHERE `SubmitType` = 'Submit2'";
		  $result1 = mysql_query($sql1);
		  
		  if (mysql_num_rows($result1) > 0) {
		  $lname = mysql_result($result1, 0, "LastName");
		  $fname = mysql_result($result1, 0, "FirstName");
		  $appraisee = "$lname $fname";
		  
		  if ($_SESSION['category'] == "Senior Manager") {
		  ?>
          <p align="left" class="style15"><?php echo "Your appraisal for $appraisee has been submmitted to him" ?></p>
          <?php
          }
		  if ($_SESSION['category'] == "Appraisee") {
		  ?>
          <p align="left" class="style15"><?php echo "Your appraisal has been conducted by the senior manager and resent" ?></p>
          <p>
            <?php
          }
		  }

		  ?>
          </p>
          <p>
            <?php
if (($_SESSION['category'] == "Senior Manager")||($_SESSION['category'] == "Appraiser")||($_SESSION['category'] == "Administrator")) {
	?>
                </p>
          <p align="left" class="style15"><a href="AddNewAppraisee.php" class="style10">Add New Appraisee</a></p>
    <?php } ?>
          <p align="left" class="style15"><a href="AnnualAppraisal.php" class="style10">Annual Appraisal Interview</a></p>
            <p align="left" class="style16"><a href="ObjectivesDevelopmentPlan.php"></a><a href="QuarterlyReview.php">Semi Annual Reviews</a>            </p>
            <p align="left" class="style16"><a href="AppraisalReportt.php">Appraisal History/Report</a></p>
            <p align="left" class="style16"><a href="AppraisalGuide.php">Appraisal Guide</a></p>
          <p align="left" class="style16"><a href="TrainingCourses.php"></a> </p>
          <p align="center" class="style16"><a href="index.php"></a></p></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      
      </td>
    <td width="494" valign="top" bgcolor="#FFFFFF">
      <p align="left"><img src="k0178077[1].jpg" alt="" width="230" height="179" /></p>
      <table width="262" height="94" border="0">
        <tr>
          <td width="256"><div align="justify" class="style26"><span class="style27">Holding Employee Performance Management meetings is necessary as it helps HR to properly plan and accurately execute performance appraisal exercises. </span></div></td>
        </tr>
      </table>
      <p align="justify" class="style19">&nbsp;</p>
      <p align="justify" class="style18">&nbsp;</p>    </td>
  </tr>

 <tr>
    <td width="171" height="38" bgcolor="#D5EDB3">&nbsp;</td>
    <td width="4" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="628" bgcolor="#FFFFFF"><span class="style24">Appraisal Tracking System; software solution for Employee Performance Tracking</span></td>
	<td width="494" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
