<?php session_start();

//session_start(); //inicializa una sesion 
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $user_register = isset($_SESSION['userRegister'] ) ? $_SESSION['userRegister'] : null;
    $pass_register = isset($_SESSION['passRegister'] ) ? $_SESSION['passRegister'] : null;
    //para verificar que se envien todos los datos 
    if (empty($usuario) or empty($password)) {
        echo 'Rellene completo el registro';
    } else {
        echo $usuario . ' - ' . $password;
        if( $usuario ==  $user_register && $password == $pass_register){
            echo'-listo, iniciaste sesión 🥴';
            header('location: user.php');
        } else{
            echo'-Tu usuario no existe';
        }
    }
}




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



    <form action="index.php" method="post">
        <label for="user">usuario</label>
        <input type="text" placeholder="user" name="user">
        <label for="password">contraseña</label>
        <input type="text" placeholder="password" name="password">
        <button type="submit">Iniciar sesión</button>

    </form>

    <a href="./registro.php">Registrate</a>


</body>

</html>