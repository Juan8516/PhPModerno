<?php

/*Una clase es una plantilla que define propiedades y métodos para crear objetos, 
permitiendo organizar y reutilizar código mediante la programación orientada a objetos (POO)*/

// Creación de una nueva instancia de la clase Sale.
$sale = new Sale(250000, date("Y-m-d"));
$sale = new Sale(250000, date("Y-m-d"));
$sale = new Sale(250000, date("Y-m-d"));
echo Sale::$count."<br>";//3
$sale = new Sale(250000, date("Y-m-d"));
echo Sale::$count."<br>";//4

//Llamado propiedad estatica
Sale::reset();//0
$sale = new Sale(250000, date("Y-m-d"));

//Llamado del metodo estatico
echo Sale::$count;//1
echo "<br>";

// Asignación de valores a las propiedades total y date de la instancia $sale
/* ### Nota con los constructores ya no es necesario ### */ 
//$sale->total = 250000;
//$sale->date = date("Y-M-d");

//Llamado del metodo de facturacion.
$sale->createInvoice();

//Llamado metodo propina
$propina = $sale->createTip(15000);
echo $propina;

print_r($sale);

// Creación de la clase Sale con propiedades públicas total y date
 class Sale {
    public $total;
    public $date;
    /*Un método estático en PHP es un método que pertenece a la clase en sí, 
    no a una instancia de la clase, y se puede llamar directamente usando el 
    operador :: sin necesidad de crear un objeto*/
    public static $count;

    /*Los constructores hacen que la creación de objetos sea más 
    eficiente y estructurada.*/
    public  function __construct($total, $date){
      $this->total = $total;
      $this->date = $date;
      self::$count++;
    }

    /*Propiedad estatica:  pertenece a la clase en sí y no a las 
    instancias de la clase, pudiendo ser accedida utilizando el operador :: 
    sin crear un objeto.*/
    public static function reset(){
      self::$count = 0;
    }

    /*Un destructor es un método especial (__destruct()) que se ejecuta 
    automáticamente cuando un objeto se destruye o se sale de su alcance, 
    utilizado para liberar recursos o realizar tareas de limpieza.*/
    // public function __destruct()
    // {
    //   echo "Objeto eliminado";
    // }

    //Funcion dentro de la clase: metodo
    public function createInvoice(){
      echo "Factura impresa <br>";
    }

    public function createTip(){
       return;
    }
 }