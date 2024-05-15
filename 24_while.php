
<?php

/*
Diseñe un programa que imprima los numeros del 1 hasta el 20
(incremento y decremento)
*/

$contador = 1;

while($contador <= 20) {
    echo $contador."<br>";
    $contador++;
}

echo "<br>";

$contador = 20;

while($contador >= 1) {
    echo $contador."<br>";
    $contador--;
}

/*
Diseñe un programa que imprima la tabla de multiplicar
de un numero dado, desde el factor 1 hasata el 12
*/

$contador = 1;
$numero = 10;

while($contador <= 12) {
    echo $numero." x ".$contador." = ".$numero * $contador."<br>";
    $contador++;
}