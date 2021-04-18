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
	font-size: 36px;
	color: #FF0000;
}
.style2 {font-size: 36px}
.style6 {font-size: 12}
.style12 {font-size: 12; font-weight: bold; }
.style24 {font-size: 16px; color: #FF0000; font-weight: bold; }
.style46 {color: #666666; }
.style59 {color: #FF0000}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<form id="form1" name="form1" method="post" action="AddNewAppraisee.php">
 
 
   <table width="103%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4FFE4">
  <tr bgcolor="#D5EDB3">
    <td colspan="4" rowspan="2" bgcolor="#D5EDB3">&nbsp;</td>
    <td width="827" height="50" align="center" valign="bottom" nowrap="nowrap" class="pageName style1 style2" id="logo"><div align="left"> NEW APPRAISEE</div></td>
    <td width="4">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" align="center" valign="top" id="tagline"><p>&nbsp;</p>    </td>
	<td width="4">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="6" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
   
  <tr bgcolor="#99CC66">
  <td>&nbsp;</td>
  	<td colspan="5" id="dateformat" height="20"><a href="welcome2.php">Return to Home Page</a>&nbsp;&nbsp;&nbsp;
      <script language="JavaScript" type="text/javascript">;	</script>	</td>
  </tr>

  <tr>
 
   <tr>
    <td colspan="6" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" valign="top">
    
 
	  
    
    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="77">&nbsp;</td>
    <td colspan="4" valign="top">&nbsp;<span class="style59">&nbsp;
        <?php
	
	  include("connection.inc");
	  
	  if (isset($_POST['Button'])) {
	  
	  $lastname = $_POST['textfield'];
	  $firstname = $_POST['textfield2'];
	  $category = "Appraisee";
	  $employeeno = $_POST['textfield3'];
	  $grade = $_POST['textfield4'];
	  $jobtitle = $_POST['textfield5'];
	  $department = $_POST['textfield6'];
	  $division = $_POST['textfield7'];
	  $yrsonjob = $_POST['textfield8'];
	  
$sql2 = "SELECT * FROM `users` WHERE `Username` = '$lastname' AND `Password` = '$firstname' AND `Category` = 'Appraisee'";
$result2 = mysql_query($sql2);

if (mysql_num_rows($result2) == 0) {

	  $sql = "INSERT INTO `users` VALUES('$lastname', '$firstname', '$category', '$employeeno', '$grade', '$jobtitle', '$department', '$division', '$yrsonjob')";
   	$result = mysql_query($sql);
	
				if ($result == 1) {echo "Appraisee successfully registered!!";}
			}
			else {
			echo "Appraisee already entered";
			}
			}
		?> 
        </span>
      <table width="1258" height="40" border="0">
        <tr>
          <td width="984" height="26" class="style12"><table width="1115" height="36" border="0">
            <tr>
              <td width="1105"><div align="center" class="style24">NEW APPRAISEE  INFORMATION</div></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table border="0" cellspacing="0" cellpadding="2" width="1116">
        <tr>
          <td width="570" class="pageName style6"><table width="466" border="0">
            <tr>
              <td width="214" class="style46">Last Name</td>
              <td width="242"><label>
                <input type="text" name="textfield" id="textfield"/>
              </label></td>
              </tr>
            <tr>
              <td class="style46">First Name</td>
              <td><label>
                <input type="text" name="textfield2" id="textfield2"/>
              </label></td>
              </tr>
            <tr>
              <td class="style46">Employee Number</td>
              <td><label>
                <input type="text" name="textfield3" id="textfield3" />
              </label></td>
              </tr>
            <tr>
              <td class="style46">Level/Grade</td>
              <td><label>
                <input type="text" name="textfield4" id="textfield4"/>
              </label></td>
              </tr>

          </table></td>
          <td width="534" valign="top" class="pageName style6">
            <table width="399" border="0">
              <tr>
                <td width="228" class="style46">Job Title</td>
                <td width="161"><label>
                  <input type="text" name="textfield5" id="textfield5" />
                </label></td>
              </tr>
              <tr>
                <td><span class="style46">Department</span></td>
                <td><label>
                  <input type="text" name="textfield6" id="textfield6"/>
                </label></td>
              </tr>
              <tr>
                <td class="style46">Division</td>
                <td><label>
                  <input type="text" name="textfield7" id="textfield7" />
                </label></td>
              </tr>
              <tr>
                <td class="style46">Years on Job Function</td>
                <td><label>
                  <input type="text" name="textfield8" id="textfield8"/>
                </label></td>
              </tr>
            </table>            </td>
          <td width="30" class="pageName style6">&nbsp;</td>
        </tr>
        <tr>
          <td height="24" valign="top" class="bodyText style6">&nbsp;</td>
          <td valign="top" class="bodyText style6">&nbsp;</td>
          <td class="bodyText style6">&nbsp;</td>
        </tr>
      </table>
	  
      	    <table width="1161" border="0">
          <tr>
            <td width="363"><label>
              
              <div align="center">
                <input name="Button" type="submit" class="style2" id="button" value="Save" />
              </div>
            </label></td>
            <td width="788"><label>
              <div align="center">
                <p>&nbsp;</p>
              </div>
            </label></td>
          </tr>
        </table>
	    <label></label>
	  <p>&nbsp;</p>
	  <label> </label></td>
    <td width="4">&nbsp;</td>
 </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" valign="top">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

 <tr>
    <td width="77">&nbsp;</td>
    <td width="10">&nbsp;</td>
    <td width="368">&nbsp;</td>
    <td width="53">&nbsp;</td>
    <td width="827">&nbsp;</td>
	<td width="4">&nbsp;</td>
  </tr>
</table>
 </form>
</body>
</html>
