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
.style36 {font-size: 12px; font-weight: bold; }
.style46 {color: #666666; }
.style47 {font-size: 12px; color: #0000FF; }
.style48 {
	font-size: 14px;
	font-weight: bold;
}
.style52 {font-size: 16px; color: #0000FF; font-weight: bold; }
.style54 {font-size: 14px; font-weight: bold; color: #0000FF; }
.style56 {font-size: 14px}
.style57 {
	font-size: 18px;
	color: #5C743D;
}
.style62 {font-size: 10px; font-weight: bold; }
-->
</style>
</head>
<body bgcolor="#F4FFE4">
<form id="form1" name="form1" method="post" action="">
<table width="98%" height="2584" border="0" cellpadding="0" cellspacing="0" bgcolor="#F4FFE4" class="style27">
  <tr bgcolor="#D5EDB3">
    <td colspan="4" rowspan="2" bgcolor="#CCFF99"><img src="k1390534[1].jpg" width="227" height="126" /></td>
    <td width="752" height="50" align="center" valign="bottom" nowrap="nowrap" bgcolor="#CCFF99" class="pageName style1 style2" id="logo"> <div align="left">Employee Performance Appraisal</div></td>
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
    <td colspan="4" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p>
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
			$objective3= $_POST['textarea14'];
			$objective4= $_POST['textarea15'];
			$compldate1= $_POST['textarea12'];
			$compldate2= $_POST['textarea20'];
			$compldate3= $_POST['textarea21'];
			$compldate4= $_POST['textarea24'];
			
			$attainmentlevel1 = "";
			if ($_POST['radio41'] == true) $attainmentlevel1 = "Did not meet";
			if ($_POST['radio42'] == true) $attainmentlevel1 = "Partially met";
			if ($_POST['radio43'] == true) $attainmentlevel1 = "Met";
			if ($_POST['radio44'] == true) $attainmentlevel1 = "Exceeded";
			
			$attainmentlevel2 = "";
			if ($_POST['radio37'] == true) $attainmentlevel2 = "Did not meet";
			if ($_POST['radio38'] == true) $attainmentlevel2 = "Partially met";
			if ($_POST['radio39'] == true) $attainmentlevel2 = "Met";
			if ($_POST['radio40'] == true) $attainmentlevel2 = "Exceeded";
			 
			 $attainmentlevel3 = "";
			if ($_POST['radio45'] == true) $attainmentlevel3 = "Did not meet";
			if ($_POST['radio46'] == true) $attainmentlevel3 = "Partially met";
			if ($_POST['radio47'] == true) $attainmentlevel3 = "Met";
			if ($_POST['radio48'] == true) $attainmentlevel3 = "Exceeded";
			
			$attainmentlevel4 = "";
			if ($_POST['radio49'] == true) $attainmentlevel4 = "Did not meet";
			if ($_POST['radio50'] == true) $attainmentlevel4 = "Partially met";
			if ($_POST['radio51'] == true) $attainmentlevel4 = "Met";
			if ($_POST['radio52'] == true) $attainmentlevel4 = "Exceeded";
			
			$comment1= $_POST['textarea10'];
			$comment2= $_POST['textarea16'];
			$comment3= $_POST['textarea18'];
			$comment4= $_POST['textarea19'];
			
			$course1= $_POST['textarea25'];
			$course2= $_POST['textarea26'];
					
			$applicationlevel1= $_POST['select11'];
			$applicationlevel2= $_POST['select12'];
		
			$comment5= $_POST['textarea22'];
			$comment6= $_POST['textarea23'];
					
			$competency1 = $_POST['select2'];
			$competency2 = $_POST['select3'];
			$competency3 = $_POST['select4'];
			$competency4 = $_POST['select5'];
			$competency5 = $_POST['select6'];
			$competency6 = $_POST['select7'];
			$competency7 = $_POST['select8'];
			$competency8 = $_POST['select9'];
			$competency9 = $_POST['select10'];
						
			$comment8= $_POST['textarea'];
			$comment9= $_POST['textarea2'];
			$comment10= $_POST['textarea3'];
			$comment11= $_POST['textarea4'];
			$comment12= $_POST['textarea5'];
			$comment13= $_POST['textarea6'];
			$comment14= $_POST['textarea7'];
			$comment15= $_POST['textarea8'];
			$comment16= $_POST['textarea9'];
			$overall= $_POST['select'];
			$comment17= $_POST['textarea29'];
			$comment18= $_POST['textarea31'];
			$comment19= $_POST['textarea32'];
			$name1= $_POST['textarea28'];
			$name2= $_POST['textarea33'];
			$name3= $_POST['textarea17'];
			
			//Insert values into database table called annualappraisal
			$sql = "INSERT INTO `annualappraisal` VALUES('$dateofinterview', '$dateofprevinterview', '$lastname', '$firstname', '$employeeno', '$grade', '$jobtitle', '$department', '$division', '$yrsonjob', '$objective1', '$objective2', '$objective3', '$objective4', '$compldate1', '$compldate2', '$compldate3', '$compldate4', '$attainmentlevel1', '$attainmentlevel2', '$attainmentlevel3', '$attainmentlevel4', '$comment1', '$comment2', '$comment3', '$comment4', '$course1', '$course2', '$applicationlevel1', '$applicationlevel2', '$comment5', '$comment6', '$competency1', '$competency2', '$competency3',	'$competency4', '$competency5', '$competency6', '$competency7', '$competency8', '$competency9', '$comment8', '$comment9', '$comment10', '$comment11', '$comment12', '$comment13', '$comment14', '$comment15', '$comment16', '$overall', '$comment17', '$comment18', '$comment19', '$name1', '$name2', '$name3')";
			
			$result = mysql_query($sql);
			}
			
		  ?>
</p></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="154" height="2309">&nbsp; </td>
    <td colspan="4" valign="top" bgcolor="#FFFFFF">&nbsp;&nbsp;
      
        <table width="1143" height="22" border="0">
        <tr>
          <td width="212" class="style27">Date of Appraisal Interview</td>
          <td width="352"><label>
            <input type="text" name="textfield9" id="textfield9" />
          </label></td>
          <td width="231" class="style27">Date of previous Appraisal Interview</td>
          <td width="330"><label>
            <input type="text" name="textfield10" id="textfield10" />
          </label></td>
        </tr>
      </table>
      <table width="1258" height="40" border="0">
        <tr>
          <td width="984" height="26" class="style12"><table width="1148" height="36" border="1">
            <tr>
              <td width="1145"><div align="center" class="style24">EMPLOYEE INFORMATION</div></td>
            </tr>
          </table></td>
        </tr>
      </table>
      <table border="0" cellspacing="0" cellpadding="2" width="1146">
        <tr>
          <td width="575" class="pageName style6"><table width="466" border="0">
            <tr>
              <td width="214" class="style46">Last Name</td>
              <td width="242"><label>
                <input type="text" name="textfield" id="textfield" />
              </label></td>
              </tr>
            <tr>
              <td class="style46">First Name</td>
              <td><label>
                <input type="text" name="textfield2" id="textfield2" />
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
                <input type="text" name="textfield4" id="textfield4" />
              </label></td>
              </tr>

          </table></td>
          <td width="560" valign="top" class="pageName style6">
            <table width="399" border="0">
              <tr>
                <td width="228" class="style46">Job Title</td>
                <td width="161"><label>
                  <input type="text" name="textfield11" id="textfield11" />
                </label></td>
              </tr>
              <tr>
                <td><span class="style46">Department</span></td>
                <td><label>
                  <input type="text" name="textfield12" id="textfield12" />
                </label></td>
              </tr>
              <tr>
                <td class="style46">Division</td>
                <td><label>
                  <input type="text" name="textfield13" id="textfield13" />
                </label></td>
              </tr>
              <tr>
                <td class="style46">Years on Job Function</td>
                <td><label>
                  <input type="text" name="textfield14" id="textfield14" />
                </label></td>
              </tr>
            </table>          </td>
          <td width="11" class="pageName style6">&nbsp;</td>
        </tr>
        <tr>
          <td height="24" valign="top" class="bodyText style6">&nbsp;</td>
          <td valign="top" class="bodyText style6">&nbsp;</td>
          <td class="bodyText style6">&nbsp;</td>
        </tr>
      </table>
	    <table width="1150" border="1">
          <tr>
            <td width="1140"><div align="center" class="style24">
              <p>REVIEW OF ACHIEVEMENT OF OBJECTIVES</p>
              <p align="left" class="style27"><span class="style47"><span class="style56">INSTRUCTION:</span> To complete this section please refer to the page &quot; New goals/Objectives and Development Plans&quot; which contains  the objectives to be achieved and development plans set during the previous appraisal interview. Rate the level of attainment of these objectives and the development plans  by clicking on the radio buttons below</span>.</p>
            </div></td>
          </tr>
        </table>
	  
	  <table width="1150" height="524" border="1">
        <tr>
          <td width="299"><div align="center">Objective</div></td>
          <td width="90"><div align="center">Completion Date </div></td>
          <td width="347"><div align="center">Level of Attainment of Objectives</div></td>
          <td width="386"><div align="center">Comments</div></td>
        </tr>
        <tr>
          <td align="center" valign="top"><p class="style8"><strong>
              <label> </label>
            </strong>1</p>
              <p align="center" class="style8">
                <label>
                <textarea name="textarea11" id="textarea11" cols="45" rows="5"></textarea>
                </label>
              </p>
            <label></label>
              <label></label></td>
          <td><label>
            <textarea name="textarea12" id="textarea12" cols="10" rows="3"></textarea>
          </label></td>
          <td>
            <table width="347" border="0">
              <tr>
                <td width="90"><div align="center"><span class="style62">Did not meet</span></div></td>
                <td width="74"><div align="center"><span class="style62">Partially Met</span></div></td>
                <td width="72"><div align="center" class="style62">Met</div></td>
                <td width="83"><div align="center"><span class="style62">Exceeded</span></div></td>
              </tr>
              <tr>
                <td height="41"><label>
                    <div align="center">
                      <input type="radio" name="radio41" id="radio37" value="radio41" />
                    </div>
                  </label></td>
                <td><label>
                    <div align="center">
                      <input type="radio" name="radio42" id="radio38" value="radio42" />
                    </div>
                  </label></td>
                <td><label>
                    <div align="center">
                      <input type="radio" name="radio43" id="radio39" value="radio43" />
                    </div>
                  </label></td>
                <td><label>
                    <div align="center">
                      <input type="radio" name="radio44" id="radio40" value="radio44" />
                    </div>
                  </label></td>
              </tr>
            </table>          </td>
          <td><label>
            <textarea name="textarea10" id="textarea10" cols="30" rows="5"></textarea>
          </label></td>
        </tr>
        <tr>
          <td height="132" align="center" valign="top"><p>2
            </p>
            <p>
              <textarea name="textarea13" id="textarea13" cols="45" rows="5"></textarea>
              </p></td>
          <td><textarea name="textarea20" id="textarea19" cols="10" rows="3"></textarea></td>
          <td><table width="347" border="0">
            <tr>
              <td width="90"><div align="center"><span class="style62">Did not meet</span></div></td>
              <td width="74"><div align="center"><span class="style62">Partially Met</span></div></td>
              <td width="72"><div align="center" class="style62">Met</div></td>
              <td width="83"><div align="center"><span class="style62">Exceeded</span></div></td>
            </tr>
            <tr>
              <td height="41"><label>
                  <div align="center">
                    <input type="radio" name="radio37" id="radio41" value="radio37" />
                  </div>
                </label></td>
              <td><label>
                  <div align="center">
                    <input type="radio" name="radio38" id="radio42" value="radio38" />
                  </div>
                </label></td>
              <td><label>
                  <div align="center">
                    <input type="radio" name="radio39" id="radio43" value="radio39" />
                  </div>
                </label></td>
              <td><label>
                  <div align="center">
                    <input type="radio" name="radio40" id="radio44" value="radio40" />
                  </div>
                </label></td>
            </tr>
          </table></td>
          <td><textarea name="textarea16" id="textarea16" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
          <td height="110" align="center" valign="top"><p>3
            </p>
            <p>
              <textarea name="textarea14" id="textarea14" cols="45" rows="5"></textarea>
              </p></td>
          <td><textarea name="textarea21" id="textarea20" cols="10" rows="3"></textarea></td>
          <td><table width="347" border="0">
            <tr>
              <td width="90"><div align="center"><span class="style62">Did not meet</span></div></td>
              <td width="74"><div align="center"><span class="style62">Partially Met</span></div></td>
              <td width="72"><div align="center" class="style62">Met</div></td>
              <td width="83"><div align="center"><span class="style62">Exceeded</span></div></td>
            </tr>
            <tr>
              <td height="41"><label>
                  <div align="center">
                    <input type="radio" name="radio45" id="radio45" value="radio45" />
                  </div>
                </label></td>
              <td><label>
                  <div align="center">
                    <input type="radio" name="radio46" id="radio46" value="radio46" />
                  </div>
                </label></td>
              <td><label>
                  <div align="center">
                    <input type="radio" name="radio47" id="radio47" value="radio47" />
                  </div>
                </label></td>
              <td><label>
                  <div align="center">
                    <input type="radio" name="radio48" id="radio48" value="radio48" />
                  </div>
                </label></td>
            </tr>
          </table></td>
          <td><textarea name="textarea18" id="textarea17" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
          <td height="117" align="center" valign="top"><p>4
            </p>
            <p>
              <textarea name="textarea15" id="textarea15" cols="45" rows="5"></textarea>
              </p></td>
          <td><textarea name="textarea24" id="textarea21" cols="10" rows="3"></textarea></td>
          <td><table width="347" border="0">
            <tr>
              <td width="90"><div align="center"><span class="style62">Did not meet</span></div></td>
              <td width="74"><div align="center"><span class="style62">Partially Met</span></div></td>
              <td width="72"><div align="center" class="style62">Met</div></td>
              <td width="83"><div align="center"><span class="style62">Exceeded</span></div></td>
            </tr>
            <tr>
              <td height="41"><label>
                  <div align="center">
                    <input type="radio" name="radio49" id="radio49" value="radio49" />
                  </div>
                </label></td>
              <td><label>
                  <div align="center">
                    <input type="radio" name="radio50" id="radio50" value="radio50" />
                  </div>
                </label></td>
              <td><label>
                  <div align="center">
                    <input type="radio" name="radio51" id="radio51" value="radio51" />
                  </div>
                </label></td>
              <td><label>
                  <div align="center">
                    <input type="radio" name="radio52" id="radio52" value="radio52" />
                  </div>
                </label></td>
            </tr>
          </table></td>
          <td><textarea name="textarea19" id="textarea18" cols="30" rows="5"></textarea></td>
        </tr>
      </table>
	  <p><a href="ObjectivesDevelopmentPlan.php">Click  to access Objectives and Development Plans during previous appraisal</a>      </p>
	  <p><a href="QuarterlyReview.php">View Quarterly review of objectives</a></p>
	    <table width="1156" height="97" border="1">
          <tr>
            <td width="1146" height="91" valign="middle"><div align="center"><span class="style24">
              <p>REVIEW OF  DEVELOPMENT PLANS </p>
              </span>
                <p align="justify"><span class="style54">INSTRUCTION</span><span class="style52">: </span><span class="style47">To complete this section, please refer to the page &quot; New goals/Objectives and Development Plans&quot; which contains  the objectives to be achieved and development plans set during the previous appraisal interview. Rate the level of attainment of these objectives and the development plans  by clicking on the radio buttons below</span></p>
                <p align="justify">&nbsp;</p>
                </div></td>
          </tr>
        </table>
        <table width="1151" height="22" border="0">
          <tr>
            <td><div align="center"><span class="style36">Trainings Recommended during the last appraisal interview and their level of Attainment</span></div></td>
          </tr>
        </table>
        <table width="1151" border="0">
          <tr><td><table width="1151" height="245" border="1">
          <tr>
            <td width="303" height="39"><div align="center">COURSE TITLE</div></td>
            <td width="443"><div align="center">LEVEL OF APPLICATION OF COURSES ATTENDED</div></td>
            <td width="383"><div align="center">COMMENTS(has the employee attended the courses recommended during last appraisal or not?)</div></td>
          </tr>
          <tr>
            <td height="88" valign="top"><label> </label>
                <div align="center"><strong>1 </strong><br />
                    <textarea name="textarea25" id="textarea25" cols="45" rows="3"></textarea>
              </div></td>
            <td><label>
              <div align="center">
                <select name="select11" id="select11">
                  <option>Select Application Level</option>
                  <option>Very Substantial</option>
                  <option>Substantial</option>
                  <option>Moderate</option>
                  <option>Not Applicable</option>
                </select>
                </div>
            </label></td>
            <td><label>
              <textarea name="textarea22" id="textarea22" cols="35" rows="3"></textarea>
            </label></td>
          </tr>
          <tr>
            <td height="84" align="center" valign="top"><p>
              <label></label>
                <label></label>
              <label></label>
              <label></label>
                <strong>2 </strong></p>
                <p>
                  <label>
                  <textarea name="textarea26" id="textarea26" cols="45" rows="3"></textarea>
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
                  <option>Very Substantial</option>
                  <option>Substantial</option>
                  <option>Moderate</option>
                  <option>Not Applicable</option>
                </select>
                </div>
            </label>
              <div align="center"></div></td>
            <td><label>
              <textarea name="textarea23" id="textarea23" cols="35" rows="3"></textarea>
            </label></td>
          </tr>
          
          
        </table></td>
          </tr>
        </table>
        <p>&nbsp;</p>
	    <table width="1154" height="66" border="1">
          <tr>
            <td width="1153" height="60"><div align="center">
                <p class="style24">REVIEW OF PERSONAL ATTRIBUTES</p>
            </div></td>
          </tr>
        </table>
	    <table width="1155" height="75" border="0">
          <tr>
            <td width="1153" valign="top"><p align="justify" class="style47"><span class="style48">INSTRUCTIONS</span>: Describe the employee's contribution in each of the performance categories below. It is imperative that you illustrate specific, detailed examples since the last performance evaluation (for staffs that have worked more than one year with the organisation). Ratings MUST support and be substantiated by narrative comments.</p>
            <p class="style8">&nbsp;</p></td>
          </tr>
        </table>
        <table width="1154" height="974" border="1">
          <tr>
            <td width="450" height="31"><div align="center" class="style34">Competency</div></td>
            <td width="274"><div align="center">Performance Rating</div></td>
            <td width="408" class="style33"><div align="center" class="style27">Comment</div></td>
          </tr>
          <tr>
            <td height="99" valign="middle"><blockquote>
                <p align="justify"><span class="style20"> Quality: </span><span class="style8">Completes high quality work according to specifications. Thoroughly follows standards and procedures. Keeps complete records. Pays attention to details. Has a strong sense of quality and knows how to achieve it.</span></p>
            </blockquote></td>
            <td><label>
                <div align="center"></div>
              </label>
                <label>
                <div align="center">
                  <select name="select2" id="select2">
                    <option>Select Rating</option>
                    <option>To improve</option>
                    <option>Satisfactory</option>
                    <option>Strong</option>
                  </select>
                </div>
                </label>
                <div align="center"></div></td>
            <td valign="middle"><label> </label>
                <label>
                <div align="center">
                  <textarea name="textarea" id="textarea" cols="45" rows="4"></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="99" align="center" valign="middle"><div align="justify">
                <blockquote>
                  <p><span class="style20"> Desire to Improve Quality: </span><span class="style8">Continually looks for ways to improve and promote quality. Applies feedback to improve performance</span></p>
                </blockquote>
            </div></td>
            <td><label>
                <label></label>
                <div align="center"></div>
              </label>            <div align="center">
                <select name="select3" id="select3">
                  <option>Select Rating</option>
                  <option>To improve</option>
                  <option>Satisfactory</option>
                  <option>Strong</option>
                </select>
            </div></td>
            <td><label>
                <div align="center">
                  <textarea name="textarea2" id="textarea2" cols="45" rows="4"></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="99" valign="middle" class="style9"><blockquote>
                <p align="justify"><span class="style21">Job Knowledge:</span> <span class="style8">Possess skills and knowledge to perform the job competently</span></p>
            </blockquote></td>
            <td><label>
                <div align="center"></div>
              </label>            <label>
              <div align="center">
                <select name="select4" id="select4">
                  <option>Select Rating</option>
                  <option>To improve</option>
                  <option>Satisfactory</option>
                  <option>Strong</option>
                </select>
              </div>
              </label></td>
            <td><label>
                <div align="center">
                  <textarea name="textarea3" id="textarea3" cols="45" rows="4"></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="99" valign="middle"><blockquote>
                <p align="justify"><span class="style20">Communication: <span class="style27">Organises and expresses ideas and information clearly, using appropriate and effecient methods of conveying the information</span></span></p>
            </blockquote></td>
            <td><label>
                <label>
                <div align="center">
                  <select name="select5" id="select5">
                    <option>Select Rating</option>
                    <option>To improve</option>
                    <option>Satisfactory</option>
                    <option>Strong</option>
                  </select>
                </div>
                </label>
                <div align="center"></div>
              </label>            </td>
            <td><label>
                <div align="center">
                  <textarea name="textarea4" id="textarea4" cols="45" rows="4"></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="99" valign="middle"><blockquote>
                <p align="justify"><span class="style28"><span class="style30">Interpersonal Skills</span>: <span class="style8">Is sensitive to the needs, feelings and capabilities of others. Approaches others in a non-threatening and pleasant manner and treats them with respect</span></span></p>
            </blockquote></td>
            <td><label></label>            <label>
              <div align="center">
                <select name="select6" id="select6">
                  <option>Select Rating</option>
                  <option>To improve</option>
                  <option>Satisfactory</option>
                  <option>Strong</option>
                </select>
                </div>
            </label></td>
            <td><label>
                <div align="center">
                  <textarea name="textarea5" id="textarea5" cols="45" rows="4"></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="99" valign="middle"><blockquote>
                <p align="justify"><span class="style20">Conflict Resolution:</span> <span class="style8">Expresses alternative points of view in a non-threatening way. Knows when it is appropriate to compromise and when it is important to take a stand.</span></p>
            </blockquote></td>
            <td><label>
                <div align="center"></div>
              </label>            <label>
              <div align="center">
                <select name="select7" id="select7">
                  <option>Select Rating</option>
                  <option>To improve</option>
                  <option>Satisfactory</option>
                  <option>Strong</option>
                </select>
              </div>
              </label></td>
            <td><label>
                <div align="center">
                  <textarea name="textarea6" id="textarea6" cols="45" rows="4"></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="99" valign="middle"><blockquote>
                <p align="justify"><span class="style20">Teamwork:</span><span class="style8"> Works on projects as part of a team, exchanging ideas and contributing skills that complement those of  the other team members. Fulfills commitments to team members.</span></p>
            </blockquote></td>
            <td><label>
              <label>
              <div align="center">
                <select name="select8" id="select8">
                  <option>Select Rating</option>
                  <option>To improve</option>
                  <option>Satisfactory</option>
                  <option>Strong</option>
                </select>
                </div>
            </label></td>
            <td><label>
                <div align="center">
                  <textarea name="textarea7" id="textarea7" cols="45" rows="4"></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="99" valign="middle"><blockquote>
                <p align="justify"><span class="style20">Ethics:</span><span class="style8"> Maintains high level of character and a professional attitude. Is able to conform and promote the company's standards of conduct</span></p>
            </blockquote></td>
            <td><label>
              <label>
              <div align="center">
                <select name="select9" id="select9">
                  <option>Select Rating</option>
                  <option>To improve</option>
                  <option>Satisfactory</option>
                  <option>Strong</option>
                </select>
              </div>
              </label>
              <div align="center"></div></td>
            <td><label>
                <div align="center">
                  <textarea name="textarea8" id="textarea8" cols="45" rows="4"></textarea>
                </div>
              </label>            </td>
          </tr>
          <tr>
            <td height="115" valign="middle"><blockquote>
                <p align="justify"><span class="style20">Initiative:</span><span class="style8"> Strives to learn and improve. Seeks out ways to better themselves and the company. Takes on responsibilities. Does not remain idle - is hard working. Self - motivated.</span></p>
            </blockquote></td>
            <td><label>
              <label>
              <div align="center">
                <select name="select10" id="select10">
                  <option>Select Rating</option>
                  <option>To improve</option>
                  <option>Satisfactory</option>
                  <option>Strong</option>
                </select>
              </div>
              </label>
              <div align="center"></div>
              <div align="center"></div></td>
            <td><label>
                <div align="center">
                  <textarea name="textarea9" id="textarea9" cols="45" rows="4"></textarea>
                </div>
              </label>            </td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="1161" border="1">
          <tr>
            <td width="1151"><div align="center"><span class="style24">
              <p>OVERALL PERFORMANCE RATING</p>
              </span>
                <p class="style47">To complete  this section, you need to select the appropriate final rating from the Menu below . Refer to the Appraisal Guide for the definition of ratings</p>
            </div></td>
          </tr>
        </table>
        <table width="1163" border="0">
          <tr>
            <td width="394" height="53" bordercolor="0"><span class="pageName style57"><strong>Employee overall performance:</strong></span></td>
            <td width="759"><label>
            <select name="select" id="select">
              <option>Select Final Performance Rating</option>
              <option>Exceptional</option>
              <option>Exceeds Expectations</option>
              <option>Meets Expectations</option>
              <option>Below Expectations</option>
              <option>Needs Improvements</option>
            </select>
            </label></td>
          </tr>
        </table>
        <table width="1162" border="0">
          <tr>
            <td width="1152"><div align="center" class="style24">COMMENTS</div></td>
          </tr>
        </table>
        <table width="1157" border="1">
          <tr>
            <td width="360"><div align="center">COMMENTS BY FIRST LINE MANAGER</div></td>
            <td width="345"><div align="center">COMMENTS BY SENIOR MANAGER</div></td>
            <td width="430"><div align="center">COMMENTS BY EMPLOYEE</div></td>
          </tr>
          <tr>
            <td height="127"><label>
              <textarea name="textarea29" id="textarea29" cols="40" rows="5"></textarea>
            </label></td>
            <td><label>
              <textarea name="textarea31" id="textarea31" cols="40" rows="5"></textarea>
            </label></td>
            <td><label>
              <textarea name="textarea32" id="textarea32" cols="40" rows="5"></textarea>
            </label></td>
          </tr>
          <tr>
            <td height="84"><table width="353" height="73" border="0">
              <tr>
                <td width="46" height="67">NAME:</td>
                <td width="347"><label>
                  <input name="textarea28" type="text" id="textarea28" value="" size="35" />
                </label></td>
              </tr>
            </table>
            <label></label></td>
            <td align="left" valign="middle"><label></label>
              <p align="center"><label></label>
              <label></label>
                <label>                </label>
              <table width="338" height="48" border="0">
                  <tr>
                    <td width="32" height="44" valign="baseline">NAME</td>
<td width="287" valign="top"><label>
  <input name="textarea33" type="text" id="textarea33" value="" size="35" />
</label></td>
                  </tr>
              </table>
                <label>
                <div align="left">
                </label>
            <label></label></td>
            <td><table width="329" height="70" border="0">
              <tr>
                <td width="32" height="66">NAME:</td>
                <td width="287"><label>
                  <input name="textarea17" type="text" id="textarea30" value="" size="35" />
                </label></td>
              </tr>
            </table></td>
          </tr>
        </table>
	    <p>&nbsp;</p>
	    <table width="1159" border="0">
          <tr>
            <td width="363"><label> </label>
                <div align="center">
                  <input name="Button1" type="submit" class="style2" id="button" value="Save" />
            </div></td>
            <td width="786"><label> </label>
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
    <td width="154" height="30">&nbsp;</td>
    <td width="30" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="165" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="161" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="752" bgcolor="#FFFFFF">&nbsp;</td>
	<td width="4">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
