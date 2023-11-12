<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!empty($_POST["btniniciar"])){
    if (!empty($_POST["email"]) and !empty($_POST["password"])){
        $email=$_POST["email"];
        $password=$_POST["password"];
        /*$sql = "SELECT * FROM admins WHERE email='$email' AND password='$password'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query);*/
        $sql=$conexion->query("SELECT * FROM usuarios WHERE email='$email' AND password='$password'");
        
        if($datos=$sql->fetch_object()){
            $_SESSION["id"]=$datos->id;
            $_SESSION["name"]=$datos->name;
            Header("Location: ../CRUD/joyeria.php");
        }else{
            echo "<div class='alert-danger'>Acceso Denegado</div>";
        }
}else{
    echo"Campos Vacios";
}
}



?>