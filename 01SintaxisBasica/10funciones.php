<?php

//Llamado de las funciones
hi("Juan");
echo add(5, 7);
echo"<br>";
echo add(7, "9");//Tipado debil suma int con string(numerico).
echo"<br>";
//echo add(8, "j");//Error no suma int con string(letra).
echo minus(9, 3);

//Funcion sin devolver valor
function hi($name){
    echo "Hola $name <br>";
}

//Funcion que devuelve un valor
function add(int $a, int $b): int{ 
    return $a + $b;
}

//Funcion resta
function minus(int $a, int $b): int{
    return $a - $b;
}