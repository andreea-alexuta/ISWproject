<?php include('db.php') ?>
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
    <title>Login</title>
</head>
<body>
    <!-- Formular logare in cont -->
    <div id="banner">
        <h3>Intra in cont</h3>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <input type="text" name="username" placeholder="Nume de utilizator">
            </div>
            <br>
            <div class="input-group">
                <input type="password" name="password" placeholder="Parola">
            </div>
            <br>
            <button type="submit" class="btn-readmore" name="login_user">Autentificare</button>
            <br>
            <a href="register.php" class="btn-readmore">Utilizator nou?</a>
            <a href="welcome.php" class="btn-readmore">Inapoi</a>
        </form>
    </div>
</body>
</html>