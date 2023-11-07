<?php
include("conexion.php");
$con=conectar();



if(!empty($_POST["btniniciar"])){
    if (!empty($_POST["email"]) and !empty($_POST["password"])){
        $email=$_POST["email"];
        $password=$_POST["password"];
        $sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query);
        if($row){
            Header("Location: joyeria.php");
        }
    }else{
        echo"Campos Vacios";
    }
}



?>