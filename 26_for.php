
<?php

/*
Diseñe un programa que imprima los numeros del 1 hasta el 20
(incremento y decremento)
*/

for($i = 1; $i <= 20; $i++){
    echo $i."<br>";
}

for($i = 20; $i >= 1; $i--){
    echo $i."<br>";
}

/*
Diseñe un programa que imprima la tabla de multiplicar
de un numero dado, desde el factor 1 hasata el 12
*/
$numero = 5;

for($i = 1; $i <= 12; $i++){
    echo $numero." X ".$i." = ".$numero * $i."<br>";
}