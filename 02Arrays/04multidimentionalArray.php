<?php

/*Un array multidimensional es un array que contiene uno o más arrays 
como sus elementos, permitiendo almacenar y acceder a datos en múltiples 
niveles de profundidad.*/

$heroesDC = [
    [
        "Name" => "Superman",
        "Planet" => "kripton",
        "Power" => 10
    ],

    [
        "Name" => "Batman",
        "Planet" => "Earth",
        "Power" => 9.8
    ]
];

$heroesMarvel = [
    [
        "Name" => "Ironman",
        "Planet" => "Earth",
        "Power" => 9.8
    ],

    [
        "Name" => "Thor",
        "Planet" => "Asgard",
        "Power" =>  9.9
    ]
];

//Renderizado
echo $heroesDC[0]["Name"]."<br>";
echo $heroesDC[1]["Planet"]."<br>";
echo "--------------<br>";

//Iteracion de arrays multidimensionales array1
foreach($heroesDC as $heroDC){
    foreach($heroDC as $key => $value){
        echo $key.": ".$value."<br>";
    }
    echo "<br>";
}
echo "--------------<br>";

//Iteracion de arrays multidimensionales array2
foreach($heroesMarvel as $heroeMarvel){
    foreach($heroeMarvel as $key => $value){
        echo $key.": ".$value."<br>";
    }
    echo "<br>";
}