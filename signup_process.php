<?php
session_start();
include("db.php");
$pagename="Your Sign Up Results"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";
include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

// Capture $_POST
$user_fName = $_POST["fName"];
$user_lName = $_POST["lName"];
$user_address = $_POST["address"];
$user_postcode = $_POST["postcode"];
$user_telNo = $_POST["telNo"];
$user_email = $_POST["email"];
$user_password = $_POST["password"];
$user_cPassword = $_POST["cPassword"];

if (!empty($_POST["fName"]) && !empty($_POST["lName"]) && !empty($_POST["address"]) && !empty($_POST["postcode"]) && !empty($_POST["telNo"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["cPassword"])) {
  if ($_POST["password"]!==$_POST["cPassword"]) {
    echo "<h5>Sign Up Failed!</h5>";
    echo "<p>The 2 passwords are not matching.</p>";
    echo "<p>Make sure you enter them correctly.</p>";
  } else {
    function valid_email($str) {
      return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }

    if (valid_email($user_email)) {

      $SQL_InjectQuery = "insert into users (userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword) values ('".$user_fName."','".$user_lName."','".$user_address."','".$user_postcode."','".$user_telNo."','".$user_email."','".$user_password."');";
      //echo "<pre>".$SQL_InjectQuery."</pre>";
      $SQL_Injection =mysqli_query($conn, $SQL_InjectQuery);

      if (mysqli_errno($conn) == 0){
        echo "<h5>Sign-Up Successful!</h5>";
        echo "<p>To continue, please <a href='./login.php'>Login</a>.</p>";
      } else if (mysqli_errno($conn) == 1062) {
        echo "<h5>Sign Up Failed!</h5>";
        echo "<p>This Email Address already in use.</p><p>You may already be registered.</p>";
        echo "<br><p>Go back to <a href='./signup.php'>Sign Up</a>.</p>";
      } else if (mysqli_errno($conn) == 1064) {
        echo "<h5>Sign Up Failed!</h5>";
        echo "<p>Invalid Characters entered in the form.</p><p>Make sure you avoid the following characters: apostrophes like ['] and backslashes like [\].</p>";
        echo "<br><p>Go back to <a href='./signup.php'>Sign Up</a>.</p>";
      }
    } else {
      echo "<h5>Sign Up Failed!</h5>";
      echo "<p>Email not valid.</p><p>Please make sure you enter a correct email address.";
      echo "<br><p>Go back to <a href='./signup.php'>Sign Up</a>.</p>";
    }
  }

} else {
  echo "<h5>Sign Up Failed!</h5>";
  echo "<p>Your signup form is incomplete and all the fields are mandatory.</p><p>Make sure you provide all the required details.</p>";
  echo "<br><p>Go back to <a href='./signup.php'>Sign Up</a>.</p>";
}


include("footfile.html"); //include head layout
echo "</body>";
?>