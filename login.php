<?php
    session_start();
    $message="";
/* if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','admin') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["userid"] = $row['userid'];
        $_SESSION["username"] = $row['username'];
        } else {
         $message = "Invalid Username or Password!";
        } */ 
		// query commented out for now, but here is where we will handle login functionality via rDBMS
    }
    if(isset($_SESSION["userid"])) {
    header("Location:index.php");
    }
?>
<html>
<head>
<style>
pre {
	background-color: #dc1a22;
}
</style>
<title>User Login</title>
</head>
<body bgcolor="#dc1a22">
<img src="LOGO TO BE ADDED" width="117" height="75" alt="logo" />
<hr>
<center>
<pre>
<img src="XSSASSINATE.png" width="20%" height="20%" alt="xssassinate" />   
</pre>                                                     
</center>
<hr>
<br />
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Please enter your login details below:</h3>
 Username:<br>
 <input type="text" name="username">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>
