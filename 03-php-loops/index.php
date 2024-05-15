<?php
 //while ciclo que imprime la tabla del 5 
$i = 1;
while ($i <= 10) {
  echo "5 x $i = " . (5 * $i) . "<br>";
  $i++;
}
echo"<br>";
//for imprime una lista de numeros

$i = 0;
for ($i = 4; $i <= 10; $i++) {
    if ($i % 4 == 0) {
        echo "$i multiplo de 2";
    }  echo"<br>";
}
echo"<br>";

// foreach 

$animales = array("koala", "gallina", "vaca");

foreach ($animales as $x) {
  if ($x == "gallina") continue;
  echo "$x <br>";
}




?>