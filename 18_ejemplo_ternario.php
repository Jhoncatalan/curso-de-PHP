<?php

$camisas = 7;
$precio = 10;

$total = $camisas * $precio;

$total = ($camisas >= 3) ? $total-($total * 0.20) : $total-($total * 0.10);

echo "el total a pagar es de $".$total;