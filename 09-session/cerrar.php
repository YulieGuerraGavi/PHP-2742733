<?php 

session_start();
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Pagina de inicio, sesión inicializada</h1>
    <a href="./user.php">user page</a>
    <a href="./cerrar.php">cerrar</a>
</body>
</html>