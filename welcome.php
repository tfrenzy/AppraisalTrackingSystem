<?php
session_start();
//if (($_POST['textfield'] == "Ikechukwu")&&($_POST['textfield2'] == "Joseph")) {
//include("welcome2.php");
//}
//else {
//include("index.php");
//}

//Collects the html post info from the form on the first page and fills them into the variables below
$username = $_POST['textfield'];
$password = $_POST['textfield2'];

include("connection.inc");
//Query the users table for html post username/password combination
$query = "SELECT * FROM `users` WHERE `Username` = '$username' AND `Password` = '$password'";
$result = mysql_query($query);

//If query number of rows returned is more than 0, then call up welcome2.php
if (mysql_num_rows($result) > 0) {

//Fill in session variables with username and category
$_SESSION['appraisee'] = "";
$_SESSION['username'] = $username;
$_SESSION['category'] = mysql_result($result, 0, "Category");

include("welcome2.php");
}
else {
include("index.php");
}
?>