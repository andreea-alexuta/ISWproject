<?php include('db.php') ?>
<?php //verificare daca utilizatorul este logat
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: welcome.php');
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
    <title>Schimba parola</title>
</head>
<body>
    <!-- Formular schimbare parola -->
    <div id="banner">
        <h3>Schimba parola</h3>
        <form method="post" action="editpw.php">
        <?php include('errors.php'); ?>
            <div class="input-group">
                <input type="password" placeholder="Parola" name="op">
            </div>
            <br>
            <div class="input-group">
                <input type="password" placeholder="Noua parola" name="np">
            </div>
            <br>
            <div class="input-group">
                <input type="password" placeholder="Reintrodu noua parola" name="c_np">
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="btn-readmore" name="change_pw">Schimba parola</button>
            </div>
            <br>
            <a href="profile.php" class="btn-readmore">Inapoi</a>
        </form>
    </div>
</body>
</html>