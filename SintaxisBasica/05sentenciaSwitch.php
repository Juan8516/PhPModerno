<?php

$mount = 12;

switch($mount){
    case 1;
    case 2;
    case 12;
        echo "Temporada de invierno";
        break;
    case 3;
    case 4;
    case 5;
        echo "Temporada de primavera";
        break;
    case 6;
    case 7;
    case 8;
        echo "Temporada de verano";
        break;
    case 9;
    case 10;
    case 11;
        echo "Temporada de otoño";
    default: 
        echo "Mes no encontrado";
}