<?php //verificare daca utilizatorul este logat
session_start();
if (isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You're already logged in'";
    header('location: index.php');
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
    <title>Bine ati venit</title>
</head>
<body>
    <!-- Afis principal site si butoane de intrare in cont-->
    <div id="banner">
        <h1>Ajută un animăluț să își găsească o casă iubitoare</h1>
        <h3>Alătura-te unei comunități de iubitori de animale pentru a putea posta sau naviga anunțurile existente</h3>
        <a href="login.php" class="btn-readmore">Intra în cont</a>
        <a href="register.php" class="btn-readmore">Creează un cont</a>
    </div>
</body>
</html>