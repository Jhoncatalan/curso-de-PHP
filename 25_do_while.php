
<?php

/*
Diseñe un programa que imprima los numeros del 1 hasta el 20
(incremento y decremento)
*/

$contador = 1;

do{
    echo $contador."<br>";
    $contador++;
}while($contador <= 20);

$contador = 20;

do{
    echo $contador."<br>";
    $contador--;
}while($contador >= 1);

/*
Diseñe un programa que imprima la tabla de multiplicar
de un numero dado, desde el factor 1 hasata el 12
*/

$contador = 1;
$numero = 5;

do{
    echo $numero." X ".$contador." = ".$numero * $contador."<br>";
    $contador++;
}while($contador <= 12);
