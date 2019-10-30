<?php
 session_start();

 $mysqli = new mysqli('localhost', 'root',"", 'login') or die(mysqli_error($mysqli));

 if(isset($_POST['create'])){

 $username = $_POST['username'];

 $lastname = $_POST['lastname'];

 $email = $_POST['email'];

 $password =  $_POST['password'];

 //$confirmpassword =  $_POST['confirmpassword'];


   $mysqli->query("INSERT INTO  registeruser (username,lastname,email,password)VALUES ('$username','$lastname','$email','".md5($_POST['password'])."')") or die($mysqli->error);
 }

 ?>
