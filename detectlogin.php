<?php

if (isset($_SESSION['userId'])) {
  echo "<h5 style='text-align: right;'>".$_SESSION['userFName']." ".$_SESSION['userSName']." | Customer number: ".$_SESSION['userId']."</h5>";
}
?>