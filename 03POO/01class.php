<?php

/*Una clase es una plantilla que define propiedades y métodos para crear objetos, 
permitiendo organizar y reutilizar código mediante la programación orientada a objetos (POO)*/

// Creación de una nueva instancia de la clase Sale.
$sale = new Sale(250000, date("Y-m-d")."<br>");

// Asignación de valores a las propiedades total y date de la instancia $sale
/* ### Nota con los constructores ya no es necesario ### */ 
//$sale->total = 250000;
//$sale->date = date("Y-M-d");

//Llamado del metodo de facturacion.
$sale->createInvoice();

//Llamado metodo propina
$propina = $sale->createTip(15000);
echo $propina;

echo "<br>";
print_r($sale);

// Creación de la clase Sale con propiedades públicas total y date
 class Sale {
    public $total;
    public $date;

    /*Los constructores hacen que la creación de objetos sea más 
    eficiente y estructurada.*/
    public  function __construct($total, $date){
      $this->total = $total;
      $this->date = $date;
    }

    /*Un destructor es un método especial (__destruct()) que se ejecuta 
    automáticamente cuando un objeto se destruye o se sale de su alcance, 
    utilizado para liberar recursos o realizar tareas de limpieza.*/
    public function __destruct()
    {
      echo "Objeto eliminado";
    }

    //Funcion dentro de la clase: metodo
    public function createInvoice(){
      echo "Factura impresa <br>";
    }

    public function createTip(){
       return;
    }
 }