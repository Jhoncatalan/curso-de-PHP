<?php

/*
 en una fabrica de computadoras se planea ofrecer a los clientes
 un descuento que dependera del numero de computadoras que compre.
 si las computadoras son menos de cinco se les dara un 10% de descuento
 sobre el total de la compra; si el numero de computadoras es mayor o igual
 a cinco pero menos de diez se le otorga un 20% de descuento; y si son 10 o mas
 se les da un 40% de descuento. el precio de cada computadora es de $700.
*/

$cantidad = 12;

$total = $cantidad * 700;

if($cantidad < 5) {
    $total = $total-($total * 0.10);
}elseif($cantidad >= 5 && $cantidad < 10) {
    $total = $total-($total * 0.20);
}elseif($cantidad >= 10) {
    $total = $total-($total * 0.40);
}

echo "el total a pagar es $".$total;