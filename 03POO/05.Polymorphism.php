<?php

/*El polimorfismo en programación orientada a objetos es la capacidad de 
diferentes clases de responder a un mismo método de manera distinta, 
permitiendo usar una misma interfaz o método en múltiples formas según 
la clase que lo implemente.*/

class Discount{
    protected $discount = 0;

    public function __construct($discount){
        $this->discount = $discount;
    }

    public function getDiscount($price){
        echo "Se aplica descuento<br>";
        return $price * $this->discount;
    }
}

class SpecialDiscount extends Discount{
    const SPECIAL_DISCOUNT = 2;

    /*En la clase SpecialDiscount, la función getDiscount sobrescribe el 
    método del padre para aplicar un descuento especial, multiplicando el 
    precio por el valor del descuento heredado y por SPECIAL_DISCOUNT.*/
    public function getDiscount($price){
        echo "Se aplica descuento especial<br>";
        return $price * $this->discount * self::SPECIAL_DISCOUNT;
    }
}

$discount = new SpecialDiscount(0.1);
$discountAmount = $discount->getDiscount(500);
echo $discountAmount;