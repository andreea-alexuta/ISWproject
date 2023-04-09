<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>
<body>

<div class="header">
	<h2>My profile</h2>
</div>

<div class="content">
  	<p>About me</p>
    <br>
    <p><a href="home.php" class="btn">Back Home</a> </p>
</div>

</body>
</html>