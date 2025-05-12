<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilo.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" name="direccion" placeholder="Direccion" value="<?= $row['direccion']?>">
                <input type="text" name="telefono" placeholder="Telfono" value="<?= $row['telefono']?>">
                <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>