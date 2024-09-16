<?php

/*Algunas funciones que ya existen en php*/

//Conviente cadena a mayusculas.
echo strtoupper(string: "juan");

//Devuelve el valor absoluto
echo abs(500);

//Calcula diferencias de arrays
$array1 = array("a" => "Verde", "Azul", "negro", "Cafe");
$array2 = array("b" => "Verde", "Azul", "negro", "Cafe", "Curuba");
$resultado = array_diff($array1, $array2);