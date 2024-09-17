<?php

/*Un array indexado en PHP es una colección de elementos donde cada valor 
está asociado a un índice numérico, que comienza en 0 por defecto.*/
$names = ["Juan", "Paula", "Simon"];

//Añadir mas opciones al final
$names[] = "Emilio";
$names[] = "Lucelly";

//
echo $names[0];
echo "<br>";
echo $names[3];
echo "<br>";
echo $names[4];