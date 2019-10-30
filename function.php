<?php
//connects to the database and inserts a name

	$mysqli = new mysqli('localhost', 'root',"", 'teneo') or die(mysqli_error($mysqli));


if(isset($_POST['save'])){

  $name = $_POST['name'];
$location = $_POST['location'];


  $mysqli->query("INSERT INTO test (name,location)VALUES ('$name','$location')") or die($mysqli->error);
}

 ?>
