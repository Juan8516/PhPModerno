<?php

/*JSON (JavaScript Object Notation) es un formato ligero de intercambio de 
datos que utiliza texto para representar objetos y arrays de manera estructurada, 
siendo fácil de leer para los humanos y procesar para las máquinas.*/

//Convertir de objeto a json
$soda = new Soda("Colombiana", "Postobon", 2.000, true);
$json = json_encode($soda);
echo $json;
echo "<br>";

//Convertir de json a objeto
$jsonSoda = '{"name":"Colombiana","brand":"Postobon","cc":2,"sugar":true}';
$objSoda = json_decode($jsonSoda);
echo $objSoda->brand;
echo "<br>";

//Arrays a json
$arr = [
    "name"=> "Juan Manuel",
    "country"=> "Colombia"
];

$newjson = json_encode($arr);
echo $newjson;

class Soda{
    public string $name;
    public string $brand;
    public float $cc;
    public bool $sugar;

    public function __construct($name, $brand, $cc, $sugar)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->cc = $cc;
        $this->sugar = $sugar;
    }
}