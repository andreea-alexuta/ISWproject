<?php
session_start();
// Initializare variabile
$username = "";
$name = "";
$email = "";
$phone = "";
$city = "";
$errors = array(); 
// Conectare baza de date
$db = mysqli_connect('localhost', 'root', '', 'iswproject');
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // Primire date din formular
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  // Form validation
  $uppercase = preg_match('@[A-Z]@', $password_1);
  $lowercase = preg_match('@[a-z]@', $password_1);
  $number    = preg_match('@[0-9]@', $password_1);
  if (empty($username)) { array_push($errors, "Username is required"); }
  else if (empty($name)) { array_push($errors, "Name is required"); }
  else if (empty($email)) { array_push($errors, "Email is required"); } 
  else if (empty($phone)) { array_push($errors, "Phone number is required"); }
  else if (empty($city)) { array_push($errors, "City is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  else if(!$uppercase || !$lowercase || !$number || strlen($password_1) < 8) {
    array_push($errors, "Password not complex enough");
  }
  else if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  // verifica daca utilizatorul nu exista deja
  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }
  // Inregistreaza utilizatorul daca nu exista erori
  if (count($errors) == 0) {
  	$password = md5($password_1); // Codificare parola
  	$query = "INSERT INTO users (username, name, password, email, phone, city) 
              VALUES('$username', '$name', '$password', '$email', '$phone', '$city')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  // Primire date din formular
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // Form validation
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  // Logheaza utilizatorul daca nu exista erori
  if (count($errors) == 0) {
  	$password = md5($password); // Codificare parola
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Nume de utilizator sau parola gresita");
  	}
  }
}
?>