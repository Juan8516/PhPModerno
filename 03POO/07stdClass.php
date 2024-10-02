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

/*Conversión de un array a un objeto en PHP se realiza mediante un casting (object), 
lo que transforma las claves del array en propiedades del objeto.*/

$arr = (array) $soda;

$arrLocation = [
    "address" => "Avenida siempre viva 742",
    "country" => "Colombia"
];

$objLocation = (object) $arrLocation;
echo "<br>";
echo $objLocation->address;