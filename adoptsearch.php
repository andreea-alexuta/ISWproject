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
<!doctype html>
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
        <!-- Sectiunea - Animale spre adoptie -->
        <br><br><br><br>
        <h2 class="section-heading">Animale date spre adoptie</h2>
        <!-- Bara de cautare -->
        <section>
            <div class="search_form">
                <form autocomplete="off" action="adoptsearch.php" method="GET" target="_self">
                    <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                echo $_GET['search'];
                                                            } ?>" class="form-control" placeholder="Cauta">
                    <button type="submit" class="btn-readmore">Cauta</button>
                    <a href="adopt.php" class="btn-readmore">Sterge filtrul</a>
                </form>
            </div>
        </section>
        <!-- Afisare carduri animale -->                                                        
        <section>
            <?php
            // Conectare baza de date
            $con = mysqli_connect('localhost', 'root', '', 'iswproject');
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            // Cautare in baza de date
            if (isset($_GET['search'])) {
                $filtervalues = $_GET['search'];
                $query = "SELECT * FROM adopt WHERE CONCAT(name,species,breed,gen,city,description) LIKE '%$filtervalues%'";
                $query_run = mysqli_query($con, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $items) {
                        // Afisare date animal
                        echo '<div class="card">
				        <div class="card-image">';
                        echo "<a href=adoptinfo.php?id=$items[id]>"; ?>
                        <img src="img/adopt/<?php echo $items['image']; ?>" alt="Card Image"> <?php echo "</a> </div>";
                        echo '<div class="card-description">
                        <h3>'; ?> <?php echo $items['name']; ?> 
                        <?php echo '</h3>';
                        echo "<table>";
                        echo "<tr>";
                        echo "<td> Specie: " . $items['species'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td> Rasa: " . $items['breed'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td> Gen: " . $items['gen'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td> Descriere: " . $items['description'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td> Judet: " . $items['city'] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td> Contact stapan: " . $items['contact'] . "</td>";
                        echo "</tr>";
                        echo "</table>";
                        echo "<br>";
                        echo "<a href=adoptinfo.php?id=$items[id] class=btn-readmore>Detalii</a>";
                        echo '</div> </div>';
                    }
                } else {
                    echo '<p>No Record Found</p>';
                }
            }
            mysqli_close($con);
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