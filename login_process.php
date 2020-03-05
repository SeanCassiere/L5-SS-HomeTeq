<?php
session_start();
include("db.php");

$pagename="Your Login Results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";

include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

//echo "<p>Entered email: $email</p><p>Entered password: $password</p>";

if ( (strlen($email)!=0) && (strlen($password)!=0) ) {
  $sql = "SELECT userId, userType, userFName, userSName, userEmail, userPassword FROM users WHERE userEmail='".$email."';";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result)==0) {
    echo "<h5>Email not recognized, login again.</h5>";
  } else {
    $row = mysqli_fetch_assoc($result);
    if ($password!=$row['userPassword']) {
      echo "<h5>Password not recognized, login again.</h5>";
    } else {
      echo "<h5>Logged in Successfully.</h5>";
      $_SESSION['userId'] = $row['userId'];
      $_SESSION['userType'] = $row['userType'];
      $_SESSION['userFName'] = $row['userFName'];
      $_SESSION['userSName'] = $row['userSName'];
      echo "<p>Welcome ".$_SESSION['userFName']." ".$_SESSION['userSName'].".</p>";
      echo "<p>You have successfully logged-in as a homeTeq customer.</p>";
      echo "<p>Continue shopping for <a href='./index.php'>homeTeq</a>.</p>";
      echo "<p>View your <a href='./basket.php'>SmartBasket</a>.</p>";
    }
  }
} else {
  echo "<h5>Both email and password fields need to be filled in. Please go back to the <a href='./login.php'>Login Page</a>.</h5>";
}

include("footfile.html"); //include head layout
echo "</body>";
?>