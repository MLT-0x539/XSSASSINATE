<?php
session_start();
if (!empty($_SESSION['userid']) && !empty($_SESSION['username'])) { 
	unset($_SESSION["userid"]);
	unset($_SESSION["username"]);
  header("Location:login.php");
	session_destroy();
    }
else {
  echo "<br />";
  echo "<p>You are not currently logged in!</p>";
  echo "<br />";
}
?>
