<?php
//connects to the database and inserts a name

$mysqli = new mysqli('localhost', 'root',"", 'registration') or die(mysqli_error($mysqli));


if(isset($_POST['create'])){

  $firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password =  $_POST['password'];


  $mysqli->query("INSERT INTO data (firstname,lastname,email,phonenumber,password)VALUES ('$firstname','$lastname','$email','$phonenumber','".md5($_POST['password'])."')") or die($mysqli->error);
}

 ?>
