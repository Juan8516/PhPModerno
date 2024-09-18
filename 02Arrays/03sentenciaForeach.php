<?php

/*Estructura de control que permite iterar sobre todos los elementos de un 
array o colección*/

$names = ["Juan", "Paula", "Simon"];

//Foreach para array indexado.
foreach($names as $name){
    echo $name."<br>";
}
echo "--------<br>";

$spiderman = [
    "Name" => "Peter Parker",
    "Ability" => "Agilidad",
    "Power" => 150000
];

//Foreach para array indexado.
foreach($spiderman as $key => $value){
    echo $key.": ".$value."<br>";
}