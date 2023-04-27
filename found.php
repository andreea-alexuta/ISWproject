<?php //verificare daca utilizatorul este logat
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: welcome.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet-uri folosite -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab">
    <link rel="stylesheet" href="style.css">
    <title>Animale gasite</title>
</head>
<body>
    <!-- bara navigatie -->
    <nav>
        <div id="logo-img">
            <a href="index.php">
                <img src="img/logo.png">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="index.php">Acasa</a>
            </li>
            <li>
                <a href="index.php#report">Posteaza anunt</a>
            </li>
            <li>
                <a href="lost.php">Animale pierdute</a>
            </li>
            <li>
                <a href="found.php">Animale gasite</a>
            </li>
            <li>
                <a href="adopt.php">Animale spre adoptie</a>
            </li>
            <li>
                <a href="profile.php">Profilul meu</a>
            </li>
        </ul>
    </nav>
    <main>
        <!-- Sectiunea - Animale gasite -->
        <br><br><br><br>
        <h2 class="section-heading">Animale gasite</h2>
    </main>
    <script src="main.js"></script>
</body>
</html>