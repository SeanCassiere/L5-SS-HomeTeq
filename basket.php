<?php
session_start();
include('db.php');
$pagename="Smart Basket"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
include ("detectlogin.php");

if (isset($_POST['h_rem_prodid'])){
  $delprodid = $_POST['h_rem_prodid'];
  unset($_SESSION['basket'][$delprodid]);
  echo "<p>Item Removed</p>";
}

if (isset($_POST['h_prodid'])){
  $newprodid = $_POST['h_prodid'];
  $reququantity = $_POST['p_quantity'];

  $_SESSION['basket'][$newprodid]=$reququantity;

  echo "<p>1 item added to the Basket.</p>";
} else {
  echo "<p>Current basket unchanged.</p>";
}

echo "<table>";
echo "<tr>";
echo "<th colspan='4'>Product Name</th>";
echo "<th>Price</th><th>Quantity</th><th>Subtotal</th>";
echo "<th></th>";
echo "</tr>";
$totalCost = 0;
if (isset($_SESSION['basket'])){
  
  foreach ($_SESSION['basket'] as $index=>$value) {
    $SQL = "select prodName, prodPrice, prodQuantity from Product where prodId=".$index;
    $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
    echo "<tr>";
    while ($arrayp=mysqli_fetch_array($exeSQL)){
      $subtotal = $arrayp['prodPrice']*$value;
      $totalCost+= $subtotal;
      echo "<td colspan='4'>".$arrayp['prodName']."</td>";
      echo "<td>$".$arrayp['prodPrice']."</td>";
      echo "<td>".$value."</td>";
      echo "<td>$".$subtotal."</td>";
      echo "<td><form method='post' action='basket.php'>";
      echo "<button type='submit'>Remove</button>";
      echo "<input type='hidden' value='$index' name='h_rem_prodid'></form></td>";
    }
    
    echo "</tr>";
  }
} else {
  echo "<p>Empty Basket</p>";
  
}
echo "<tr>";
echo "<td colspan='6' style='text-align: right; font-weight: bold;'>Total</td>";
echo "<td style='font-weight: bold;'>$".$totalCost."</td>";
echo "<td></td>";
echo "</tr>";
echo "</table>";

echo "<p><a href='./clearbasket.php'>Clear Basket</a></p>";

if (isset($_SESSION['userId'])) {
  echo "<p>To finalize your order: <a href='./checkout.php'>Checkout</a></p>";
} else {
  echo "<p>New homeTeq Customers: <a href='signup.php'>Sign Up</a><br>";
  echo "Returning homeTeq Customers: <a href='login.php'>Log In</a></p>";
}

include("footfile.html"); //include head layout
echo "</body>";
?>