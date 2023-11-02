<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$user=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO users VALUES ('$id', '$name', '$lastname', '$user', '$email', '$password')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: joyeria.php");
}else{
}
?>