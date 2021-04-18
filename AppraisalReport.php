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
.style48 {
	font-size: 14px;
	font-weight: bold;
}
.style64 {
	font-size: 18px;
	font-weight: bold;
	color: #0000FF;
}
.style68 {
	color: #000000;
	font-size: 16px;
	font-weight: bold;
}
.style69 {
	color: #000000;
	font-size: 14px;
	font-weight: bold;
}
.style74 {font-size: 14; font-weight: bold; color: #000000; }
.style76 {color: #000000}
.style79 {font-size: 14px; font-weight: bold; color: #666666; }
.style83 {font-size: 14; font-weight: bold; }
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<form id="form1" name="form1" method="post" action="">
   <?php
   include("connection.inc");
   $appraisee = $_SESSION['appraisee'];
   $ded = split(" ", $appraisee);
   $dater = $_SESSION['dater'];


   
   $sql = "SELECT * FROM `annualappraisal` WHERE `LastName` = '$ded[0]' AND `FirstName` = '$ded[1]' AND `DateOfInterview` = '$dater';";
	$result = mysql_query($sql);
	
	if (mysql_num_rows($result) > 0) {
	$date = mysql_result($result, 0, "DateOfInterview");
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
	$competency1 = mysql_result($result, 0, "Competency1");
	$competency2 = mysql_result($result, 0, "Competency2");
	$competency3 = mysql_result($result, 0, "Competency3");
	$competency4 = mysql_result($result, 0, "Competency4");
	$comment9 = mysql_result($result, 0, "Comment9");
	$comment10 = mysql_result($result, 0, "Comment10");
	$comment11 = mysql_result($result, 0, "Comment11");
	$compldate1 = mysql_result($result, 0, "ComplDate1");
	$compldate2 = mysql_result($result, 0, "ComplDate2");
	$appliclevel1 = mysql_result($result, 0, "ApplicationLevel1");
	$appliclevel2 = mysql_result($result, 0, "ApplicationLevel2");
	$attainmentlevel1 = mysql_result($result, 0, "AttainmentLevel1");
	$attainmentlevel2 = mysql_result($result, 0, "AttainmentLevel2");
	$name1 = mysql_result($result, 0, "Name1");
	$name2 = mysql_result($result, 0, "Name2");
	$name3 = mysql_result($result, 0, "Name3");
	$avperf = mysql_result($result, 0, "QuarterAverage");
	$av4perf = mysql_result($result, 0, "Quarter4Average");
	$overallperf = mysql_result($result, 0, "OverallPerform");
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


<table width="98%" height="1503" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4FFE4" class="style27">
  <tr bgcolor="#D5EDB3">
    <td colspan="4" rowspan="2" bgcolor="#CCFF99">&nbsp;</td>
    <td width="752" height="50" align="center" valign="bottom" nowrap="nowrap" bgcolor="#CCFF99" class="pageName style1 style2" id="logo"> <div align="left">Appraisal Report</div></td>
    <td width="4">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="51" align="center" valign="top" bgcolor="#CCFF99" id="tagline"><p align="left">&nbsp;</p>    </td>
	<td width="4">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="6" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
  <tr bgcolor="#99CC66">
  <td>&nbsp;</td>
  	<td colspan="5" id="dateformat" height="20"><a href="welcome2.php">Return to Home page</a>&nbsp;&nbsp;&nbsp;&nbsp;
  	  <script language="JavaScript" type="text/javascript">;	</script>	</td>
  </tr>

  <tr>
  <tr>
    <td colspan="6" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="4" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="154" height="1248">&nbsp; </td>
<td colspan="4" valign="top" bgcolor="#FFFFFF">&nbsp;&nbsp;
      
      <table width="894" height="22" border="0">
        <tr>
          <td width="212" class="style68">Date of Appraisal Interview</td>
          <td width="352"><label>
          <?php echo $date?>
          </label></td>
          <td width="231" class="style27">&nbsp;</td>
          <td width="81"><label>
          </label></td>
        </tr>
      </table>
      <table width="906" height="40" border="0">
        <tr>
          <td width="900" height="26" class="style12"><table width="900" height="36" border="1">
            <tr>
              <td width="1145"><div align="center" class="style24">EMPLOYEE INFORMATION</div></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table border="0" cellspacing="0" cellpadding="2" width="915">
        <tr>
          <td width="503" class="pageName style6"><table width="466" border="0">
            <tr>
              <td width="214" class="style69">Last Name:</td>
              <td width="242"><span class="style48">
                <label>
                  <?php echo $ded[0] ?>                  </label>
              </span></td>
            </tr>
            <tr>
              <td class="style69">First Name:</td>
              <td><span class="style48">
                <label><?php echo $ded[1] ?>                  </label>
              </span></td>
            </tr>
            <tr>
              <td class="style69">Employee Number:</td>
              <td><span class="style48">
                <label><?php echo $employeeno?>                  </label>
              </span></td>
            </tr>
            <tr>
              <td class="style69">Level/Grade:</td>
              <td><span class="style48">
                <label><?php echo $grade?>                  </label>
              </span></td>
            </tr>

          </table></td>
          <td width="399" valign="top" class="pageName style6">
            <table width="399" border="0">
              <tr>
                <td width="228" class="style69">Job Title:</td>
                <td width="161"><span class="style48">
                  <label><?php echo $jobtitle?>                  </label>
                </span></td>
              </tr>
              <tr>
                <td><span class="style69">Department:</span></td>
                <td><span class="style48">
                  <label><?php echo $department?>                  </label>
                </span></td>
              </tr>
              <tr>
                <td class="style69">Division:</td>
                <td><span class="style48">
                  <label><?php echo $division?>                  </label>
                </span></td>
              </tr>
              <tr>
                <td class="style69">Years on Job Function:</td>
                <td><span class="style48">
                  <label><?php echo $yrsonjob?>                  </label>
                </span></td>
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
	    <table width="900" border="1">
          <tr>
            <td width="1140" height="74"><div align="center" class="style24">
              <p>ACHIEVEMENT OF OBJECTIVES</p>
            </div></td>
          </tr>
      </table>
	  
	  <table width="900" height="152" border="0">
        <tr>
          <td width="564" height="32"><div align="center" class="style74">OBJECTIVE</div></td>
          <td width="571"><div align="left" class="style74">LEVEL OF ATTAINMENT OF OBJECTIVES</div></td>
        </tr>
        <tr>
          <td height="56" align="center" valign="top"><p class="style79">
              <label> </label>
            1</p>
              <p align="center" class="style79">
                <label>
<?php echo $objective1; ?>                </label>
            </p>
              <span class="style79">
              <label></label>
              <label></label>
              </span></td>
          <td valign="top"><span class="style79"><?php echo $attainmentlevel1 ?></span></td>
        </tr>
        <tr>
          <td height="56" align="center" valign="top"><p class="style79">2
            </p>
            <p class="style79">
          <?php echo $objective2; ?>            </p></td>
          <td valign="top"><span class="style79"><?php echo $attainmentlevel2 ?></span></td>
        </tr>
      </table>
	  <table width="900" height="63" border="1">
  <tr>
          <td width="1144" height="57" valign="middle"><div align="center"><span class="style24">
              <p>  DEVELOPMENT PLANS <span class="style52">              </p>
              </span>
                <p align="justify">&nbsp;</p>
          </div></td>
        </tr>
      </table>
      <table width="787" height="22" border="0">
    <tr>
          <td width="781"><div align="center" class="style76"><span class="style48">TRAININGS RECOMMENDED DURING THE LAST APPRAISAL INTERVIEW AND THEIR LEVEL OF ATTAINMENT</span></div></td>
        </tr>
      </table>
    <table width="715" border="0">
        <tr><td width="709"><table width="709" height="206" border="0">
          <tr>
            <td width="437" height="39"><div align="center" class="style74">COURSE TITLE</div></td>
            <td width="262"><div align="left" class="style74">LEVEL OF APPLICATION OF COURSES ATTENDED</div></td>
            </tr>
          <tr>
            <td height="48" valign="top"><span class="style83">
              <label> </label>
                </span>
              <div align="center" class="style83">1 <br />
                <?php echo $course1; ?>              </div></td>
            <td valign="top"><span class="style83">
              <label>
              <div align="left" class="style83"><?php echo $appliclevel1 ?></div>
              <span class="style83">
              </label>
              </span></td>
            </tr>
          <tr>
            <td height="109" align="center" valign="top"><p class="style83">
              <label></label>
                <label></label>
              <label></label>
              <label></label>
                2 </p>
              <p class="style83"><?php echo $course2 ?></p>
              <p class="style83">
                  <label></label>
              </p>
              <div align="left" class="style83"></div>
              <div align="center" class="style83"></div>
              <div align="center" class="style83"></div></td>
            <td valign="middle"><span class="style83">
              <label>              
              <?php echo $appliclevel2 ?>
            
          
          
        </table></td>
        </tr>
      </table>
    <table width="900" height="66" border="1">
          <tr>
            <td width="1153" height="60"><div align="center">
                <p class="style24">REVIEW OF PERSONAL ATTRIBUTES</p>
            </div></td>
          </tr>
      </table>
	    <table width="900" height="181" border="0">
          <tr>
            <td width="568" height="31"><div align="center" class="style69">COMPETENCY</div></td>
            <td width="571"> <div align="left" class="style69">RATING</div></td>
          </tr>
          <tr>
            <td height="37" valign="middle" class="style9"><blockquote>
                <p align="justify"><span class="style21">Job Knowledge:</span> <span class="style8">Possess skills and knowledge to perform the job competently</span>:</p>
            </blockquote></td>
          <td><span class="style48">
            <label><?php echo $competency1 ?>              </label>
            </span></td>
          </tr>
          <tr>
            <td height="38" valign="middle"><blockquote>
                <p align="justify"><span class="style20">Communication Skill: <span class="style27">Organises and expresses ideas and information clearly, using appropriate and effecient methods of conveying the information</span></span>:</p>
            </blockquote></td>
          <td><span class="style48">
            <label>
                <label><?php echo $competency2 ?>                </label>
          </span>
            <div align="center" class="style48"></div>
            <span class="style48">
            </label>            
            </span></td>
          </tr>
          <tr>
            <td height="23" valign="middle"><blockquote>
                <p align="justify"><span class="style28"><span class="style30">Interpersonal Skills</span></span>:</p>
            </blockquote></td>
            <td><span class="style48">
              <label><?php echo $competency3 ?></label>            
            <label>
            <div align="center" class="style48"></div>
              <span class="style48">
              </label>
            </span></td>
          </tr>
          <tr>
            <td height="38" valign="middle"><blockquote>
                <p align="justify"><span class="style20">Initiative:</span><span class="style8"> Strives to learn and improve. Seeks out ways to better themselves and the company. Takes on responsibilities. Does not remain idle - is hard working. Self - motivated.</span>:</p>
            </blockquote></td>
            <td><span class="style48"><?php echo $competency4 ?>
            <label>
            <label>
            <div align="center" class="style48"></div>
              <span class="style48">
              </label>
              </span>
              <div align="center" class="style48"></div>
            <div align="center" class="style48"></div></td>
          </tr>
      </table>
<table width="900" border="1">
          <tr>
            <td width="1148"><div align="center"><span class="style24">
              <p>OVERALL PERFORMANCE RATING</p>
              </span></div></td>
          </tr>
      </table>
    <table width="450" border="0">
          <tr>
            <td width="169" height="42"><span class="style64">Employee overall performance:</span></td>
            <td width="271"><span class="style48"><?php echo $overallperf ?></span></td>
        </tr>
      </table>
<table width="900" border="0">
<tr>
          <td width="880"><div align="center" class="style24">COMMENTS</div></td>
        </tr>
      </table>
    <table width="900" border="1">
<tr>
          <td width="353"><div align="center" class="style74">COMMENT BY FIRST LINE MANAGER</div></td>
          <td width="338"><div align="center" class="style74">COMMENT BY SENIOR MANAGER</div></td>
          <td width="329"><div align="center" class="style74">COMMENT BY EMPLOYEE</div></td>
        </tr>
          <tr>
            <td height="47"><span class="style48">
              <label><?php echo $comment9 ?>              </label>
            </span></td>
            <td><span class="style48">
              <label><?php echo $comment10 ?>              </label>
            </span></td>
            <td><span class="style48">
              <label><?php echo $comment11 ?></label>
            </span></td>
        </tr>
          <tr>
            <td height="73"><table width="287" height="48" border="0">
              <tr>
                <td width="89" height="44" class="style48"><div align="center">NAME:</div></td>
                <td width="188" class="style48">
                <label><?php echo $name1 ?>                  </label>                </td>
              </tr>
            </table>
              <span class="style48">
              <label></label>
            </span></td>
            <td align="left" valign="top"><span class="style48">
              <label></label>
            
            </span>
              <p align="center" class="style48">
                <label></label>
                <label></label>
                <label>                </label>
              
              <table width="260" height="32" border="0">
      <tr>
                <td width="72" height="28" valign="baseline" class="style48"><div align="center">NAME:</div></td>
<td width="178" valign="top" class="style48">
  <label><?php echo $name2 ?>  </label></td>
                </tr>
              </table>
              <span class="style48">
              <label>
                <div align="left">
                </label>
            <label></label></td>
            <td><table width="237" height="43" border="0">
              <tr>
                <td width="68" height="39" class="style48"><div align="center">NAME:</div></td>
                <td width="159" class="style48">
                <label><?php echo $name3 ?>                  </label>                </td>
              </tr>
            </table></td>
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
    <td width="154" height="15">&nbsp;</td>
    <td width="30" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="165" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="161" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="752" bgcolor="#FFFFFF">&nbsp;</td>
	<td width="4">&nbsp;</td>
  </tr>
</table>
</body>
</html>
