<?php include('foundrep2.php') ?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Posteaza un anunt</title>
  <link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>
<body>
  <div class="header">
  	<h2>Posteaza un anunt</h2>
  </div>
	
  <form method="post" action="foundrep.php" enctype="multipart/form-data">
  	<?php include('errors.php'); ?>
	





	<div class="input-group">
  	  <label>Inserati o imagine</label>
  	  <input type="file" name="image" accept=".jpg, .jpeg, .png" ?>
  	</div>



	


	<div class="input-group">
  	  <label>Nume</label>
  	  <input type="text" name="name" value="<?php echo $name; ?>">
  	</div>

      <div class="input-group">
  	  <label>Specie</label>
  	  <input type="text" name="species" value="<?php echo $species; ?>">
  	</div>

      <div class="input-group">
  	  <label>Rasa</label>
  	  <input type="text" name="breed" value="<?php echo $breed; ?>">
  	</div>

      <div class="input-group">
  	  <label>Gen</label>
  	  <input type="text" name="gen" value="<?php echo $gen; ?>">
  	</div>

      <div class="input-group">
  	  <label>Descriere</label>
  	  <input type="text" name="description" value="<?php echo $description; ?>">
  	</div>

      <div class="input-group">
  	  <label>Oras</label>
  	  <input type="text" name="city" value="<?php echo $city; ?>">
  	</div>

      <div class="input-group">
  	  <label>Data la care a fost gasit: </label>
  	  <input type="text" name="date" value="<?php echo $date; ?>">
  	</div>

      <div class="input-group">
  	  <label>Date de contact</label>
  	  <input type="text" name="contact" value="<?php echo $contact; ?>">
  	</div>
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="report_found">Posteaza anuntul</button>
  	</div>
	
        <br>
      <p><a href="choose.php" class="btn">Back</a> </p>

  </form>
  
</body>
</html>