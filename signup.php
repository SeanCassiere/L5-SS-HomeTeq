<?php
session_start();
$pagename="Sign Up"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";
include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

// Display Table
echo "<form action='./signup_process.php' method='POST' style='border: none;'><table>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><label for='fName'>* First Name</label></td>";
echo "<td style='border: none;' width='25%'><input class='formTextField' type='text' placeholder='John' name='fName'></td></tr>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><label for='lName'>* Last Name</label></td>";
echo "<td style='border: none;' width='25%'><input type='text' placeholder='Smith' name='lName'></td></tr>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><label for='address'>* Address</label></td>";
echo "<td style='border: none;' width='25%'><input type='text' placeholder='No. 03 George Lane, Colombo' name='address'></td></tr>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><label for='postcode'>* Postcode</label></td>";
echo "<td style='border: none;' width='25%'><input type='text' placeholder='10115' name='postcode'></td></tr>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><label for='telNo'>* Tel No</label></td>";
echo "<td style='border: none;' width='25%'><input type='text' placeholder='077311909' name='telNo'></td></tr>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><label for='email'>* Email Address</label></td>";
echo "<td style='border: none;' width='25%'><input type='text' placeholder='john.smith@example.com' name='email'></td></tr>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><label for='password'>* Password</label></td>";
echo "<td style='border: none;' width='25%'><input type='password' placeholder='Password' name='password'></td></tr>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><label for='cPassword'>* Confirm Password</label></td>";
echo "<td style='border: none;' width='25%'><input type='password' placeholder='Re-Enter Password' name='cPassword'></td></tr>";

echo "<tr style='border: none;'><td style='border: none;' width='25%'><input type='submit' value='Sign up'></td>";
echo "<td style='border: none;' width='25%'><input type='reset' value='Clear Form'></td></tr>";

echo "</table></form>";


include("footfile.html"); //include head layout
echo "</body>";
?>