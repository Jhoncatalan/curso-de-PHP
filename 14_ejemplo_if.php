<?php

/*
$edad = 20;

if($edad >= 18) {
    echo "eres mayor de edad";
}
*/

$total = 120;

if($total > 100):
    $total = $total - ($total * 0.20);
endif;

echo "el total a pagar es de: $".$total;