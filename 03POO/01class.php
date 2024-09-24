<?php
//Forzar tipado estricto
declare(strict_types=1);

/*Una clase es una plantilla que define propiedades y métodos para crear objetos, 
permitiendo organizar y reutilizar código mediante la programación orientada a objetos (POO)*/

// Creación de una nueva instancia de la clase Sale.
$sale = new Sale(date("Y-m-d"));
$sale = new Sale(date("Y-m-d"));
$sale = new Sale(date("Y-m-d"));
$concept = new Concept("Coca Cola", 6);
$concept = new Concept("Taco", 1.5);
$sale->addConcept($concept);
echo $sale->getTotal();

//Herencia
//Creacion instancia de herencia
$OnLineSale = new OnlineSale(date("Y-m-d"), "ATM");
//Uso de los metodos del padre.
echo $OnLineSale->createInvoice();
echo $OnLineSale->showInfo();
echo "<br>";

//Llamado funcion concepts
$sale->addConcept($concept);
print_r($sale->concepts);

//Tipado
//echo gettype($sale->total)."<br>";
//echo gettype($sale->date)."<br>";

echo Sale::$count."<br>";//3
$sale = new Sale(date("Y-m-d"));
echo Sale::$count."<br>";//4

//Llamado propiedad estatica
Sale::reset();//0
$sale = new Sale(date("Y-m-d"));

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
echo $propina."<br>";

print_r($sale);

// Creación de la clase Sale con propiedades públicas total y date
 class Sale {
    protected int $total;
    public array $concepts;
    private string $date;

    /*Un método estático en PHP es un método que pertenece a la clase en sí, 
    no a una instancia de la clase, y se puede llamar directamente usando el 
    operador :: sin necesidad de crear un objeto*/
    public static $count;

    /*Los constructores hacen que la creación de objetos sea más 
    eficiente y estructurada.*/
    public  function __construct(string $date){
      $this->total = 0;
      $this->date = $date;
      $this->concepts = [];
      self::$count++;
    }

    /*Propiedad estatica:  pertenece a la clase en sí y no a las 
    instancias de la clase, pudiendo ser accedida utilizando el operador :: 
    sin crear un objeto.*/
    public static function reset(){
      self::$count = 0;
    }

    public function addConcept(Concept $concept){
      $this->concepts[] = $concept;
      $this->total += $concept->amount;
    }

    public function getTotal(){
      return $this->total;
    }

    public function getDate(){
      return $this->date;
    }

    public function setDate(string $date){
      $this->date = $date;
    }

    /*Un destructor es un método especial (__destruct()) que se ejecuta 
    automáticamente cuando un objeto se destruye o se sale de su alcance, 
    utilizado para liberar recursos o realizar tareas de limpieza.*/
    // public function __destruct()
    // {
    //   echo "Objeto eliminado";
    // }

    //Funcion dentro de la clase: metodo
    public function createInvoice(): string{
      return "Factura impresa <br>";
    }

    public function createTip(): int{
       return 15;
    }

  }

  //Herencia
  class OnlineSale extends Sale {
    public string $paymentMethod;

    public function __construct(string $date, string $paymentMethod){
      parent::__construct($date);
      $this->$paymentMethod = $paymentMethod;
    }

    public function showInfo(){
      return "La venta tiene un valor de: $this->total";
    }
  }

  class Concept {
    public string $description;
    public int|float $amount;

    public function __construct(string $description, int|float $amount)
    {
      $this->description = $description;
      $this->amount = $amount;
    }

  }