<?php 

//session_start(); //inicializa una sesion 

//$_SESSION['nombre'] =['josefina'];
//$_SESSION['pais'] = ['colombia'];





?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Pagina de inicio, sesion inicializada</h1>



        <form action="registro.php" method="post">
        <label for="user">usuario</label>
        <input type="text" placeholder="user" name="user">
        <label for="password">contraseña</label>
        <input type="text" placeholder="password" name="password">
        <button type="submit">Registro</button>

        </form>

        <a href="./user.php">user page</a>
        <a href="./cerrar.php">cerrar</a>

    </body>
</html>