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
	<title>Animale spre adoptie</title>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>
<body>

<div class="header">
	<h2>Animale spre adoptie</h2>
</div>

<div class="content">

<!-- lista -->
<?php
$con=mysqli_connect('localhost', 'root', '', 'iswproject');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM adopt");

echo "Lista animalelor date spre adoptie:";
echo "<br>";

while($row = mysqli_fetch_array($result))
{
    echo "<table border='2'>";
    echo "<tr>";
    echo "<td>";?> <img src="img/adopt/<?php echo $row["image"]; ?>" height="150" width="200"> <?php echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Nume: " . $row['name'] . "</td>";
    echo "</tr>";
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
    echo "<td> Oras: " . $row['city'] . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td> Contact stapan: " . $row['contact'] . "</td>";
    echo "</tr>";
    echo "</table>";
    echo "<br>";
}


mysqli_close($con);
?>
<!-- lista -->

    <br>
    <p><a href="home.php" class="btn">Back Home</a> </p>
</div>

</body>
</html>