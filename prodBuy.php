<?php
session_start();
include("db.php");
$pagename="A Smart Buy for a Smart Home"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
include ("detectlogin.php");
$prodid=$_GET['u_prod_id'];
// Fetching
$SQL="select prodId, prodName, prodPicNameLarge, prodDescripShort, prodDescripLong, prodPrice, prodQuantity from Product where prodId=".$prodid;
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
echo "<table style='border: 0px'>";
//create an array of records (2 dimensional variable) called $arrayp.
//populate it with the records retrieved by the SQL query previously executed.
//Iterate through the array i.e while the end of the array has not been reached, run through it
while ($arrayp=mysqli_fetch_array($exeSQL))
{
echo "<tr>";
echo "<td style='border: 0px'>";
//display the small image whose name is contained in the array
echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">";
echo "<img src=images/".$arrayp['prodPicNameLarge']." height=500 width=400>";
echo "</a>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<p><h5>".$arrayp['prodName']."</h5>"; //display product name as contained in the array
echo "<p>". $arrayp['prodDescripShort']."</p>";
echo "<p>". $arrayp['prodDescripLong']."</p>";
echo "<p style='font-weight: bold;'> $". $arrayp['prodPrice']."</p>";
echo "<p>Remaining Stock: ".$arrayp['prodQuantity']."</p>";
echo "<p>Number to be purchased: ";
//create form made of one text field and one button for user to enter quantity
//the value entered in the form will be posted to the basket.php to be processed
echo "<form action='basket.php' method='post'>";
echo "<select name='p_quantity'>";
for ($x = 1; $x < ($arrayp['prodQuantity']+1); $x++) {
  echo "<option value='".$x."'>".$x."</option>";
}
echo "</select>";
echo "<input type='submit' value='ADD TO BASKET'>";
//pass the product id to the next page basket.php as a hidden value
echo "<input type='hidden' name='h_prodid' value='".$prodid."'>";
echo "</form>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
include("footfile.html"); //include head layout
echo "</body>";
?>