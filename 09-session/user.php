<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        </head>
    <body>

        <?php if(isset($_SESSION['userRegister'])) : ?>


     <h1>Bienvenido <?php echo $_SESSION['userRegister'];?> 😏</h1>
        <a href="./cerrar.php">cerrar sesión</a>
        <a href="./index.php">home</a>

        <?php else : ?>

            <h1>No has iniciado sesión</h1>
            <a href="./index.php">iniciar sesión</a>
            <?php endif ?>
    </body>
</html>