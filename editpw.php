<?php
session_start();
$errors = array();
// Conectare baza de date
$db = mysqli_connect('localhost', 'root', '', 'iswproject');
if (isset($_SESSION['username'])) {
  // CHANGE PW
  if (isset($_POST['change_pw'])) {
    // Primire date din formular
    $op = mysqli_real_escape_string($db, $_POST['op']);
    $np = mysqli_real_escape_string($db, $_POST['np']);
    $c_np = mysqli_real_escape_string($db, $_POST['c_np']);
    $username = $_SESSION['username'];
    // Form validation
    $uppercase = preg_match('@[A-Z]@', $op);
    $lowercase = preg_match('@[a-z]@', $op);
    $number    = preg_match('@[0-9]@', $op);
    if (empty($op)) { array_push($errors, "Parola inițială trebuie introdusă"); }
    else if (empty($np)) { array_push($errors, "Parola nouă trebuie introdusă"); }
    else if (empty($c_np)) { array_push($errors, "Parola nouă trebuie introdusă din nou"); }
    else if(!$uppercase || !$lowercase || !$number || strlen($np) < 8) {
      array_push($errors, "Parola trebuie să fie de minim 8 caractere și să conțină cel puțin o majusculă și o cifră");
    }
    else if ($np != $c_np ) {
      array_push($errors, "Cele două parole nu se potrivesc");
    }
    // Schimbare parola in baza de date cu cea nou introdusa
    if (count($errors) == 0) {
      $op = md5($op);
      $np = md5($np);
      $username = $_SESSION['username'];
      $sql = "SELECT password
                FROM users WHERE 
                username='$username' AND password='$op'";
      $result = mysqli_query($db, $sql);
      if (mysqli_num_rows($result) === 1) {
        $sql_2 = "UPDATE users
        	        SET password='$np'
        	        WHERE username='$username'";
        mysqli_query($db, $sql_2);
        header("Location: profile.php");
      }
    }
  }
}