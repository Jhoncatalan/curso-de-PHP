<?php

/* 
 hacer un programa que calcule el total a pagar por la compra
 de camisas. si se compran tres camisas o mas se aplica un descuento
 del 20% sobre el total de la compra y si son menos de tres camisas
 un descuento del 10%
*/

$camisas = 7;
$precio = 10;

$total = $camisas * $precio;

$total = ($camisas >= 3) ? $total-($total * 0.20) : $total-($total * 0.10);

echo "el total a pagar es de $".$total;