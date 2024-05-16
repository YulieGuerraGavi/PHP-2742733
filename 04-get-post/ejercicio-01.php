<?php



    $edad = $_GET['edad']; 
    echo $edad;
    echo "<br>";
   
    if
        ($edad >= 18){
            echo "si eres mayor de edad";
    }
    if
        ($edad < 18){
            echo "no eres mayor de edad";
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
<h2>Verifica Tu Edad</h2>
    <form action="ejercicio-01.php" method="get">
        <label for="edad">Ingresa tu edad</label>
        <input id="edad" type="number" placeholder="edad..." name="edad">
        <br>
        <button type="submit">verificar</button>
    </form>
    
</body>
</html>