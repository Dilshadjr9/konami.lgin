<?php
//get data from form  

$host = "localhost";
$user ="root";
$pass ="";
$database ="konamilogin";

$connection = mysqli_connect ($host, $user, $pass, $database;


$email= $_POST['email'];
$password= $_POST['password'];

$sql ="INSERT INTO contact (email,password) values  ('$email','$password',"

mysqli_query($connection,$sql;)



//redirect
header("Location:thanks.html");
mysql_close ($connection;)
?>