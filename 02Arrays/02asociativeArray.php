<?php

/*Un array asociativo en PHP es una colección de elementos donde cada 
valor está asociado a una clave única, en lugar de un índice numérico.*/

//Array asociativo
$superman = [
    "name" => "Clark Kent",
    "age" => 100,
    "strong" => 2000000
];

//Sobreescribir informacion
$superman["age"] = 50;

//Acceder a los datos
echo $superman["age"];