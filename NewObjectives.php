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
.style8 {font-size: 12px}
.style27 {
	color: #666666;
	font-size: 12px;
}
.style29 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0000;
}
.style31 {
	font-size: 14px;
	font-weight: bold;
	color: #000000;
}
.style33 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<form id="form1" name="form1" method="post" action="">
  
 
<table width="97%" height="908" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4FFE4" class="style27">
  <tr bgcolor="#D5EDB3">
    <td colspan="4" rowspan="2" valign="top" bgcolor="#D5EDB3"><p>&nbsp;</p>
      <p align="center" class="style29">NEW OBJECTIVES AND DEVELOPMENT PLANS</p></td>
    <td width="631" height="50" align="center" valign="bottom" nowrap="nowrap" bgcolor="#D5EDB3" class="pageName style1 style2" id="logo">&nbsp;</td>
    <td width="4">&nbsp;</td>
  </tr>

  <tr bgcolor="#D5EDB3">
    <td height="15" align="center" valign="top" bgcolor="#D5EDB3" id="tagline"><p align="left">&nbsp;</p>    </td>
	<td width="4">&nbsp;</td>
  </tr>

  <tr>
    <td colspan="6" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>

  <tr>
  <tr bgcolor="#99CC66">
  <td bgcolor="#D5EDB3">&nbsp;</td>
  	<td height="20" colspan="5" bgcolor="#D5EDB3" id="dateformat"><a href="AnnualAppraisal.php">Return to Home page</a>&nbsp;&nbsp;&nbsp;&nbsp;
  	  <script language="JavaScript" type="text/javascript">;	</script>	</td>
  </tr>

  <tr>
  <tr>
    <td colspan="6" bgcolor="#5C743D"><img src="mm_spacer.gif" alt="" width="1" height="2" border="0" /></td>
  </tr>
  <tr>
    <td height="53">&nbsp;</td>
    <td colspan="4" valign="top" bgcolor="#FFFFCC"><p>&nbsp;</p>
    <p>
      <?php
	 
			include("connection.inc");
			//Collecting info from the form and feeding to variables

			if (isset($_POST['button'])) {
			$date = $_POST['textfield9'];
					
			$objectivenew1 = $_POST['textarea33'];
			$compldatenew1 = $_POST['textarea34'];
			$indicatornew1 = $_POST['textarea35'];
			$commentnew1 = $_POST['textarea36'];
			$objectivenew2 = $_POST['textarea37'];
			$compldatenew2 = $_POST['textarea38'];
			$indicatornew2 = $_POST['textarea39'];
			$commentnew2 = $_POST['textarea40'];
		    $coursenew1 = $_POST['textarea41'];
			$commentnew3 = $_POST['textarea42'];
	  	    $coursenew2 = $_POST['textarea43'];	  	    
	        $commentnew4 = $_POST['textarea44'];
			
			
        
			//Insert values into database table called newobjectives
			$sql = "INSERT INTO `newobjectives` VALUES('$date', '$objectivenew1', '$compldatenew1', '$indicatornew1', '$commentnew1', '$objectivenew2', '$compldatenew2', '$indicatornew2', '$commentnew2', '$coursenew1', '$commentnew3', '$coursenew2', '$commentnew4')";
			
			$result = mysql_query($sql);
			
			}
			
			
		  ?>
</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="6" height="696">&nbsp; </td>
    <td colspan="4" valign="top" bgcolor="#FFFFCC">&nbsp;&nbsp;
      
        <table width="436" height="51" border="0">
        <tr>
          <td width="30" height="47" class="style27">Date:</td>
          <td width="162"><label>
            <input type="text" name="textfield9" id="textfield9" value="<?php echo $date;?>"/>
          </label></td>
          <td width="89"><span class="style33">Select Date</span></td>
          <td width="67"><label></select>
              <select name="select" id="select">
                <?php
	$appraisee = $_SESSION['objectivenew'];
   $ded = split(" ", $objectivenew);
		
   $sql1 = "SELECT * FROM `newobjectives` WHERE `FirstName` = '$ded[0]' AND `LastName` = '$ded[1]'";
	$result1 = mysql_query($sql1);
	
	if (mysql_num_rows($result1) > 0) {
	for ($r = 0; $r <= mysql_num_rows($result1)-1; $r++) {
	$date = mysql_result($result1, $r, "Date");
	?>
                <option><?php echo $date ?></option>
                <?php
	}
	}
	if (isset($_POST['buttonw']))	{
	$daat = $_POST['select'];
	 $sql = "SELECT * FROM `newobjectives` WHERE `FirstName` = '$ded[0]' AND `LastName` = '$ded[1]'  AND `Date` = '$daat'";
	$result = mysql_query($sql);

	if (mysql_num_rows($result) > 0) {
	$date = mysql_result($result, 0, "Date");
	$objectivenew1 = mysql_result($result, 0, "ObjectiveNew1");
	$compldatenew1 = mysql_result($result, 0, "CompldateNew1");
	$indicatornew1 = mysql_result($result, 0, "IndicatorNew1");
	$commentnew1 = mysql_result($result, 0, "CommentNew1");
	$objectivenew2 = mysql_result($result, 0, "ObjectiveNew2");
	$compldatenew2 = mysql_result($result, 0, "CompldateNew2");
	$indicatornew2 = mysql_result($result, 0, "IndicatorNew2");
	$commentnew2 = mysql_result($result, 0, "CommentNew2");	
	$coursenew1 = mysql_result($result, 0, "CourseNew1");
	$commentnew3= mysql_result($result, 0, "CommentNew3");	
	$coursenew2 = mysql_result($result, 0, "CourseNew2");
	$commentnew4= mysql_result($result, 0, "CommentNew4");
	
		}
	}
	?>
              </select>
          </label></td>
          <td width="66"><label>
            <input type="submit" name="buttonw" id="buttonw" value="Enter" />
          </label></td>
        </tr>
      </table>
        <p align="left"><span class="style29">DEFINITION OF NEW   OBJECTIVES</span></p>
        <table width="670" height="207" border="0">
          <tr>
            <td width="197" height="64" valign="top"><p class="style8"><strong>
                <label> </label>
              </strong><span class="style31"> Objective </span></p>
              <p class="style8">&nbsp; </p>
              <strong> </strong>
                <label></label>
                <label></label></td>
  <td width="102" valign="top"><label> </label>
                <label></label>
                <label></label>
                <div align="center" class="style31">Completion Date </div></td>
            <td width="147" valign="top"><div align="center" class="style8"><span class="style31">Indicator</span> (give strategy to measure the achievements of objectives) </div></td>
            <td width="206" valign="top"><div align="center" class="style8"><span class="style31">Comments</span> (to reflect that the objectives set have been agreed by both supervisor and employee)</div>
<span class="style8">
                <label></label>
                </span>
                <label><br />
              </label></td>
          </tr>
          <tr>
            <td height="53"><textarea name="textarea33" id="textarea33" cols="30" rows="3" ><?php echo $objectivenew1 ?></textarea></td>
            <td><textarea name="textarea34" id="textarea6" cols="12" rows="1" ><?php echo $compldatenew1 ?></textarea></td>
            <td><textarea name="textarea35" id="textarea7" cols="20" rows="3" ><?php echo $indicatornew1 ?></textarea></td>
            <td><textarea name=" textarea36" id="textarea8" cols="30" rows="3" ><?php echo $commentnew1 ?></textarea></td>
          </tr>
          <tr>
            <td height="82"><textarea name="textarea37" id="textarea14" cols="30" rows="3"><?php echo $objectivenew2 ?></textarea></td>
            <td><textarea name="textarea38" id="textarea15" cols="12" rows="1"><?php echo $compldatenew2 ?></textarea></td>
            <td><textarea name="textarea39" id="textarea17" cols="20" rows="3"><?php echo $indicatornew2 ?></textarea></td>
            <td><textarea name="textarea40" id="textarea18" cols="30" rows="3"><?php echo $commentnew2 ?></textarea></td>
          </tr>
        </table>
	    <p><span class="style29">DEFINITION OF NEW DEVELOPMENT PLANS</span></p>
	    <table width="714" border="0">
          <tr>
            <td width="353"><div align="center" class="style31">COURSE TITLE</div></td>
            <td width="351"><div align="center" class="style31">
              <div align="left">COMMENTS</div>
            </div></td>
          </tr>
          <tr>
            <td height="83" valign="top"><label>
          <div align="center"><strong>1 </strong><br />
                    <textarea name="textarea41" id="textarea20" cols="30" rows="3"><?php echo $coursenew1 ?></textarea>
              </div>
              </label></td>
            <td valign="middle"><label>
              
              <div align="left">
                <textarea name="textarea42" id="textarea21" cols="30" rows="3"><?php echo $commentnew3 ?></textarea>
                </div>
            </label></td>
          </tr>
          <tr>
            <td height="106" align="center" valign="top"><p>
              <label></label>
                <label></label>
              <label></label>
              <label></label>
                <strong>2 </strong></p>
                <p>
                  <label>
                  <textarea name="textarea43" id="textarea24" cols="30" rows="3" ><?php echo $coursenew2 ?></textarea>
                  </label>
                </p>
              <div align="center"></div>
              <div align="left"></div>
              <div align="center"></div>
              <div align="center"></div></td>
            <td><label>
              
              <div align="left">
                <textarea name="textarea44" id="textarea27" cols="30" rows="3"><?php echo $commentnew4 ?></textarea>
                </div>
            </label></td>
          </tr>
        </table>
	    <div align="center"></div>
	    <table width="287" border="0">
          <tr>
            <td width="281"><label> </label>
                <div align="center">
                  <input name="button" type="submit" class="style2" id="button" value="Save" />
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
    <td width="376" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="631" bgcolor="#FFFFFF">&nbsp;</td>
	<td width="4">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
