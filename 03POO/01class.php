<?php

/*Una clase es una plantilla que define propiedades y métodos para crear objetos, permitiendo organizar y 
reutilizar código mediante la programación orientada a objetos (POO)*/

// Creación de una nueva instancia de la clase Sale
$sale = new Sale();

// Asignación de valores a las propiedades total y date de la instancia $sale
$sale->total = 250000;
$sale->date = date("Y-M-d");

//Llamado del metodo.
$sale->createInvoice();

//Llamado metodo propina
$propina = $sale->createPropina(15);
echo $propina;

echo "<br>";
print_r($sale);

// Creación de la clase Sale con propiedades públicas total y date
 class Sale {
    public $total;
    public $date;

    //Funcion dentro de la clase: metodo
    public function createInvoice(){
      echo "Factura impresa";
    }

    public function createPropina(){
       return;
    }
 }