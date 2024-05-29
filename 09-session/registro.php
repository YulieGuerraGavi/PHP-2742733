<?php
//para iniciar una sesion se usa session_start(); 
session_start();

//$_SESSION['nombre'] =$_POST['user'];
//$_SESSION['contraseña'] =$_POST['password']


if ($_SERVER['REQUEST_METHOD'] == 'POST')
    echo 'datos enviadoshbjhj';

echo '<br>';
$usuario = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];


if (empty($usuario) or empty($password) or empty($email)) {
    echo 'rellene completo el formulario';
} else {
    //echo $usuario . ' - ' . $password;
    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    $_SESSION['emailRegister'] = $email;

    //echo ' - variables de sesion guardadas🥶';
    //header('location: index.php');

    try {
        $conexion = new PDO("mysql: host=localhost; dbname=focaapp;", 'root', '');
        echo "conexion OK";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }



    $statement = $conexion->prepare("INSERT INTO `usersapp`( `ID`, `nombre, `correo`, `contraseña`) 
    VALUES (NULL, :nombre, :correo ,:password)");


    $statement->execute(array(":nombre" => $usuario, ":correo" => $email,  ":password" => $password));
}




?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registrate</h1>


    <form action="registro.php" method="post">
        <label for="user">usuario</label>
        <input type="text" placeholder="user" name="user">
        <label for="password">contraseña</label>
        <input type="text" placeholder="password" name="password">
        <label for="email">correo</label>
        <input type="email" placeholder="email" name="email">
        <button type="submit">Registrate</button>

    </form>

    <?php if (isset($_SESSION['userRegister'])) : ?>
        <p>Datos registrados, ya puedes iniciar sesión </p>
        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister']; ?> </p>
        <a href="index.php">Iniciar sesión</a>
    <?php endif ?>


</body>

</html>