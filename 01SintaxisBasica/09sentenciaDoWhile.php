<?php

//La sentencia Do While entra por lo menos una vez para ejecutarse.

//No se cumple condicion.
$i = 10;

do{
    echo "Entro y compruebo <br>";
    echo "No repito porque no se cumple condicion <br>";
}while($i <= 1);

//Cumpliendo condicion
$j = 1;

do{
    echo "Cumplo $j condicion <br>";
    $j++;
}while($j <= 10);