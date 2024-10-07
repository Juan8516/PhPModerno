<?php

/*Los métodos mágicos __get() y __set() en PHP permiten acceder y asignar valores 
a propiedades inaccesibles o no definidas de un objeto de forma dinámica.*/

$person = new Person();
$person->name = "Juan";
echo $person->name;
echo $person->country;
$person->address = "Calle mocho";
echo $person->address;

class Person{
    public int $id;
    public string $name;
    public array $data = [];

    public function __get($name){
        echo "No existe $name en el objeto";
        return $this->data[$name];
    }

    public function __set($name, $value){
        echo "No puedes agregar $value a $name";
    }
}