<?php
//para iniciar una sesion se usa session_start(); 
session_start();

//$_SESSION['nombre'] =$_POST['user'];
//$_SESSION['contraseña'] =$_POST['password']
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'Datos enviados';

    echo '<br>';
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    //para verificar que se envien todos los datos 
    if (empty($usuario) or empty($password)) {
        echo 'Rellene completo el registro';
    } else {
        echo $usuario . ' - ' . $password;
        $_SESSION['userRegister'] = $usuario;
        $_SESSION['passRegister'] = $password;
        //echo '-Variables de sesion guerdadas 🤫';
        //sirve para enviarte a otra pagina: header('location: index.php');
    }
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
        <button type="submit">Registrate</button>

    </form>

    <?php if ( isset($_SESSION['userRegister'])) : ?>
        <p>Datos registrados, ya puedes iniciar sesión </p>
        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister']; ?> </p>
        <a href="index.php">Iniciar sesión</a>
    <?php endif ?>

    
</body>

</html>