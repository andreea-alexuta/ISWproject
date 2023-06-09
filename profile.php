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
    <title>Profilul meu</title>
</head>
<body>
    <!-- meniu navigatie -->
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="index.php">Acasă</a>
            </li>
            <li>
                <a href="index.php#report">Postează anunț</a>
            </li>
            <li>
                <a href="lost.php">Animale pierdute</a>
            </li>
            <li>
                <a href="found.php">Animale găsite</a>
            </li>
            <li>
                <a href="adopt.php">Animale spre adopție</a>
            </li>
            <li>
                <a href="profile.php">Profilul meu</a>
            </li>
        </ul>
    </div>
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
                <a href="index.php">Acasă</a>
            </li>
            <li>
                <a href="index.php#report">Postează anunț</a>
            </li>
            <li>
                <a href="adopt.php">Animale pierdute</a>
            </li>
            <li>
                <a href="adopt.php">Animale găsite</a>
            </li>
            <li>
                <a href="adopt.php">Animale spre adopție</a>
            </li>
            <li>
                <a href="profile.php">Profilul meu</a>
            </li>
            <li>
                <div id="search-icon">
                </div>
            </li>
        </ul>
    </nav>
    <main>
        <h2 class="page-heading">Profilul meu</h2>
        <div id="post-container">
            <!-- Sectiunea - Profil-->
            <section id="profile-desc">
                <?php
                // Conectare baza de date
                $con = mysqli_connect('localhost', 'root', '', 'iswproject');
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                // Query baza de date
                $sql = "SELECT * FROM users WHERE username = '" . $_SESSION['username'] . "'";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    // Afisare date personale pentru utilizatorul logat
                    echo '<div class="card">';
                    echo "<table>";
                    echo "<tr>";
                    echo "<td> Nume de utilizator: " . $row['username'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td> Nume și prenume: " . $row['name'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td> E-mail: " . $row['email'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td> Telefon: " . $row['phone'] . "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td> Județ: " . $row['city'] . "</td>";
                    echo "</tr>";
                    echo "</table>";
                }
                ?>
            </section>
            <!-- Sectiunea - Setari profil-->
            <section id="sidebar">
                <h3>Setări</h3>
                <a href="editpassword.php" class="btn-readmore-s">Schimbă parola</a>
                <a href="logout.php" class="btn-readmore-s">Delogare</a>
            </section>
        </div>
                <!-- Footer -->
                <footer>
            <div id="left-footer">
                <p>
                <ul>
                    <li>
                        <a href="index.php">Acasă</a>
                    </li>
                    <li>
                        <a href="index.php#report">Postează anunț</a>
                    </li>
                    <li>
                        <a href="lost.php">Animale pierdute</a>
                    </li>
                    <li>
                        <a href="found.php">Animale găsite</a>
                    </li>
                    <li>
                        <a href="adopt.php">Animale spre adopție</a>
                    </li>
                    <li>
                        <a href="profile.php">Profilul meu</a>
                    </li>
                    <li>
                        <a href="logout.php">Deloghează-te</a>
                    </li>
                </ul>
                </p>
            </div>
            <div id="right-footer">
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="https://github.com/andreea-alexuta/ISWproject">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Proiect ISW</p>
            </div>
        </footer>
    </main>
    <script src="main.js"></script>
</body>
</html>