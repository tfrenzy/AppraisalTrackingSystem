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
.style8 {font-size: 12px}
.style12 {font-size: 12; font-weight: bold; }
.style24 {font-size: 16px; color: #FF0000; font-weight: bold; }
.style27 {
	color: #666666;
	font-size: 12px;
}
.style46 {color: #666666; }
.style47 {font-size: 12px; color: #0000FF; }
.style57 {
	font-size: 18px;
	color: #5C743D;
}
.style58 {font-size: 14px}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<form id="form1" name="form1" method="post" action="">
 <?php
   include("connection.inc");
   $appraisee = $_SESSION['appraisee'];
   $ded = split(" ", $appraisee);
   $sql = "SELECT * FROM `annualappraisal` WHERE `LastName` = '$ded[0]' AND `FirstName` = '$ded[1]'";
	$result = mysql_query($sql);
	
	if (mysql_num_rows($result) > 0) {
	$dateofinterview = mysql_result($result, 0, "DateOfInterview");
	$lastname = mysql_result($result, 0, "LastName");
	$firstname = mysql_result($result, 0, "FirstName");
	$employeeno = mysql_result($result, 0, "EmployeeNo");
	$grade = mysql_result($result, 0, "Grade");
	$jobtitle = mysql_result($result, 0, "JobTitle");
	$department = mysql_result($result, 0, "Department");
	$division = mysql_result($result, 0, "Division");
	$yrsonjob = mysql_result($result, 0, "YrsOnJob");
	$objective1 = mysql_result($result, 0, "Objective1");
	$objective2 = mysql_result($result, 0, "Objective2");
	$comment1 = mysql_result($result, 0, "Comment1");
	$comment2 = mysql_result($result, 0, "Comment2");

	}


   $sql2 = "SELECT * FROM `users` WHERE `Username` = '$ded[0]' AND `Password` = '$ded[1]'";
   $result2 = mysql_query($sql2);
   
   if (mysql_num_rows($result2) > 0) {
   $lastname = mysql_result($result2, 0, "Username");
	$firstname = mysql_result($result2, 0, "Password");
	$employeeno = mysql_result($result2, 0, "EmployeeNo");
	$grade = mysql_result($result2, 0, "LevelGrade");
	$jobtitle = mysql_result($result2, 0, "JobTitle");
	$department = mysql_result($result2, 0, "Department");
	$division = mysql_result($result2, 0, "Division");
	$yrsonjob = mysql_result($result2, 0, "YrsOnJob");
   }
   ?>

   <table width="103%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4FFE4">
  <tr bgcolor="#D5EDB3">
    <td colspan="4" rowspan="2"><img src="k1390534[1].jpg" width="181" height="123" /></td>
    <td width="735" height="50" align="center" valign="bottom" nowrap="nowrap" class="pageName style1 style2" id="logo"><div align="left">Semi Annual Review of Objectives</div></td>
    <td width="145">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" align="center" valign="top" id="tagline"><p>&nbsp;</p>    </td>
	<td width="145">&nbsp;</td>
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
    
    <?php
	
	  include("connection.inc");
	  
	  if (isset($_POST['Button'])) {
	  
	  $dateofreview= $_POST['textfield9'];
      $dateoflastinterview= $_POST['textfield10'];
	  $lastname= $_POST['textfield'];
	  $firstname= $_POST['textfield2'];
	  $employeeno= $_POST['textfield3'];
	  $grade= $_POST['textfield4'];
	  $jobtitle= $_POST['textfield11'];
	  $department= $_POST['textfield12'];
	  $division= $_POST['textfield13'];
	  $yrsonjob= $_POST['textfield14'];
	  
	  $objective1= $_POST['textarea7'];
	  $rating1 = $_POST['select2'];
	  $comment1= $_POST['textarea4'];
	  $objective2= $_POST['textarea6'];
	  $rating2 = $_POST['select5'];
	  $comment2= $_POST['textarea'];
	
	  
	  $overallperformance= $_POST['textfield5'];
	  
	  $comment3= $_POST['textarea18'];
	  $comment4= $_POST['textarea20'];
	  $name1= $_POST['textarea19'];
	  $name2= $_POST['textarea21'];
	  
	  
	  
	  $sql = "INSERT INTO `semireview` VALUES('$dateofreview', '$dateoflastinterview', '$lastname', '$firstname', '$employeeno', '$grade', '$jobtitle', '$department', '$division', '$yrsonjob', '$objective1', '$rating1', '$comment1', '$objective2', '$rating2', '$comment2', '$overallperformance', '$comment3', '$comment4', '$name1', '$name2')";
	  
	  
	  
	    	$result = mysql_query($sql);
			}
			
	if (isset($_POST['button2'])) {
	$rating1 = $_POST['select2'];
	$rating2 = $_POST['select5'];
	$overallperformance= $_POST['textfield5'];
	$overallperformance = ($rating1 + $rating2)/2;
			}
			
		?>    </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="77">&nbsp;</td>
    <td colspan="4" valign="top">&nbsp;&nbsp;
      <table width="1143" height="22" border="0">
        <tr>
          <td width="217" class="style27">Date of  Review</td>
          <td width="358"><label>
            <input type="text" name="textfield9" id="textfield9" />
          </label></td>
          <td width="231" class="style27">Date of Last Appraisal Interview</td>
          <td width="338"><label>
            <input type="text" name="textfield10" id="textfield10" value= "<?php echo $dateofinterview?>" />
          </label></td>
        </tr>
      </table>
      <table width="1258" height="40" border="0">
        <tr>
          <td width="984" height="26" class="style12"><table width="1115" height="36" border="0">
            <tr>
              <td width="1105"><div align="center" class="style24">EMPLOYEE INFORMATION</div></td>
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
                <input type="text" name="textfield" id="textfield" value= "<?php echo $lastname?>"/>
              </label></td>
              </tr>
            <tr>
              <td class="style46">First Name</td>
              <td><label>
                <input type="text" name="textfield2" id="textfield2" value= "<?php echo $firstname?>"/>
              </label></td>
              </tr>
            <tr>
              <td class="style46">Employee Number</td>
              <td><label>
                <input type="text" name="textfield3" id="textfield3" value= "<?php echo $employeeno?>" />
              </label></td>
              </tr>
            <tr>
              <td class="style46">Level/Grade</td>
              <td><label>
                <input type="text" name="textfield4" id="textfield4" value= "<?php echo $grade?>"/>
              </label></td>
              </tr>

          </table></td>
          <td width="534" valign="top" class="pageName style6">
            <table width="399" border="0">
              <tr>
                <td width="228" class="style46">Job Title</td>
                <td width="161"><label>
                  <input type="text" name="textfield11" id="textfield11" value= "<?php echo $jobtitle?>" />
                </label></td>
              </tr>
              <tr>
                <td><span class="style46">Department</span></td>
                <td><label>
                  <input type="text" name="textfield12" id="textfield12" value= "<?php echo $department?>"/>
                </label></td>
              </tr>
              <tr>
                <td class="style46">Division</td>
                <td><label>
                  <input type="text" name="textfield13" id="textfield13" value= "<?php echo $division?>" />
                </label></td>
              </tr>
              <tr>
                <td class="style46">Years on Job Function</td>
                <td><label>
                  <input type="text" name="textfield14" id="textfield14" value= "<?php echo $yrsonjob?>" />
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
	  
      	    <table width="1120" border="0">
          <tr>
            <td width="1110"><div align="center" class="style24">
              <p>SEMI-ANNUAL  REVIEW OF  SET OBJECTIVES </p>
              <p align="center" class="style27"><span class="style47">Review the objectives set during the appraisal and rate quarterly performance in percentage. Note that this review only extends till the third quarter. Aannual appraisal will be conducted at the fourth quarter.</span></p>
            </div></td>
          </tr>
        </table>
	  	  
	  <table width="1120" height="161" border="0">
        <tr>
          <td width="234" height="47"><div align="center" class="style8">Objectives</div></td>
          <td width="598">
            <div align="center" class="style58">Level of attainment of set objectives            </div>
                 
            <div align="center"></div></td>
          <td width="266"><div align="center" class="style8">Comments</div></td>
        </tr>
        <tr>
          <td height="53" align="center" valign="top"><p class="style8"><strong>
              <label> </label>
          </strong><textarea name="textarea7" cols="25" rows="3" id="textarea7" value= "<?php echo $objective1?>"><?php echo $objective1; ?></textarea>
          <label></label>
            </p>
            <label></label>
              <label></label></td>
          <td><div align="center">
            <select name="select2" id="select2">
              <option>Select Rating</option>
              <option <?php if ($rating1 == "10") {?>selected="selected"<?php } ?>>10</option>
              <option <?php if ($rating1 == "20") {?>selected="selected"<?php } ?>>20</option>
              <option <?php if ($rating1 == "30") {?>selected="selected"<?php } ?>>30</option>
              <option <?php if ($rating1 == "40") {?>selected="selected"<?php } ?>>40</option>
              <option <?php if ($rating1 == "50") {?>selected="selected"<?php } ?>>50</option>
              <option <?php if ($rating1 == "60") {?>selected="selected"<?php } ?>>60</option>
              <option <?php if ($rating1 == "70") {?>selected="selected"<?php } ?>>70</option>
              <option <?php if ($rating1 == "80") {?>selected="selected"<?php } ?>>80</option>
              <option <?php if ($rating1 == "90") {?>selected="selected"<?php } ?>>90</option>
              <option <?php if ($rating1 == "100") {?>selected="selected"<?php } ?>>100</option>
                                    </select>
%</div></td>
          <td valign="top"><label>
            <textarea name="textarea4" id="textarea4" cols="29.9" rows="3"><?php echo $comment1 ?></textarea>
          </label></td>
        </tr>
        <tr>
          <td height="53" align="center" valign="middle"><span class="style8">
            <textarea name="textarea6" cols="25" rows="3" id="textarea6" value= "<?php echo $objective2?>"><?php echo $objective2; ?></textarea>
          </span></td>
          <td><div align="center">
            <select name="select5" id="select5">
              <option>Select Rating</option>
            <option <?php if ($rating2 == "10") {?>selected="selected"<?php } ?>>10</option>
              <option <?php if ($rating2 == "20") {?>selected="selected"<?php } ?>>20</option>
              <option <?php if ($rating2 == "30") {?>selected="selected"<?php } ?>>30</option>
              <option <?php if ($rating2 == "40") {?>selected="selected"<?php } ?>>40</option>
              <option <?php if ($rating2 == "50") {?>selected="selected"<?php } ?>>50</option>
              <option <?php if ($rating2 == "60") {?>selected="selected"<?php } ?>>60</option>
              <option <?php if ($rating2 == "70") {?>selected="selected"<?php } ?>>70</option>
              <option <?php if ($rating2 == "80") {?>selected="selected"<?php } ?>>80</option>
              <option <?php if ($rating2 == "90") {?>selected="selected"<?php } ?>>90</option>
              <option <?php if ($rating2 == "100") {?>selected="selected"<?php } ?>>100</option>
            </select>
          %</div></td>
          <td><textarea name="textarea" id="textarea" cols="29.9" rows="3"><?php echo $comment2 ?></textarea></td>
        </tr>
      </table>
	  <p>
	    <label>
	    
          <div align="center">
            <input type="submit" name="button2" id="button2" value="Click to obtain Performance Average" />
	    </label>
	    <p align="left"><a href="AnnualAppraisal.php">Click  to access Objectives set  during annual appraisal</a></p>
 	    <table width="1123" border="0">
          <tr>
            <td width="1113"><div align="center"><span class="style24">
              <p>SEMI  PERFORMANCE PERCENTAGE RATING</p>
              </span>
                <p class="style47">To complete  this section, you need to select the appropriate final rating from the Menu below </p>
            </div></td>
          </tr>
        </table>
   	    <table width="1156" border="0">
          <tr>
            <td width="400" height="53" bordercolor="0"><span class="pageName style57"><strong>Employee  Semi Annual  performance:</strong></span></td>
            <td width="746"><label>
	<input type="text" name="textfield5" id="textfield5" value = <?php echo $overallperformance ?> >              
%
            </label></td>
          </tr>
        </table>
      
	    <table width="1123" border="0">
          <tr>
            <td width="1152"><div align="center" class="style24">COMMENTS</div></td>
          </tr>
        </table>
      	    <table width="1124" height="183" border="0">
          <tr>
            <td width="573" height="39"><div align="center">COMMENTS BY SUPERVISOR (REVIEWER)</div></td>
            <td width="535"><div align="center">COMMENTS BY EMPLOYEE</div></td>
          </tr>
          <tr>
            <td height="138" valign="top"><p>
              <textarea name="textarea18" id="textarea18" cols="64" rows="3"></textarea>
            </p>
              <table width="499" height="27" border="0">
                <tr>
                  <td width="107"><div align="center">NAME:</div></td>
                  <td width="382"><label>
                    <input name="textarea19" type="text" id="textarea19" value="" size="55" />
                  </label></td>
                </tr>
              </table>
            <p>&nbsp;</p></td>
            <td valign="top"><p>
              <textarea name="textarea20" id="textarea20" cols="64" rows="3"></textarea>
            </p>
            <table width="498" height="27" border="0">
              <tr>
                <td width="107"><div align="center">NAME:</div></td>
                <td width="381"><label>
                  <input name="textarea21" type="text" id="textarea21" value="" size="55"/>
                </label></td>
              </tr>
            </table>            <p>&nbsp; </p></td>
          </tr>
        </table>
        <table width="1161" border="0">
          <tr>
            <td width="363" height="78"><label>
              
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
    <td width="145">&nbsp;</td>
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
    <td width="4">&nbsp;</td>
    <td width="735">&nbsp;</td>
	<td width="145">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
