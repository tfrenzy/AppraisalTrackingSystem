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
.style1 {
	font-size: 18px
}
.style2 {font-size: 24px; }
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<form id="form1" name="form1" method="post" action="">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#D5EDB3">
    <td colspan="2" rowspan="2"><img src="k1390534[1].jpg" width="170" height="113" /></td>
    <td width="438" height="50" align="center" valign="bottom" nowrap="nowrap" class="style2" id="logo">Appraisal History</td>
    <td width="258">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" id="tagline" valign="top" align="center">&nbsp;</td>
	<td width="258">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
 
  <tr bgcolor="#99CC66">
  <td>&nbsp;</td>
  	<td colspan="3" id="dateformat" height="20"><a href="welcome2.php">Return to Home page</a>&nbsp;&nbsp;&nbsp;&nbsp;
  	  <script language="JavaScript" type="text/javascript">;	</script>	</td>
  </tr>

  <tr>

  <tr>
    <td colspan="4" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
 <tr>
    <td width="19">&nbsp;</td>
    <td colspan="2" valign="top">&nbsp;<br />
    &nbsp;
    
    <br />
   <table border="0" cellspacing="0" cellpadding="2" width="504">
        <tr>
          <td class="pageName style1">Click to view Appraisal History</td>
        </tr>
        <tr>
          <td class="bodyText">
          <?php
		  include("connection.inc");
		  $appraisee = $_SESSION['appraisee'];
		  $ded = split(" ", $appraisee);
		  $sql = "SELECT * FROM `annualappraisal` WHERE `LastName` = '$ded[0]' AND `FirstName` = '$ded[1]';";
		  $result = mysql_query($sql);
		  for ($i = 0; $i <= mysql_num_rows($result)-1;$i++) {
		  $dates = mysql_result($result, $i, "DateOfInterview")
		  ?>
          <p><a href="AppraisalHistory2011.php?xdate=<?php echo mysql_result($result, $i, "DateOfInterview"); $_SESSION['dater'] = $dates;?>">Interview of <?php echo mysql_result($result, $i, "DateOfInterview"); ?></a></p>
         <?php
		  }
		  ?>
          </td>
        </tr>
      </table>
	   <br />
    &nbsp;<br />	</td>
    <td width="258">
      <p>&nbsp;</p>
      </td>
  </tr>

 <tr>
    <td width="19">&nbsp;</td>
    <td width="287">&nbsp;</td>
    <td width="438">&nbsp;</td>
	<td width="258">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
