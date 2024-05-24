<?php

    //entrar en la base de datos 

    try {
        $conexion = new PDO("mysql: host=localhost; dbname=colegio", 'root','');
        echo "conexion OK";
    } catch (PDOException $e) {
       echo "Error: " . $e->getMessage();
    }

    $nombre = 'leidy'; 
    $estado = 'soltera';
    $materia = 'finanzas';
    

    //guardamos una variable 

    $statement = $conexion->prepare("INSERT INTO `profesores`( `ID`, `Nombre`, `Estado civil`, `Materia`, `Documento`) VALUES (NULL, :nombre, :estado ,:Materia, '1122345')");

    //ejecutar 
    $statement->execute(array(":nombre"=>$nombre, ":estado"=>$estado, ":Materia"=>$materia));

    //fetch() regresa un resultado y fetchAll () nos regresa todos los resultados 
    $statement = $statement->fetchAll();

    //imprime la variable  

    foreach ($statement as $item) {
        echo$item['ID'] . ' - '. $item['Nombre'] . '<br>';
    }




?>