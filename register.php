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
    <title>Inregistrare</title>
</head>
<body>
    <!-- Formular inregistrare cont -->
    <div id="banner">
        <h3>Creeaza un cont</h3>
        <form method="post" action="register.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <input type="text" name="username" placeholder="Nume de utilizator" value="<?php echo $username; ?>">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="name" placeholder="Nume si prenume" value="<?php echo $name; ?>">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="phone" placeholder="Numar de telefon" value="<?php echo $phone; ?>">
            </div>
            <br>
            <div class="input-group">
                <input type="text" name="city" placeholder="Judet" value="<?php echo $city; ?>">
            </div>
            <br>
            <div class="input-group">
                <input type="password" placeholder="Parola" name="password_1">
            </div>
            <br>
            <div class="input-group">
                <input type="password" placeholder="Reintrodu parola" name="password_2">
            </div>
            <br>
            <div class="input-group">
                <button type="submit" class="btn-readmore" name="reg_user">Inregistrare</button>
            </div>
            <br>
            <a href="login.php" class="btn-readmore">Aveti deja un cont?</a>
            <a href="welcome.php" class="btn-readmore">Inapoi</a>
        </form>
    </div>
</body>
</html>