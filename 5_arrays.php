<?php

// arrays tipo escalares
$estudiantes = ["carlos", "Jose", "Vanessa", "Katy", 7];
//Modificar Valor
$estudiantes[3] = "Claudia";

//echo $estudiantes[3];


// arrays tipo asociativo
$tutor = [
    "nombre"=>"Carlos", 
    "apellido"=>"Alfaro",
    "edad"=>27
];

$tutor["edad"] = 19;

//echo $tutor["edad"];

// arrays tipo multidimencionales
$tutor_2 = [
    "nombre"=>"Jhon", 
    "apellido"=>"Catalan",
    "edad"=>30,
    "cursos"=>["PHP", "Python", "CSS"]
];

$tutor_2["cursos"][1] = "ReactJs";
// agregar elementos
$tutor_2["pais"] = "el salvador";

//echo $tutor_2["cursos"][1];

// contar elementos de un array
echo count($tutor_2);