<?php


$host = "localhost";
$user ="root";
$pass ="";
$database ="pes";
$connection = mysqli_connect($host, $user, $pass, $database);
if($connection){
    echo "connected <br>";
    
}else{
    die("not connected");
}

$email= $_POST['email'];
$password= $_POST['password'];


$sql ="INSERT INTO contact (email,password) VALUES  ('$email','$password')";

if(mysqli_query ($connection,$sql)){
    echo "record inserted";
}else{
    echo "record not inserted";
}

mysqli_close($connection);
header("Location:loader.html");

?>