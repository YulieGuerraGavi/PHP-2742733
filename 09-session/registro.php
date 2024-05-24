<?php
//session_start();

//$_SESSION['nombre'] =$_POST['user'];
//$_SESSION['contraseña'] =$_POST['password']
if($_POST['user']){
    session_start();

    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];

    echo'Puedes iniciar sesión';

} else{
    echo 'Tienes que completar el formulario';
    header('Location: index.php');
}

?>
