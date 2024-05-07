<?php

$valor_1 = 7;
$valor_2 = 2;

/* && ambas expresiones tienen que ser verdaderas
para que el resultad0 sea verdadero */
var_dump($valor_1 == 7 && 2 > 3);

echo "<br>";

/* al menos tiene que ser verdadera una expresion
para que el resultado sea verdadero */
var_dump($valor_1 == 7 || 2 > 3);

echo "<br>";

/* devuelve el valor contrario de la expresion */
var_dump(!($valor_1 >= $valor_2));
