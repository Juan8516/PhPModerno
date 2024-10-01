<?php

/*stdClass en PHP es una clase genérica predefinida que se usa para crear 
objetos sin una estructura definida, permitiendo almacenar propiedades 
dinámicamente sin declarar una clase explícita.*/

$soda = new stdClass();

$soda->name = "Cola & Pola";
$soda->cc = 375;

echo $soda->name;
echo "<br>";
echo $soda->cc;
echo "<br>";
print_r($soda);