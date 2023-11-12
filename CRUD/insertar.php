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


$sql = $conexion->query("INSERT INTO usuarios VALUES ('$id','$treatment','$name', '$lastname', '$user', '$email', '$password','$adress','$birthday')");


if($sql){
    Header("Location: joyeria.php");
}else{
}
?>