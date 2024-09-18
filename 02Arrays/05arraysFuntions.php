<?php

//Algunas funciones para los arrays

$superHeroes = [
    "Magneto",
    "Doomsday",
    "Charles Xavier",
];

$superHeores2 = [
    "Ciclope",
    "Jane Gray",
    "Wolverine"
];

//Agregar elemento
$superHeroes[] = "Batman";

//Agrega un elemento al final del arreglo
array_push($superHeroes, "Lex Luthor");

//Aca se elimina el ultimo elemento
array_pop($superHeroes);


//Cuenta los elementos del array
echo count($superHeroes);
echo "<br>";

//Muestra los indices de los elementos
print_r($superHeroes);
echo "<br>";

foreach($superHeroes as $superHero){
    echo $superHero;
    echo "<br>";
}

//Verificar si elemento existe
if(in_array("Magneto", $superHeroes)){
    echo "existe";
}else {
    echo "no existe";
}
echo "<br>";

//Combinar 2 arrays
$arrayMixed = array_merge($superHeroes, $superHeores2);
print_r($arrayMixed);