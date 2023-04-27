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
    <title>Adoptii</title>
</head>
<body>
    <!-- meniu navigatie -->
    <div id="slideout-menu">
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
    <main>
        <!-- Afisare card animal -->
        <br><br><br><br>
        <?php
        // Parametru URL id animal
        $id = $_GET['id'];
        // Conectare baza de date
        $con = mysqli_connect('localhost', 'root', '', 'iswproject');
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        // Query baza de date conform id-ului
        $count = "SELECT * FROM adopt where id=?";
        if ($stmt = $con->prepare($count)) {
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_object();
            // Afisare date animal
            echo '<h2 class="section-heading">';
            echo $row->name;
            echo '</h2>';
            echo '<section> ';
            echo '<div class="card-separate">
            <div class="card-image-separate">'; ?>
            <img src="img/adopt/<?php echo $row->image; ?>" alt="Card Image">
            <?php echo "</a> </div>";
            echo '<div class="card-description-separate">
            <h3>'; ?> <?php echo $row->name; ?> <?php echo '</h3> </a>';
            echo "<table>";
            echo "<tr>";
            echo "<td> Specie: " . $row->species . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> Rasa: " . $row->breed . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> Gen: " . $row->gen . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> Descriere: " . $row->description . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> Judet: " . $row->city . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td> Contact stapan: " . $row->contact . "</td>";
            echo "</tr>";
            echo "</table>";
            echo "<br>";
            echo '</div> </div>';
        } else {
            echo $con->error;
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