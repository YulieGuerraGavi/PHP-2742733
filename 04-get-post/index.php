<?php
//superglobals GET y POST


    $username = $_GET['username']; 
    $useremail = $_GET['useremail'];

    echo $username;
    echo "<br>";
    echo $useremail;




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color: <?php echo $_GET['color'] ?>; }
    </style>

</head>
<body>

    <form action="index.php" method="get">
        <label for="username"></label>
        <input id="username" type="text" placeholder="username..." name="username">
        <label for="useremai" required>user email</label>
        <input id="useremail" type="email" placeholder="useremail..." require 
        name="useremail">
        <br>
        <label for="color">color</label>
        <input id="color"type="text" name="color" placeholder="color para el fondo...">
        <button type="submit">enviar</button>
    </form>
    
</body>
</html>