<?php
//DOCUMENTACION: SQL w3school

//1. SQL SQL select
//SELECT materia, FROM profesores 

//2. SQL select distinc 
//SELECT `Documento` FROM `estudiantes` 
//solo extrae datos sin repetirlos 

//3. SQL Where
//SELECT * FROM `estudiantes` WHERE ID=1;
//captura valores unicos de columnas 

//4. SQL Order By
//SELECT `ID`, `Nombre`, `Documento` FROM `estudiantes` WHERE 1 ORDER BY `ID`
//Ordena la lista de menor a mayor 

//5.SQL And
//SELECT *
//FROM estudiantes
//WHERE `Media Tecnica` = 'multimedia' AND Nombre LIKE 'S%';
//cumple con la busqueda de estuduantes de media tecnica en multimedia y con la letra s

//6.SQL Or
//SELECT * FROM `estudiantes` WHERE 'media tecnica' = 'multimedia' OR `edad` > 18;
//seleccionamos la media tecnica con el factor de las personas mayores a 18 años

//7.SQL select NOT
//SELECT * FROM profesores WHERE NOT `Materia` = 'ingles';
//Excluye a los profesores que dan la materia de ingles

//8.SQL select INSERT INTO
//INSERT INTO `estudiantes`(`Nombre`, `Documento`) VALUES ('Kate','02133');
//insertamos a un nuevo estudiante en la tabla de estudiantes...

//9.SQL select null values
//SELECT `nombre` FROM `estudiantes` WHERE `nombre` IS NOT NULL;
//selecciona el valor no vacio de la tabla de los estudiantes seleccionando el nombre el cual no es nulo


//10. SQL select UPDATE
//UPDATE `profesores` SET `edad`= '40' WHERE `ID` = 2;
//Actualiza los datos de la tabla de profesores

//11. SQL select DELETE
//DELETE FROM `estudiantes` WHERE `Nombre` ='Yurley';
//ayuda a eliminar un dato de una tabla 

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>