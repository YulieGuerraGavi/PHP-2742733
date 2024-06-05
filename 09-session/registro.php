</html>
<?php session_start();

#1. Crear una base de datos que se llame 'focaapp' y una tabla que se llame 'usersapp'
#2. Columnas: ID,username, correo, contraseña
#3. en registro.php conectar con base de datos y hacer un ISERT INTO en la tabla 'usersapp' cuando le den click en registrarse



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];

    echo 'user' . '"' . $usuario . '"';

    //Para verificar que se envíen todos los datos
    if (empty($usuario) or empty($password) or empty($correo)) {
        echo 'Rellene completo el formulario';
    } else {
        //echo $usuario . ' - ' . $password;
        /* $_SESSION['userRegister'] = $usuario;
        $_SESSION['passRegister'] = $password;
        $_SESSION['correoRegister'] = $correo; */
        //echo ' - varibales de sesión guardadas 😎';
        //header('Location: index.php');
        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
            echo "Conexión OK";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        //Vamos a preparar una sentencia SQL y la guardamos en una variable

        $statement = $conexion->prepare(" INSERT INTO `userapp` (`ID`, `Nombre`, `Correo`,`Contraseña`) VALUES (NULL, :user, :correo, :pass) ");

        //ejecutar el statement
        $statement->execute(array(':user' => $usuario, ':correo' => $correo, ':pass' => $password));
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


<body style="background-color: #000913;">

    <nav class="navbar navbar-expand-lg  fixed-top " >
        <div class="container-fluid center">


            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Registro
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class=" texto1 modal-title fs-4 container text-center" id="exampleModalLabel">Registrate</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">


                            <form action="registro.php" method="POST">
                                <h5>Usuario</h5>
                                <label for="user"></label>
                                <input class="ingresar form-control me-2" type="text" placeholder="User" name="user">

                                <h5>Contraseña</h5>

                                <label for="correo"></label>
                                <input class="ingresar form-control me-2" type="email" placeholder="Correo" name="correo">


                                <h5>Correo</h5>

                                <label for="password"></label>
                                <input class="ingresar form-control me-2" type="password" placeholder="Password" name="password">

<!-- 
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col align-self-start">

                                        </div>
                                        <div class="col align-self-center">
                                            <button class=" boton cont btn btn-outline-success" type="submit">Continuar</button>
                                        </div>
                                        <div class="col align-self-end">

                                        </div>
                                    </div>
                                </div> -->

                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col align-self-start">

                                        </div>
                                        <div class="col align-self-center">
                                            <button class=" boton cont btn btn-outline-success" type="submit">Registrate</button>
                                        </div>
                                        <div class="col align-self-end">

                                        </div>
                                    </div>
                                </div>
                            </form>


                            <?php if (isset($_SESSION['userRegister'])) : ?>
                                <p>Datos registrados, ya puedes iniciar sesión</p>
                                <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'];  ?> </p>
                                <a href="index.php">Iniciar sesión</a>
                            <?php endif ?>

                        </div>
                        <h6 class="texto">Al continuar, acepta términos y condiciones</h6>



                    </div>
                </div>
            </div>

        </div>
    </nav>

</body>

</html>