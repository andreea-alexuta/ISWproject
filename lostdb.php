<?php
// Initializare variabile
$name = "";
$species = "";
$breed = "";
$gen = "";
$description = "";
$city = "";
$location = "";
$date = "";
$contact = "";
$errors = array();
// Conectare baza de date
$db = mysqli_connect('localhost', 'root', '', 'iswproject');
// REPORT LOST
if (isset($_POST['report_lost']) && isset($_FILES['image'])) {
  // Primire date din formular
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $species = mysqli_real_escape_string($db, $_POST['species'] ?? '');
  $breed = mysqli_real_escape_string($db, $_POST['breed']);
  $gen = mysqli_real_escape_string($db, $_POST['gen'] ?? '');
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
      // Form validation
      if (empty($name)) { $name = "Necunoscut"; }
      else if (empty($species)) { array_push($errors, "Trebuie marcată specia"); }
      else if (empty($gen)) { array_push($errors, "Trebuie marcat genul"); }
      if (empty($breed)) { $breed = "Necunoscută"; }
      else if (empty($description)) { array_push($errors, "Introduceți informații în descriere"); }
      else if (empty($city)) { array_push($errors, "Trebuie introdus județul"); }
      else if (empty($location)) { array_push($errors, "Trebuie introdusă locația unde a fost pierdut"); }
      else if (empty($date)) { array_push($errors, "Trebuie introdusă data la care a fost pierdut"); }
      else if (empty($contact)) { array_push($errors, "Introduceți date de contact"); }
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
      $img_upload_path = 'img/lost/' . $new_img_name;
      move_uploaded_file($tmp_name, $img_upload_path);
      // Insereaza entry in baza de date
      if (count($errors) == 0) {
        $query = "INSERT INTO lost 
        VALUES('$name', '$species', '$breed', '$gen', '$description', '$city', '$location', '$date', '$new_img_name', '', '$contact')";
        mysqli_query($db, $query);
        header('location: lost.php');
      }
    }
  }
}