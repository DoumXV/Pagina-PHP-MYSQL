<?php
include("conexion_nueva.php");

$id = $_GET['id'];

// Realiza la consulta DELETE
$sql = $conexion->query("DELETE FROM usuarios WHERE id = '$id'");

// Verifica si la consulta se ejecutó correctamente
if ($sql) {
    // Redirige a la página principal después de la eliminación
    header("Location: joyeria.php");
    exit(); // Asegúrate de salir después de redirigir para evitar ejecución adicional del código
} else {
    // Manejar el error si la consulta no se ejecutó correctamente
    die("Error al eliminar el usuario: " . $conexion->error);
}
?>
