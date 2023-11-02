<?php

    include("conexion.php");
    $con=conectar();

    $sql = "SELECT * FROM users";
    $query = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD ADMIN</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingreso de Datos</h1>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="id" placeholder="ID">
                    <input type="text" class="form-control mb-3" name="name" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="lastname" placeholder="Apellido">
                    <input type="text" class="form-control mb-3" name="user" placeholder="Usuario">
                    <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                    <input type="text" class="form-control mb-3" name="password" placeholder="Contraseña">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table ms-5">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Contraseña</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                            <tr>
                                <th> <?php echo $row['id']?></th>
                                <th> <?php echo $row['name']?></th>
                                <th> <?php echo $row['lastname']?></th>
                                <th> <?php echo $row['user']?></th>
                                <th> <?php echo $row['email']?></th>
                                <th> <?php echo $row['password']?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Modificar</a></th>
                                <th><a href="eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php 
                            }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    
</body>
</html>
