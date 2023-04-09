<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>
<body>

<!-- principala -->
<div class="header">
	<h2>Home for animals</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<br>
		<p><a href="logout.php" class="btn">Logout</a> </p>
		<br>
		<p><a href="profile.php" class="btn">My Profile</a> </p>
    <?php endif ?>
</div>

<!-- postare anunt -->
<div class="header">
  	<h2>Postare anunt</h2>
</div>

<div class="content">
  	<p>Posteaza anunt</p>
	<br>
	<p><a href="choose.php" class="btn">Posteaza</a> </p>
</div>

<!-- animale pierdute -->
<div class="header">
  	<h2>Animale pierdute</h2>
</div>

<div class="content">
  	<p>Animale pierdute</p>
	<br>
	<p><a href="lost.php" class="btn">Animale pierdute</a> </p>
</div>

<!-- animale gasite -->
<div class="header">
  	<h2>Animale gasite</h2>
</div>

<div class="content">
  	<p>Animale gasite</p>
	<br>
	<p><a href="found.php" class="btn">Animale gasite</a> </p>
</div>

<!-- animale spre adoptie -->
<div class="header">
  	<h2>Animale spre adoptie</h2>
</div>

<div class="content">
  	<p>Animale spre adoptie</p>
	<br>
	<p><a href="adopt.php" class="btn">Animale spre adoptie</a> </p>
</div>

</body>
</html>