<?php

class Conexion {

     public static function ConexionBD(){
        $host = "localhost";
        $dbname = "Joyeria";
        $username = "postgres";
        $password = "admin";

        try {
            $conn = new PDO ("pgsql:host=$host; dbname=$dbname", $username, $password);
            echo "Se conecto correctamente a la base de datos";
        }

        catch (PDOException $exp){
            echo ("No se pudo conectar a la base de datos, $exp");
        }

        return $conn;


    }
}



?>