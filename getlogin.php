<?php
session_start();
include("db.php");

$pagename="Login Confirmation"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";
include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

// Capture $_POST
$login_email = $_POST["email"];
$login_password = $_POST["password"];

if ((empty($login_email)) && (empty($login_password))) {
  echo "<p>Either your email or password was empty.</p>";
  echo "<p>Please go back to <a href='./login.php'>Login</a>.</p>";
} else {
  $SQL = "SELECT userEmail, userPassword FROM users WHERE userEmail = '".$login_email."';";
  $SQL_Injection = mysqli_query($conn, $SQL);
  $result = mysqli_fetch_assoc($SQL_Injection);

  //echo $result['userEmail'];
  if ($result==null) {
    echo "<p>Your Email could not be found.</p>";
    echo "<p>Please go back to <a href='./login.php'>Login</a> with valid email address.</p>";
  } else {
    if ($result['userPassword'] != $login_password) {
      echo "<p>The password you entered was incorrect.</p>";
      echo "<p>Please go back to <a href='./login.php'>Login</a> and enter the right password.</p>";
    } else {
      echo "<p>You've successfully logged in using ".$login_email.".</p>";
      echo "<p>Go to the <a href='./index.php'>Home Page</a>.</p>";
      echo "<p>View your <a href='./basket.php'>Shopping Cart</a>.</p>";
    }
  }
}


include("footfile.html"); //include head layout
echo "</body>";
?>