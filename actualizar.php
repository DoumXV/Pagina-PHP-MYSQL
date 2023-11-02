<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM users WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            <input type="text" class="form-control mb-3" name="name" placeholder="Nombre" value="<?php echo $row['name']?>">
            <input type="text" class="form-control mb-3" name="lastname" placeholder="Apellido" value="<?php echo $row['lastname']?>">
            <input type="text" class="form-control mb-3" name="user" placeholder="Usuario" value="<?php echo $row['user']?>">
            <input type="text" class="form-control mb-3" name="email" placeholder="Email" value="<?php echo $row['email']?>">
            <input type="text" class="form-control mb-3" name="password" placeholder="Contraseña" value="<?php echo $row['password']?>">
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>
         
    </div>    


</body> 
</html>
