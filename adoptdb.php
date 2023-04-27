<?php
// Initializare variabile
$name = "";
$species = "";
$breed = "";
$gen = "";
$description = "";
$city = "";
$contact = "";
$errors = array();
// Conectare baza de date
$db = mysqli_connect('localhost', 'root', '', 'iswproject');
// REPORT ADOPTION
if (isset($_POST['report_adoption']) && isset($_FILES['image'])) {
  // Primire date din formular
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $species = mysqli_real_escape_string($db, $_POST['species']);
  $breed = mysqli_real_escape_string($db, $_POST['breed']);
  $gen = mysqli_real_escape_string($db, $_POST['gen']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  // Incarcare imagine in baza de date
  $img_name = $_FILES['image']['name'];
  $img_size = $_FILES['image']['size'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $error = $_FILES['image']['error'];
  if ($error === 0) {
    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $allowed_exs = array("jpg", "jpeg", "png");
    if (in_array($img_ex_lc, $allowed_exs)) {
      $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
      $img_upload_path = 'img/adopt/' . $new_img_name;
      move_uploaded_file($tmp_name, $img_upload_path);
      // Form validation
      if (empty($name)) {
        array_push($errors, "If name is not known or chosen, leave Unknown");
      }
      if (empty($species)) {
        array_push($errors, "Species is required");
      }
      if (empty($breed)) {
        array_push($errors, "Breed is required");
      }
      if (empty($description)) {
        array_push($errors, "Description is required");
      }
      if (empty($city)) {
        array_push($errors, "City is required");
      }
      if (empty($contact)) {
        array_push($errors, "Contact info is required");
      }
      // Insereaza entry in baza de date
      if (count($errors) == 0) {
        $query = "INSERT INTO adopt 
                  VALUES('$name', '$species', '$breed', '$gen', '$description', '$city', '$new_img_name', '', '$contact')";
        mysqli_query($db, $query);
        header('location: adopt.php');
      }
    }
  }
}