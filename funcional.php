<?php

$host = "localhost";
$dbname = "Joyeria";
$username = "postgres";
$password = "admin";



$conexion=pg_connect("host=$host dbname=$dbname user=$username password=$password");

if ($conexion)
{
    echo "Se conecto a la base de datos correctamente";
}else {
    echo "Ha ocurrido un problema";
}

$query="SELECT * FROM users";
$consulta=pg_query($conexion,$query);

if(pg_num_rows($consulta)>0){

    echo "<p>Usuarios<br>";
    echo "--------------</p>";
    while($obj=pg_fetch_object($consulta)){
        echo $obj." ".$obj->name;
    }
}

?>