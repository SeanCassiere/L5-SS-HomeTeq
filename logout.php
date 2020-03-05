<?php
session_start();
include ("db.php"); //include db.php file to connect to DB
$pagename="Make your home smart"; //create and populate variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
include ("detectlogin.php");

echo "<p>Thank You, ".$_SESSION['userFName']." ".$_SESSION['userSName']."</p>";
unset($_SESSION['userId']);
unset($_SESSION['userType']);
unset($_SESSION['userFName']);
unset($_SESSION['userSName']);
session_destroy();
echo "<p>You have been logged out.</p>";

include("footfile.html"); //include head layout
echo "</body>";
?>