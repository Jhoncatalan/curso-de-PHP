
<?php 

/*
se desea diseñar un programa que escriba los nombres de los dias
de la semana en funcion del valor de una variable DIA
*/

$dia = 3;

if($dia == 1) {
    echo "Lunes";
}elseif($dia == 2) {
    echo "Martes";
}elseif($dia == 3) {
    echo "Miercoles";
}elseif($dia == 4) {
    echo "Jueves";
}elseif($dia == 5) {
    echo "Viernes";
}elseif($dia == 6) {
    echo "Sabado";
}elseif($dia == 7) {
    echo "Domingo";
}else {
    echo "Error a introducido un valor no valido";
}