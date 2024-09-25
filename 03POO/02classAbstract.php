<?php

/*Una clase abstracta en PHP es una clase que no se puede instanciar directamente 
y que puede contener métodos abstractos, los cuales deben ser implementados por 
las clases que la heredan.*/
$soda1 = new Soda("Colombiana", 5500);
echo $soda1->getName();

showInfo($soda1);
echo " ";

function showInfo(Product $product) {
    echo "$ ".$product->calculatePrice();
}

abstract class Product{
    protected string $name;
    protected float $price;

    //Metodo sin funcionamiento
    abstract public function calculatePrice(): float;

    public function getName(): string{
        return $this->name;
    } 
}

class Soda extends Product{
    //Declaracion constantes, nombres en mayus
    const TAX = 1.1;

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function calculatePrice(): float {
        return $this->price * self::TAX;
    }
} 