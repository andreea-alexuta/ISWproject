<?php include('lostdb.php') ?>
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
    <title>Postează un anunț</title>
</head>
<body>
	<!-- Formular postare anunt -->
	<div id="banner">
		<h3 style="background: #ffcf94">Postează un animal pierdut</h3>
		<form autocomplete="off" method="post" action="lostreport.php" enctype="multipart/form-data">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Adăugați o imagine:</label>
				<input type="file" name="image" accept=".jpg, .jpeg, .png">
			</div>
			<br>
			<div class="input-group">
				<input type="text" placeholder="Nume" name="name" value="<?php echo $name; ?>">
			</div>
			<br>
			<div class="radio-group">
				<label>Specie:</label>
				<label for="Câine">
					<input id="Câine" value="Câine" name="species" type="radio"> Câine
				</label>
				<label for="Pisică">
					<input id="Pisică" value="Pisică" name="species" type="radio"> Pisică
				</label>
			</div>
			<br>
			<div class="radio-group">
				<label>Gen:</label>
				<label for="Femelă">
					<input id="Femelă" value="Femelă" name="gen" type="radio"> Femelă
				</label>
				<label for="Pisica">
					<input id="Mascul" value="Mascul" name="gen" type="radio"> Mascul
				</label>
			</div>
			<br>
			<div class="input-group">
				<input type="text" placeholder="Rasă" name="breed" value="<?php echo $breed; ?>">
			</div>
			<br>
			<div class="input-group">
				<input type="text" placeholder="Descriere" name="description" value="<?php echo $description; ?>">
			</div>
			<br>
			<div class="input-group">
				<input type="text" placeholder="Județ" name="city" value="<?php echo $city; ?>">
			</div>
			<br>
			<div class="input-group">
				<input type="text" placeholder="Adresă" name="location" value="<?php echo $location; ?>">
			</div>
			<br>
			<div class="input-group">
				<input type="text" placeholder="Data la care a fost pierdut" name="date" value="<?php echo $date; ?>">
			</div>
			<br>
			<div class="input-group">
				<input type="text" placeholder="Date de contact" name="contact" value="<?php echo $contact; ?>">
			</div>
			<br>
			<div class="input-group">
				<button type="submit" class="btn-readmore" name="report_lost">Postează anunțul</button>
			</div>
			<a href="index.php" class="btn-readmore">Înapoi</a>
		</form>
	</div>
</body>
</html>