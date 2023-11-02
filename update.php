<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$user=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="UPDATE users SET name='$name', lastname='$lastname', user='$user', email='$email', password='$password' WHERE id='$id'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: joyeria.php");
}


?>