<?php

$texto = "El Salvador";

$variable_1 = $texto; // asignacion normal(mantiene el valor de la variable)
$variable_2 = & $texto; // asignacion por referencia (el valor cambia)

echo $variable_2;

$texto = "Jhon Catalan";

echo $variable_2;
