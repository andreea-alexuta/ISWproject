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
    <title>Animale pierdute</title>
</head>
<body>
    <!-- meniu navigatie -->
    <div id="slideout-menu">
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
        <!-- Sectiunea - Animale pierdute -->
        <br><br><br><br>
        <h2 class="section-heading">Animale pierdute</h2>
        <!-- Afisare carduri animale -->
        <section>
            <?php
            // Conectare baza de date
            $con = mysqli_connect('localhost', 'root', '', 'iswproject');
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            // Paginatie
            $results_per_page = 6;
            if (isset($_GET["page"])) {
                $page  = $_GET["page"];
            } else {
                $page = 1;
            };
            $start_from = ($page - 1) * $results_per_page;
            // Query baza de date
            $sql = "SELECT * FROM lost ORDER BY id desc LIMIT $start_from, " . $results_per_page;
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                // Afisare date animal
                echo '<div class="card">
                <div class="card-image">';
                echo "<a href=lostinfo.php?id=$row[id]>"; ?>
                <img src="img/lost/<?php echo $row["image"]; ?>" alt="Card Image"> 
                <?php echo "</a> </div>";
                echo '<div class="card-description">
                <h3>'; ?> <?php echo $row['name']; ?> <?php echo '</h3> </a>';
                echo "<table>";
                echo "<tr>";
                echo "<td> Specie: " . $row['species'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Rasa: " . $row['breed'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Gen: " . $row['gen'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Descriere: " . $row['description'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Judet: " . $row['city'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Data la care a fost gasit: " . $row['date'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Contact stapan: " . $row['contact'] . "</td>";
                echo "</tr>";
                echo "</table>";
                echo "<br>";
                echo "<a href=lostinfo.php?id=$row[id] class=btn-readmore>Detalii</a>";
                echo '</div> </div>';
            }
            ?>
        </section>
                <!-- Footer -->
                <footer>
            <div id="left-footer">
                <p>
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
                    <li>
                        <a href="logout.php">Delogheaza-te</a>
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