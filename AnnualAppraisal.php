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
.style9 {
	font-size: 16px;
	font-weight: bold;
}
.style12 {font-size: 12; font-weight: bold; }
.style20 {
	font-size: 16px;
	font-weight: bold;
	color: #5C743D;
}
.style21 {color: #5C743D}
.style24 {font-size: 16px; color: #FF0000; font-weight: bold; }
.style27 {
	color: #666666;
	font-size: 12px;
}
.style28 {font-size: 16px}
.style30 {color: #5C743D; font-weight: bold; }
.style33 {
	font-size: 14px;
	color: #666666;
	font-weight: bold;
}
.style34 {color: #666666; font-size: 14px;}
.style46 {color: #666666; }
.style47 {font-size: 12px; color: #0000FF; }
.style48 {
	font-size: 14px;
	font-weight: bold;
}
.style64 {
	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style67 {font-size: 12px; font-weight: bold; color: #0000FF; }
.style68 {
	font-size: 24px
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<form id="form1" name="form1" method="post" action="">
   <?php
   include("connection.inc");
   $appraisee = $_SESSION['appraisee'];
   $ded = split(" ", $appraisee);
   
   $sql = "SELECT * FROM `annualappraisal` WHERE `LastName` = '$ded[0]' AND `FirstName` = '$ded[1]'  AND `SubmitType` = 'not submitted'";
	$result = mysql_query($sql);

	if (mysql_num_rows($result) > 0) {
	$dateofinterview = mysql_result($result, 0, "DateOfInterview");
	$dateofprevinterview = mysql_result($result, 0, "DateOfPrevInterview");
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
	$course1 = mysql_result($result, 0, "Course1");
	$course2 = mysql_result($result, 0, "Course2");
	$compldate1 = mysql_result($result, 0, "ComplDate1");
	$compldate2 = mysql_result($result, 0, "ComplDate2");
	$attainmentlevel1 = mysql_result($result, 0, "AttainmentLevel1");
	$attainmentlevel2 = mysql_result($result, 0, "AttainmentLevel2");
	$comment1 = mysql_result($result, 0, "Comment1");
	$comment2 = mysql_result($result, 0, "Comment2");
	$qualification = mysql_result($result, 0, "Qualification");
	$startyear = mysql_result($result, 0, "StartYear");
	$completionyear = mysql_result($result, 0, "CompletionYear");
	$applicationlevel1= mysql_result($result, 0, "ApplicationLevel1");
	$applicationlevel2= mysql_result($result, 0, "ApplicationLevel2");
	$comment3= mysql_result($result, 0, "Comment3");
	$comment4= mysql_result($result, 0, "Comment4");
	$competency1 = mysql_result($result, 0, "Competency1");
	$competency2 = mysql_result($result, 0, "Competency2");
	$competency3 = mysql_result($result, 0, "Competency3");
	$competency4 = mysql_result($result, 0, "Competency4");
	$comment5= mysql_result($result, 0, "Comment5");
	$comment6= mysql_result($result, 0, "Comment6");
	$comment7= mysql_result($result, 0, "Comment7");
	$comment8= mysql_result($result, 0, "Comment8");
	$quarteraverage= mysql_result($result, 0, "QuarterAverage");
	$quart4performance= mysql_result($result, 0, "Quarter4Average");
	$overallperform = mysql_result($result, 0, "OverallPerform");
	$comment9= mysql_result($result, 0, "Comment9");
	$comment10= mysql_result($result, 0, "Comment10");
	$comment11= mysql_result($result, 0, "Comment11");
	$name1= mysql_result($result, 0, "Name1");
	$name2= mysql_result($result, 0, "Name2");
	$name3= mysql_result($result, 0, "Name3");
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


<table width="97%" height="2176" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4FFE4" class="style27">
  <tr bgcolor="#D5EDB3">
    <td colspan="4" rowspan="2" bgcolor="#D5EDB3"><img src="k1390534[1].jpg" width="227" height="126" /></td>
    <td width="957" height="50" align="center" valign="bottom" nowrap="nowrap" bgcolor="#D5EDB3" class="pageName style1 style2" id="logo"> <div align="left">Annual Appraisal Interview</div></td>
    <td width="4">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" align="center" valign="top" bgcolor="#D5EDB3" id="tagline"><p align="left">&nbsp;</p>    </td>
	<td width="4">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="6" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
  <tr bgcolor="#99CC66">
  <td bgcolor="#D5EDB3">&nbsp;</td>
  	<td height="20" colspan="5" bgcolor="#D5EDB3" id="dateformat"><a href="welcome2.php">Return to Home page</a>&nbsp;&nbsp;&nbsp;&nbsp;
  	  <script language="JavaScript" type="text/javascript">;	</script>	</td>
  </tr>

  <tr>
  <tr>
    <td colspan="6" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" valign="top" bgcolor="#FFFFCC"><p>&nbsp;</p>
    <p>
      <?php
	 
			include("connection.inc");
			//Collecting info from the form and feeding to variables
			
			
			if (isset($_POST['Button1'])) {
			$dateofinterview = $_POST['textfield9'];
			$dateofprevinterview = $_POST['textfield10'];
			$lastname = $_POST['textfield'];
			$firstname = $_POST['textfield2'];
			$employeeno = $_POST['textfield3'];
			$grade = $_POST['textfield4'];
			$jobtitle = $_POST['textfield11'];
			$department = $_POST['textfield12'];
			$division = $_POST['textfield13'];
			$yrsonjob = $_POST['textfield14'];
			
			$objective1= $_POST['textarea11'];
			$objective2= $_POST['textarea13'];
			
			$compldate1= $_POST['textarea12'];
			$compldate2= $_POST['textarea20'];
			
			$attainmentlevel1 = $_POST['select6'];
			$attainmentlevel2 = $_POST['select7'];
														
			$comment1= $_POST['textarea10'];
			$comment2= $_POST['textarea16'];
			
			$qualification= $_POST['textarea'];
			$startyear= $_POST['textfield5'];
			$completionyear= $_POST['textfield6'];
					
		
			$course1= $_POST['textarea25'];
			$course2= $_POST['textarea26'];
					
			$applicationlevel1= $_POST['select11'];
			$applicationlevel2= $_POST['select12'];
		
			$comment3= $_POST['textarea22'];
			$comment4= $_POST['textarea23'];
					
			$competency1 = $_POST['select1'];
			$competency2 = $_POST['select3'];
			$competency3 = $_POST['select4'];
			$competency4 = $_POST['select5'];
			$comment5= $_POST['textarea3'];
			$comment6= $_POST['textarea4'];
			$comment7= $_POST['textarea5'];
			$comment8= $_POST['textarea9'];
			
		    $quarteraverage= $_POST['textfield7'];
			$quart4performance= $_POST['select2'];
			$overallperform= $_POST['select'];
			
			$comment9= $_POST['textarea29'];
			$comment10= $_POST['textarea31'];
			$comment11= $_POST['textarea32'];
				
			$name1= $_POST['textarea28'];
			$name2= $_POST['textarea45'];
			$name3= $_POST['textarea17'];
			
			$sqll = "DELETE FROM `annualappraisal` WHERE `FirstName` = '$firstname' AND `LastName` = '$lastname' AND `DateOfInterview` = '$dateofinterview'";
			$resullt = mysql_query($sqll);
			
			//Insert values into database table called annualappraisal
			$sql = "INSERT INTO `annualappraisal` VALUES('$dateofinterview', '$dateofprevinterview', '$lastname', '$firstname', '$employeeno', '$grade', '$jobtitle', '$department', '$division', '$yrsonjob', '$objective1', '$objective2', '$compldate1', '$compldate2', '$attainmentlevel1', '$attainmentlevel2', '$comment1', '$comment2', '$qualification', '$startyear', '$completionyear', '$course1', '$course2', '$applicationlevel1', '$applicationlevel2', '$comment3', '$comment4', '$competency1', '$competency2', '$competency3',	'$competency4', '$comment5', '$comment6', '$comment7', '$comment8', '$quarteraverage', '$quart4performance', '$overallperform', '$comment9', '$comment10', '$comment11', '$name1', '$name2', '$name3', 'not submitted')";
			
			$result = mysql_query($sql);
			
			}
			
			
			
			
			//Code for the Submit button
			if (isset($_POST['Button2'])) {
			
			$dateofinterview = $_POST['textfield9'];
			$dateofprevinterview = $_POST['textfield10'];
			$lastname = $_POST['textfield'];
			$firstname = $_POST['textfield2'];
			$employeeno = $_POST['textfield3'];
			$grade = $_POST['textfield4'];
			$jobtitle = $_POST['textfield11'];
			$department = $_POST['textfield12'];
			$division = $_POST['textfield13'];
			$yrsonjob = $_POST['textfield14'];
			
			$objective1= $_POST['textarea11'];
			$objective2= $_POST['textarea13'];
			
			$compldate1= $_POST['textarea12'];
			$compldate2= $_POST['textarea20'];
			
			$attainmentlevel1 = $_POST['select6'];
			$attainmentlevel2 = $_POST['select7'];
											
			$comment1= $_POST['textarea10'];
			$comment2= $_POST['textarea16'];
			
			$qualification= $_POST['textarea'];
			$startyear= $_POST['textfield5'];
			$completionyear= $_POST['textfield6'];
					
		
			$course1= $_POST['textarea25'];
			$course2= $_POST['textarea26'];
					
			$applicationlevel1= $_POST['select11'];
			$applicationlevel2= $_POST['select12'];
		
			$comment3= $_POST['textarea22'];
			$comment4= $_POST['textarea23'];
					
			$competency1 = $_POST['select1'];
			$competency2 = $_POST['select3'];
			$competency3 = $_POST['select4'];
			$competency4 = $_POST['select5'];
			$comment5= $_POST['textarea3'];
			$comment6= $_POST['textarea4'];
			$comment7= $_POST['textarea5'];
			$comment8= $_POST['textarea9'];
			
		    $quarteraverage= $_POST['textfield7'];
			$quart4performance= $_POST['select2'];
			$overallperform= $_POST['select'];
			
			$comment9= $_POST['textarea29'];
			$comment10= $_POST['textarea31'];
			$comment11= $_POST['textarea32'];
				
			$name1= $_POST['textarea28'];
			$name2= $_POST['textarea45'];
			$name3= $_POST['textarea17'];
			
			if ($_SESSION['category'] == "Appraiser") {
			$sqq = "DELETE FROM `annualappraisal` WHERE `FirstName` = '$firstname' AND `LastName` = '$lastname' AND `DateOfInterview` = '$dateofinterview'";
			$resull = mysql_query($sqq);
			$sql = "INSERT INTO `annualappraisal` VALUES('$dateofinterview', '$dateofprevinterview', '$lastname', '$firstname', '$employeeno', '$grade', '$jobtitle', '$department', '$division', '$yrsonjob', '$objective1', '$objective2', '$compldate1', '$compldate2', '$attainmentlevel1', '$attainmentlevel2', '$comment1', '$comment2', '$qualification', '$startyear', '$completionyear', '$course1', '$course2', '$applicationlevel1', '$applicationlevel2', '$comment3', '$comment4', '$competency1', '$competency2', '$competency3',	'$competency4', '$comment5', '$comment6', '$comment7', '$comment8', '$quarteraverage', '$quart4performance', '$overallperform', '$comment9', '$comment10', '$comment11', '$name1', '$name2', '$name3', 'Submit1')";
			$result = mysql_query($sql);
			}
			
			
			
			if ($_SESSION['category'] == "Senior Manager") {
			$sqq = "DELETE FROM `annualappraisal` WHERE `FirstName` = '$firstname' AND `LastName` = '$lastname' AND `DateOfInterview` = '$dateofinterview'";
			$resull = mysql_query($sqq);
			$sql = "INSERT INTO `annualappraisal` VALUES('$dateofinterview', '$dateofprevinterview', '$lastname', '$firstname', '$employeeno', '$grade', '$jobtitle', '$department', '$division', '$yrsonjob', '$objective1', '$objective2', '$compldate1', '$compldate2', '$attainmentlevel1', '$attainmentlevel2', '$comment1', '$comment2', '$qualification', '$startyear', '$completionyear', '$course1', '$course2', '$applicationlevel1', '$applicationlevel2', '$comment3', '$comment4', '$competency1', '$competency2', '$competency3',	'$competency4', '$comment5', '$comment6', '$comment7', '$comment8', '$quarteraverage', '$quart4performance', '$overallperform', '$comment9', '$comment10', '$comment11', '$name1', '$name2', '$name3', 'Submit2')";
			$result = mysql_query($sql);
			}
			
			
			
			if ($_SESSION['category'] == "Appraisee") {
			$sqq = "DELETE FROM `annualappraisal` WHERE `FirstName` = '$firstname' AND `LastName` = '$lastname' AND `DateOfInterview` = '$dateofinterview'";
			$resull = mysql_query($sqq);
			$sql = "INSERT INTO `annualappraisal` VALUES('$dateofinterview', '$dateofprevinterview', '$lastname', '$firstname', '$employeeno', '$grade', '$jobtitle', '$department', '$division', '$yrsonjob', '$objective1', '$objective2', '$compldate1', '$compldate2', '$attainmentlevel1', '$attainmentlevel2', '$comment1', '$comment2', '$qualification', '$startyear', '$completionyear', '$course1', '$course2', '$applicationlevel1', '$applicationlevel2', '$comment3', '$comment4', '$competency1', '$competency2', '$competency3',	'$competency4', '$comment5', '$comment6', '$comment7', '$comment8', '$quarteraverage', '$quart4performance', '$overallperform', '$comment9', '$comment10', '$comment11', '$name1', '$name2', '$name3', 'Submit4')";
			$result = mysql_query($sql);
			}
			}
		  ?>
</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="6" height="1906">&nbsp; </td>
    <td colspan="4" valign="top" bgcolor="#FFFFCC">&nbsp;&nbsp;
      
        <table width="830" height="51" border="0">
        <tr>
          <td width="107" height="47" class="style27">Date of Appraisal Interview</td>
          <td width="144"><label>
            <input type="text" name="textfield9" id="textfield9" value="<?php echo $dateofinterview;?>"/>
          </label></td>
          <td width="9" class="style27">&nbsp;</td>
          <td width="44"><label><span class="style27">Select  date </span></label></td>
          <td width="41" class="style27"><label>
            <select name="select100" id="select100">
              <?php
		
   $sql1 = "SELECT * FROM `annualappraisal` WHERE `LastName` = '$ded[0]' AND `FirstName` = '$ded[1]'";
	$result1 = mysql_query($sql1);
	
	if (mysql_num_rows($result1) > 0) {
	for ($r = 0; $r <= mysql_num_rows($result1)-1; $r++) {
	$date = mysql_result($result1, $r, "DateOfInterview");
	?>
              <option><?php echo $date ?></option>
              <?php
	}
	}
	if (isset($_POST['button2']))	{
	$daat = $_POST['select100'];
	 $sql = "SELECT * FROM `annualappraisal` WHERE `LastName` = '$ded[0]' AND `FirstName` = '$ded[1]'  AND `DateOfInterview` = '$daat' AND `SubmitType` = 'not submitted'";
	$result = mysql_query($sql);

	if (mysql_num_rows($result) > 0) {
	$dateofinterview = mysql_result($result, 0, "DateOfInterview");
	$dateofprevinterview = mysql_result($result, 0, "DateOfPrevInterview");
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
	$course1 = mysql_result($result, 0, "Course1");
	$course2 = mysql_result($result, 0, "Course2");
	$compldate1 = mysql_result($result, 0, "ComplDate1");
	$compldate2 = mysql_result($result, 0, "ComplDate2");
	$attainmentlevel1 = mysql_result($result, 0, "AttainmentLevel1");
	$attainmentlevel2 = mysql_result($result, 0, "AttainmentLevel2");
	$comment1 = mysql_result($result, 0, "Comment1");
	$comment2 = mysql_result($result, 0, "Comment2");
	$qualification = mysql_result($result, 0, "Qualification");
	$startyear = mysql_result($result, 0, "StartYear");
	$completionyear = mysql_result($result, 0, "CompletionYear");
	$applicationlevel1= mysql_result($result, 0, "ApplicationLevel1");
	$applicationlevel2= mysql_result($result, 0, "ApplicationLevel2");
	$comment3= mysql_result($result, 0, "Comment3");
	$comment4= mysql_result($result, 0, "Comment4");
	$competency1 = mysql_result($result, 0, "Competency1");
	$competency2 = mysql_result($result, 0, "Competency2");
	$competency3 = mysql_result($result, 0, "Competency3");
	$competency4 = mysql_result($result, 0, "Competency4");
	$comment5= mysql_result($result, 0, "Comment5");
	$comment6= mysql_result($result, 0, "Comment6");
	$comment7= mysql_result($result, 0, "Comment7");
	$comment8= mysql_result($result, 0, "Comment8");
	$quarteraverage= mysql_result($result, 0, "QuarterAverage");
	$quart4performance= mysql_result($result, 0, "Quarter4Average");
	$overallperform= mysql_result($result, 0, "OverallPerform");
	$comment9= mysql_result($result, 0, "Comment9");
	$comment10= mysql_result($result, 0, "Comment10");
	$comment11= mysql_result($result, 0, "Comment11");
	$name1= mysql_result($result, 0, "Name1");
	$name2= mysql_result($result, 0, "Name2");
	$name3= mysql_result($result, 0, "Name3");
	}
	}
	?>
            </select>
          </label></td>
          <td width="67"><label>
            <input type="submit" name="button2" id="button2" value="Enter" />
          </label></td>
          <td width="138">Date of previous Appraisal Interview</td>
          <td width="246"><label>
            <input type="text" name="textfield10" id="textfield10" value= "<?php echo $dateofprevinterview?>"/>
          </label></td>
        </tr>
      </table>
        <table width="1010" height="40" border="0">
        <tr>
          <td width="1004" height="26" class="style12"><table width="900" height="36" border="1">
            <tr>
              <td width="1145"><div align="center" class="style24">EMPLOYEE INFORMATION</div></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table border="0" cellspacing="0" cellpadding="2" width="766">
        <tr>
          <td width="466" class="pageName style6"><table width="317" border="0">
            <tr>
              <td width="113" class="style46">Last Name</td>
              <td width="343"><label>
                <input type="text" name="textfield" id="textfield" value= "<?php echo $ded[0] ?>"/>
              </label></td>
              </tr>
            <tr>
              <td class="style46">First Name</td>
              <td><label>
                <input type="text" name="textfield2" id="textfield2" value= "<?php echo $ded[1] ?>"/>
              </label></td>
              </tr>
            <tr>
              <td class="style46">Employee Number</td>
              <td><label>
                <input type="text" name="textfield3" id="textfield3" value= "<?php echo $employeeno?>"/>
              </label></td>
              </tr>
            <tr>
              <td class="style46">Level/Grade</td>
              <td><label>
                <input type="text" name="textfield4" id="textfield4" value= "<?php echo $grade?>"/>
              </label></td>
              </tr>

          </table></td>
          <td width="399" valign="top" class="pageName style6">
            <table width="287" border="0">
              <tr>
                <td width="125" class="style46">Job Title</td>
                <td width="152"><label>
                  <input type="text" name="textfield11" id="textfield11" value= "<?php echo $jobtitle?>"/>
                </label></td>
              </tr>
              <tr>
                <td><span class="style46">Department</span></td>
                <td><label>
                  <input type="text" name="textfield12" id="textfield12" value= "<?php echo $department?>" />
                </label></td>
              </tr>
              <tr>
                <td class="style46">Division</td>
                <td><label>
                  <input type="text" name="textfield13" id="textfield13" value= "<?php echo $division?>"/>
                </label></td>
              </tr>
              <tr>
                <td class="style46">Years on Job Function</td>
                <td><label>
                  <input type="text" name="textfield14" id="textfield14" value= "<?php echo $yrsonjob?>"/>
                </label></td>
              </tr>
            </table>          </td>
          <td width="6" class="pageName style6">&nbsp;</td>
        </tr>
        <tr>
          <td height="24" valign="top" class="bodyText style6">&nbsp;</td>
          <td valign="top" class="bodyText style6">&nbsp;</td>
          <td class="bodyText style6">&nbsp;</td>
        </tr>
      </table>
	    <p align="left"><a href="NewObjectives.php" class="style68">Define New Objectives and Development Plans</a></p>
	    <div align="center"></div>
	    <table width="900" height="63" border="1">
          <tr>
            <td height="57"><p align="center" class="style24">REVIEW OF  OBJECTIVES </p>
            <p align="center" class="style24 style46">Key: 4 = Exceeded (100% +); 3 = Met (75%); 2 = Partially Met (50%), 1 = Did not meet (25%)</p></td>
          </tr>
        </table>
	    <table width="779" height="237" border="0">
        <tr>
          <td width="197"><div align="center">Objective</div></td>
          <td width="77"><div align="center">Completion Date </div></td>
          <td width="172"><div align="center">Level of Attainment of Objectives</div></td>
          <td width="99"><div align="center">% Rating </div></td>
          <td width="212"><div align="center">Comments</div></td>
        </tr>
        <tr>
          <td height="87" align="center" valign="top"><p class="style8"><strong>
              <label> </label>
            </strong>1</p>
              <p align="center" class="style8">
                <label>
                <textarea name="textarea11" id="textarea11" cols="30" rows="3"><?php echo $objective1; ?></textarea>
                </label>
              </p>
            <label></label>
              <label></label></td>
          <td><label>
            <textarea name="textarea12" id="textarea12" cols="10" rows="3"><?php echo $compldate1?></textarea>
          </label></td>
          <td><p>
              <label>
              <div align="center">
                <div align="center">
                  <select name="select6" id="select6">
                    <option>Select Attainment</option>
                    <option>4</option>
                    <option>3</option>
                    <option>2</option>
                    <option>1</option>
                                    </select>
                </div>
              </label>
            <p align="center">&nbsp; </p></td>
          <td><label>
            
              <div align="center">
                <input name="textfield8" type="text" id="textfield8" size="5" />
                  </div>
          </label></td>
          <td><label>
            <div align="center">
              <textarea name="textarea10" id="textarea10" cols="30" rows="3"><?php echo $comment1?></textarea>
            </div>
            <div align="center"></div>
          </label></td>
        </tr>
        <tr>
          <td height="87" align="center" valign="top"><p>2
            </p>
            <p>
              <textarea name="textarea13" id="textarea13" cols="30" rows="3"><?php echo $objective2; ?></textarea>
              </p></td>
          <td><textarea name="textarea20" id="textarea19" cols="10" rows="3"><?php echo $compldate2; ?></textarea></td>
          <td><p align="center">
              <select name="select7" id="select7">
                <option>Select Attainment</option>
                <option>4</option>
                <option>3</option>
                <option>2</option>
                <option>1</option>
              </select>
            </p></td>
          <td><div align="center">
            <input name="textfield15" type="text" id="textfield15" size="5" />            
          </div></td>
          <td><div align="center">
            <textarea name="textarea16" id="textarea16" cols="30" rows="3"><?php echo $comment2; ?></textarea>
          </div></td>
        </tr>
      </table>
	  <p><a href="QuarterlyReview.php">View Quarterly review of objectives</a></p>
	  <table width="900" height="63" border="1">
        <tr>
          <td height="57"><p align="center" class="style24">REVIEW OF  DEVELOPMENT PLANS </p></td>
        </tr>
      </table>
	  <table width="889" border="0">
          <tr>
            <td width="883"><div align="center" class="style33">ADDITIONAL EDUCATIONAL QUALIFICATION</div></td>
          </tr>
        </table>
        <table width="678" border="0">
          <tr>
            <td width="225"><div align="center"><strong>QUALIFICATION</strong></div></td>
            <td width="184"><div align="center"><strong>YEAR OF START</strong></div></td>
            <td width="423"><div align="center"><strong>YEAR OF COMPLETION</strong></div></td>
          </tr>
          <tr>
            <td height="39"><label>
              <textarea name="textarea" id="textarea" cols="30" rows="2"><?php echo $qualification; ?></textarea>
            </label></td>
            <td><label>
              <div align="center">
                <input type="text" name="textfield5" id="textfield5" value="<?php echo $startyear; ?>"/>
              </div>
            </label></td>
            <td><label>
              <div align="center">
                <input type="text" name="textfield6" id="textfield6" value="<?php echo $completionyear; ?>"/>
              </div>
            </label></td>
          </tr>
        </table>
        <table width="844" height="22" border="0">
          <tr>
            <td width="857"><div align="center"><span class="style48">TRAININGS RECOMMENDED DURING THE LAST APPRAISAL INTERVIEW AND THEIR LEVEL OF ATTAINMENT</span></div></td>
          </tr>
        </table>
        <table width="945" border="0">
          <tr><td width="939"><table width="846" height="189" border="0">
          <tr>
            <td width="305" height="39"><div align="center">COURSE TITLE</div></td>
            <td width="272"><div align="center">LEVEL OF APPLICATION OF COURSES ATTENDED</div></td>
            <td width="255"><div align="center">COMMENTS(has the employee attended the courses recommended during last appraisal or not?)</div></td>
          </tr>
          <tr>
            <td height="52" valign="top"><label> </label>
                <div align="center"><strong>1 </strong><br />
                    <textarea name="textarea25" id="textarea25" cols="30" rows="2"><?php echo $course1; ?></textarea>
              </div></td>
            <td><label>
              <div align="center">
                <select name="select11" id="select11">
                  <option>Select Application Level</option>
                  <option <?php if ($applicationlevel1 == "Very Substantial") {?>selected="selected"<?php } ?>>Very Substantial</option>
                  <option  <?php if ($applicationlevel1 == "Substantial") {?>selected="selected"<?php } ?>>Substantial</option>
                  <option  <?php if ($applicationlevel1 == "Moderate") {?>selected="selected"<?php } ?>>Moderate</option>
                  <option  <?php if ($applicationlevel1 == "Not Applicable") {?>selected="selected"<?php } ?>>Not Applicable</option>
                </select>
                </div>
            </label></td>
            <td><label>
              <textarea name="textarea22" id="textarea22" cols="30" rows="2"><?php echo $comment3; ?></textarea>
            </label></td>
          </tr>
          <tr>
            <td height="90" align="center" valign="top"><p>
              <label></label>
                <label></label>
              <label></label>
              <label></label>
                <strong>2 </strong></p>
                <p>
                  <label>
                  <textarea name="textarea26" id="textarea26" cols="30" rows="2"><?php echo $course2; ?></textarea>
                  </label>
                </p>
              <div align="center"></div>
              <div align="left"></div>
              <div align="center"></div>
              <div align="center"></div></td>
            <td><label>
              <div align="center">
                <select name="select12" id="select12">
                  <option>Select Application Level</option>
                  <option <?php if ($applicationlevel2 == "Very Substantial") {?>selected="selected"<?php } ?>>Very Substantial</option>
                  <option  <?php if ($applicationlevel2 == "Substantial") {?>selected="selected"<?php } ?>>Substantial</option>
                  <option  <?php if ($applicationlevel2 == "Moderate") {?>selected="selected"<?php } ?>>Moderate</option>
                  <option  <?php if ($applicationlevel2 == "Not Applicable") {?>selected="selected"<?php } ?>>Not Applicable</option>
                </select>
                </div>
            </label>
              <div align="center"></div></td>
            <td><label>
              <textarea name="textarea23" id="textarea23" cols="30" rows="2"><?php echo $comment4; ?></textarea>
            </label></td>
          </tr>
          
          
        </table></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="900" height="114" border="1">
          <tr>
            <td width="1153" height="108" valign="top"><p align="center" class="style47"><span class="style24">REVIEW OF PERSONAL ATTRIBUTES</span></p>
              <p align="justify" class="style47"><span class="style48">INSTRUCTIONS</span>: Describe the employee's contribution in each of the performance categories below. It is imperative that you illustrate specific, detailed examples since the last performance evaluation (for staffs that have worked more than one year with the organisation). Ratings MUST support and be substantiated by narrative comments.</p>
            <p class="style8">&nbsp;</p></td>
          </tr>
        </table>
        <table width="793" height="311" border="0">
          <tr>
            <td width="331" height="31"><div align="center" class="style34">Competency</div></td>
            <td width="146"><div align="center"> Rating</div></td>
            <td width="302" class="style33"><div align="center" class="style27">Comment</div></td>
          </tr>
          <tr>
            <td height="67" valign="middle" class="style9"><blockquote>
                <p align="justify"><span class="style21">Job Knowledge:</span> <span class="style8">Possess skills and knowledge to perform the job competently</span></p>
            </blockquote></td>
          <td><label>
                <div align="center"></div>
              </label>            <label>
              <div align="center">
                <select name="select1" id="select1">
                  <option>Select Rating</option>
                  <option  <?php if ($competency1 == "To improve") {?>selected="selected"<?php } ?>>To improve</option>
                  <option  <?php if ($competency1 == "Satisfactory") {?>selected="selected"<?php } ?>>Satisfactory</option>
                  <option  <?php if ($competency1 == "Strong") {?>selected="selected"<?php } ?>>Strong</option>
                </select>
              </div>
              </label></td>
            <td><label>
                <div align="center">
                  <textarea name="textarea3" id="textarea3" cols="30" rows="2"><?php echo $comment5; ?></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="67" valign="middle"><blockquote>
                <p align="justify"><span class="style20">Communication Skill: <span class="style27">Organises and expresses ideas and information clearly, using appropriate and effecient methods of conveying the information</span></span></p>
            </blockquote></td>
          <td><label>
                <label>
                <div align="center">
                  <select name="select3" id="select3">
                    <option>Select Rating</option>
                  <option  <?php if ($competency2 == "To improve") {?>selected="selected"<?php } ?>>To improve</option>
                  <option  <?php if ($competency2 == "Satisfactory") {?>selected="selected"<?php } ?>>Satisfactory</option>
                  <option  <?php if ($competency2 == "Strong") {?>selected="selected"<?php } ?>>Strong</option>
                  </select>
                </div>
                </label>
                <div align="center"></div>
              </label>            </td>
            <td><label>
                <div align="center">
                  <textarea name="textarea4" id="textarea4" cols="30" rows="2"><?php echo $comment6; ?></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="67" valign="middle"><blockquote>
                <p align="justify"><span class="style28"><span class="style30">Interpersonal Skills</span>: <span class="style8">Is sensitive to the needs, feelings and capabilities of others. Approaches others in a non-threatening and pleasant manner and treats them with respect</span></span></p>
            </blockquote></td>
            <td><label></label>            <label>
              <div align="center">
                <select name="select4" id="select4">
                  <option>Select Rating</option>
                  <option  <?php if ($competency3 == "To improve") {?>selected="selected"<?php } ?>>To improve</option>
                  <option  <?php if ($competency3 == "Satisfactory") {?>selected="selected"<?php } ?>>Satisfactory</option>
                  <option  <?php if ($competency3 == "Strong") {?>selected="selected"<?php } ?>>Strong</option>
                </select>
              </div>
            </label></td>
            <td><label>
                <div align="center">
                  <textarea name="textarea5" id="textarea5" cols="30" rows="2"><?php echo $comment7; ?></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="67" valign="middle"><blockquote>
                <p align="justify"><span class="style20">Initiative:</span><span class="style8"> Strives to learn and improve. Seeks out ways to better themselves and the company. Takes on responsibilities. Does not remain idle - is hard working. Self - motivated.</span></p>
            </blockquote></td>
            <td><label>
              <label>
              <div align="center">
                <select name="select5" id="select5">
                  <option selected="selected">Select Rating</option>
                  <option  <?php if ($competency4 == "To improve") {?>selected="selected"<?php } ?>>To improve</option>
                  <option  <?php if ($competency4 == "Satisfactory") {?>selected="selected"<?php } ?>>Satisfactory</option>
                  <option  <?php if ($competency4 == "Strong") {?>selected="selected"<?php } ?>>Strong</option>
                </select>
              </div>
              </label>
              <div align="center"></div>
              <div align="center"></div></td>
            <td><label>
                <div align="center">
                  <textarea name="textarea9" id="textarea9" cols="30" rows="2"><?php echo $comment8; ?></textarea>
                </div>
              </label>            </td>
          </tr>
        </table>
        <table width="1000" height="67" border="1">
          <tr>
            <td height="61"><p align="center"><span class="style24">OVERALL PERFORMANCE RATING</span></p>
            <p align="center" class="style24">&nbsp;</p></td>
          </tr>
        </table>
        <table width="898" border="0">
          <tr>
            <td width="69" height="77" bordercolor="0"><span class="style67">Average  Semi Annual performance  </span></td>
            <td width="144"><label>
              <input type="text" name="textfield7" id="textfield7" value="<?php echo $quarteraverage; ?>"/>
            </label></td>
            <td width="70"><span class="style67">Performance in the 4th Quarter (annual appraisal)</span></td>
            <td width="316"><label>
              <div align="center">
                <select name="select2" id="select2">
                  <option>Select 4th Quarter Performance Rating</option>
                  <option <?php if ($quart4performance == "exceeds most expectations") {?>selected="selected"<?php } ?>>Exceeds most Expectations</option>
                  <option <?php if ($quart4performance == "exceeds some expectations") {?>selected="selected"<?php } ?>>Exceeds some Expectations</option>
                  <option <?php if ($quart4performance == "meets all expectations") {?>selected="selected"<?php } ?>>Meets all Expectations</option>
                  <option <?php if ($quart4performance == "meets some expectations") {?>selected="selected"<?php } ?>>Meets some Expectations</option>
                  <option <?php if ($quart4performance == "below expectations") {?>selected="selected"<?php } ?>>Below Expectations</option>
                </select>
                <br />
                Averarge performance
                <input type="text" name="textfield16" id="textfield16" />
              </div>
            </label></td>
            <td width="111"><span class="style64">Employee overall performance:</span></td>
            <td width="230"><select name="select" id="select">
              <option>Final Performance Rating</option>
              <option <?php if ($overallperform == "Exceptional") {?>selected="selected"<?php } ?>>Exceptional</option>
              <option <?php if ($overallperform == "Very Good") {?>selected="selected"<?php } ?>>Very Good</option>
              <option <?php if ($overallperform == "Good") {?>selected="selected"<?php } ?>>Good</option>
              <option <?php if ($overallperform == "Fairly Satisfactory") {?>selected="selected"<?php } ?>>Fairly Satisfactory</option>
              <option <?php if ($overallperform == "Unsatisfactory") {?>selected="selected"<?php } ?>>Unsatisfactory</option>
               </select></td>
          </tr>
        </table>
        <table width="964" border="0">
          <tr>
            <td width="958"><div align="center" class="style24">COMMENTS</div></td>
          </tr>
        </table>
        <table width="826" border="0">
          <tr>
            <td width="274"><div align="center">COMMENTS BY FIRST LINE MANAGER</div></td>
            <td width="268"><div align="center">COMMENTS BY SENIOR MANAGER</div></td>
            <td width="270"><div align="center">COMMENTS BY EMPLOYEE</div></td>
          </tr>
          <tr>
            <td height="37"><label>
              <div align="center">
                <textarea name="textarea29" id="textarea29" cols="30" rows="2"> <?php echo $comment9; ?></textarea>
                </div>
            </label></td>
            <td><label>
              <div align="center">
                <textarea name="textarea31" id="textarea31" cols="30" rows="2" ><?php echo $comment10; ?></textarea>
                </div>
            </label></td>
            <td><label>
              <div align="center">
                <textarea name="textarea32" id="textarea32" cols="30" rows="2" ><?php echo $comment11; ?></textarea>
              </div>
            </label></td>
          </tr>
          <tr>
            <td height="87"><table width="274" height="73" border="0">
              <tr>
                <td width="43" height="67">NAME:</td>
                <td width="221"><label>
                  <input name="textarea28" type="text" id="textarea28" size="35" value="<?php echo $name1 ?>"/>
                </label></td>
              </tr>
            </table>
            <label></label></td>
            <td align="left" valign="middle"><label></label>
              <p align="center"><label></label>
              <label></label>
                <label>                </label>
              <table width="257" height="48" border="0">
        <tr>
                    <td width="37" height="44" valign="baseline">NAME</td>
<td width="210" valign="top"><label>
  <input name="textarea45" type="text" id="textarea45" size="35" value="<?php echo $name2 ?>" />
</label></td>
                </tr>
              </table>
      <label>
                <div align="left">
                </label>
            <label></label></td>
            <td><table width="260" height="70" border="0">
              <tr>
                <td width="40" height="66">NAME:</td>
                <td width="210"><label>
                  <input name="textarea17" type="text" id="textarea30" size="35" value="<?php echo $name3; ?>" />
                </label></td>
              </tr>
            </table></td>
          </tr>
        </table>
	    <table width="510" border="0">
          <tr>
            <td width="281"><label> </label>
                <div align="center">
                  <input name="Button1" type="submit" class="style2" id="Button1" value="Save" />
            </div></td>
          <td width="358"><label> </label>
                <div align="center">
                  <p>
                    <input name="Button2" type="submit" class="style2" id="Button2" value="Submit" />
                  </p>
                </div></td>
          </tr>
        </table>
	    <label></label>
    <label> </label></td>
    <td width="4">&nbsp;</td>
 </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td colspan="4" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="19">&nbsp;</td>
    <td colspan="4" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

 <tr>
    <td width="6" height="30">&nbsp;</td>
    <td width="37" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="207" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="50" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="957" bgcolor="#FFFFFF">&nbsp;</td>
	<td width="4">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
