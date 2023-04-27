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
    <title>Acasa</title>
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
                <a href="#report">Posteaza anunt</a>
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
    <!-- Afis principal -->
    <div id="banner">
        <h1>Ajuta un animalut sa isi gaseasca o casa iubitoare</h1>
        <h3>Posteaza acum un anunt sau navigheaza anunturile deja existente</h3>
    </div>
    <main>
        <!-- Sectiunea 0 - Postare anunt-->
        <p id="report"><br></p>
        <h2 class="section-heading">Posteaza un anunt</h2>
        <section id="section-source">
            <a href="lostreport.php" class="btn-report" style="background: #ffcf94; border: 3px solid #e2b986;">Animal pierdut</a>
            <a href="foundreport.php" class="btn-report" style="background: #e1bbd2; border: 3px solid #cdaabf;">Animal gasit</a>
            <a href="adoptreport.php" class="btn-report" style="background: #99d1ce; border: 3px solid #a2bdc5;">Animal spre adoptie</a>
        </section>
        <!-- Sectiunea 1 - Animale pierdute -->
        <a href="lost.php">
            <h2 class="section-heading">Animale pierdute recent</h2>
        </a>
        </section>
        <!-- Sectiunea 2 - Animale gasite -->
        <a href="found.php">
            <h2 class="section-heading">Animale gasite recent</h2>
        </a>
        </section>
        <!-- Sectiunea 3 - Animale spre adoptie -->
        <a href="adopt.php">
            <h2 class="section-heading">Animale date spre adoptie recent</h2>
        </a>
        </section>
    </main>
    <script src="main.js"></script>
</body>
</html>