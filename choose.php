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
	<title>Alegeti tipul anuntului</title>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>
<body>

<!-- principala -->
<div class="header">
	<h2>Alegeti tipul anuntului</h2>
</div>

<div class="content">
	<p><a href="lostrep.php" class="btn">Animal pierdut</a> </p>
    <br>
    <p><a href="foundrep.php" class="btn">Animal gasit</a> </p>
    <br>
	<p><a href="adoptrep.php" class="btn">Animal spre adoptie</a> </p>
    <br>
    <p><a href="home.php" class="btn">Back Home</a> </p>

</div>

</body>
</html>