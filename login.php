<?php
session_start();
include("db.php");

$pagename="Login"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";

include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

//display random text
echo "<form action='./login_process.php' method='POST' style='border: none;'><table>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><label for='email'>Email</label></td>";
echo "<td style='border: none;' width='25%'><input class='formTextField' type='text' placeholder='someone@example.com' name='email'></td></tr>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><label for='password'>Password</label></td>";
echo "<td style='border: none;' width='25%'><input type='text' placeholder='*********' name='password'></td></tr>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><input type='submit' value='Sign up'></td>";
echo "<td style='border: none;' width='25%'><input type='reset' value='Clear Form'></td></tr>";

echo "</table></form>";

include("footfile.html"); //include head layout
echo "</body>";
?>