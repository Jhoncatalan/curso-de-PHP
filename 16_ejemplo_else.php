

<?php

/* calcular el total que una persona debe pagaren una llantera 
el precio de cada llanta es de $800 si se compran menos de 5 llantas
y de $700 si se compran 5 o mas
*/

/*$cantidad = 4;

if($cantidad < 5):
    $total = $cantidad * 800;
else:
    $total = $cantidad * 700;
endif;

echo "el total a pagar es de $".$total;*/

/* determinar si un alumno aprueba o reprueba un curso, sabiendo
que aprobara si su promedio de tres calificaciones es mayor o igual a 7
reprueba en caso contrario
*/

$calificacion_1 = 10;
$calificacion_2 = 4;
$calificacion_3 = 9;

$promedio = ($calificacion_1 + $calificacion_2 + $calificacion_3)/3;

if($promedio >= 7):
    echo "el alumno aprobo con: ".$promedio;
else:
    echo "el alumno reprobo con: ".$promedio;
endif;