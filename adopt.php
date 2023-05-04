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
    <title>Adopții</title>
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
    </nav>
    <main>
        <!-- Sectiunea - Animale spre adoptie -->
        <br><br><br><br>
        <h2 class="section-heading">Animale date spre adopție</h2>
        <!-- Bara de cautare -->
        <section>
            <div class="search_form">
                <form autocomplete="off" action="adoptsearch.php" method="GET" target="_self">
                    <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                echo $_GET['search'];
                                                            } ?>" class="form-control" placeholder="Caută">
                    <button type="submit" class="btn-readmore">Caută</button>
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
            // Paginatie
            $results_per_page = 6;
            if (isset($_GET["page"])) {
                $page  = $_GET["page"];
            } else {
                $page = 1;
            };
            $start_from = ($page - 1) * $results_per_page;
            // Query baza de date
            $sql = "SELECT * FROM adopt ORDER BY id desc LIMIT $start_from, " . $results_per_page;
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {
                // Afisare date animal
                echo '<div class="card"> 
                <div class="card-image">';
                echo "<a href=adoptinfo.php?id=$row[id]>"; ?>
                <img src="img/adopt/<?php echo $row["image"]; ?>" alt="Card Image"> <?php echo "</a> </div>";
                                                                                    echo '<div class="card-description">
                <h3>'; ?> <?php echo $row['name']; ?>
            <?php echo '</h3>';
                echo "<table>";
                echo "<tr>";
                echo "<td> Specie: " . $row['species'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Rasă: " . $row['breed'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Gen: " . $row['gen'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Descriere: " . $row['description'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Județ: " . $row['city'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Adresă: " . $row['location'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td> Contact stăpân: " . $row['contact'] . "</td>";
                echo "</tr>";
                echo "</table>";
                echo "<br>";
                echo "<a href=adoptinfo.php?id=$row[id] class=btn-readmore>Detalii</a>";
                echo '</div> </div>';
            }
            ?>
        </section>
        <!-- Navigatie pagini -->
        <section class="pagination">
            <?php
            $sql2 = "SELECT COUNT(id) AS total FROM adopt";
            $result = $con->query($sql2);
            $row = $result->fetch_assoc();
            $total_pages = ceil($row["total"] / $results_per_page);
            if ($page - 1 >= 1) {
                echo "<td><a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($page - 1) . ">Înapoi</a></td>";
            }
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='adopt.php?page=" . $i . "'";
                if ($i == $page)  echo " class='curPage'";
                echo ">" . $i . "</a> ";
            };
            if ($page + 1 <= $total_pages) {
                echo "<td><a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($page + 1) . ">Înainte</a></td>";
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