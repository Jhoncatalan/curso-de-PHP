
<?php 

/*
pida a usuario la edad y el genero, para que la computadora le indique si ya puede
jubilarse. tome en cuenta que un hombre se puede jubilar cuando tenga 60 años o mas
en cambio, una mujer mayor se jubilara si tiene mas de 54 años
*/

$edad = 55;
$genero = "F";

if($genero == "M") {
    if($edad >= 60) {
        echo "el hombre puede jubilarse";
    }else {
        echo "no puede jubilarse";
    }
}elseif($genero == "F") {
    if($edad > 54) {
        echo "la mujer puede jubilarse";
    }else {
        echo "no puede jubilarse";
    }
}else {
    echo "coloque una opcion valida";
}