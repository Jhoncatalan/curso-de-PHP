
<?php

$a = 7;
$x = 10;
$y = 9;
$z = 7;

$resultado = match($a) {
    $x => "Valor igual a X",
    $y => "Valor igual a Y",
    $z => "Valor igual a Z",
    default => "no coincide con ninguga variable"
};

echo $resultado;

echo '<br>';

$edad = 60;

$resultado = match(true) {
    $edad >= 60 => "Eres de la tercera edad",
    $edad >= 30 => "Eres adulto",
    $edad >= 18 => "Eres adulto joven",
    default => "Eres un niño"
};

echo $resultado;