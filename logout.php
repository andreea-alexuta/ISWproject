<?php
session_start();
// Delogare utilizator
session_destroy();
  	unset($_SESSION['username']);
  	header("location: welcome.php");
?>