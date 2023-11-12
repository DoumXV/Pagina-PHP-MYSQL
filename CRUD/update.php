<?php
include("conexion_nueva.php");

$id=$_POST['id'];
$treatment=$_POST['treatment'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$user=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];
$adress=$_POST['adress'];
$birthday=$_POST['birthday'];

$sql = $conexion->query("UPDATE usuarios SET treatment='$treatment', name='$name', lastname='$lastname', user='$user', email='$email', password='$password', adress='$adress',birthday='$birthday' WHERE id='$id'");

if($sql){
    Header("Location: joyeria.php");
}


?>