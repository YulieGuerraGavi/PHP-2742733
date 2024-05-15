<?php

echo 'ejecutando condicionales...';

echo "<br> <br>";

$articulos = "50";



if($articulos < 12) {

    echo "caja rapida";
 
} else if($articulos > 12){

    echo "caja normal";
    
}



echo "<br> <br>";



$edad = '15';

if($edad >= 18){
    echo 'SI PUEDE VOTAR';
}

else if($edad < 18){

    echo 'NO PUEDE VOTAR';
}


echo "<br> <br>";


$nombre = "kate";

$edad = "30"; 

if ($edad >= 18){
    echo 'Puede ingresar a la discoteca';
}

else{
    echo 'No puedes ingresar a la dicoteca';
}

if($nombre == "mario" xor $nombre == "carlos") {
    echo 'bienvenido puedes ingresar al VIP';
}

echo "<br> <br>";

$estatura = "170";

$velocidad = "28km";

$edad = "17";

if ($velocidad > 17 && $estatura > 150)

{
    echo "puede ingresar al equipo <br/>";
}

else {
    echo "no puede ingresar <br/>";
}

if($velocidad > 17 && $estatura > 150 && $edad > 18){
    echo "vas a las ligas mayores";
}

else{
    echo "vas a las ligas menores";
}

echo "<br> <br>";

$aire = "naranja";

switch($aire){
    case "verde";
        echo "la calidad del aire es buena";
    break;
    case "amarillo";
        echo "la calidad del aire es moderada";
    break;
    case "naranja";
        echo "la calidad del aire no es saludable para grupos sensibles";
    break;
    case "rojo";
        echo "la calidad del aire no es saludable";
    break;
    case "púrpura";
        echo "la calidad dle aire es muy poco saludable";
    break;
    case "marrón";
        echo "la calidad del aire es peligrosa";
    break;
    default;
        echo "el color no es valido";
    break;

}
?>