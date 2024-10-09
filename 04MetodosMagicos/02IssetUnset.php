<?php

/*Los métodos mágicos __isset() y __unset() en PHP se utilizan para controlar 
dinámicamente si una propiedad inaccesible o no definida está establecida 
(__isset()) o para eliminarla (__unset()) cuando se usan isset() o unset().*/

$a = 1;
unset($a);

if(isset($a)){
    echo "Existe";
}else{
    echo "No existe";
}

$wine = new Wine();
unset($wine->style);

class Wine {

    public $style;

    private $data = [
        "name"=> "Vinos"
    ];

    public function __isset($name){
        echo "Se comprueba existencia $name <br>";
        return isset($this->data[$name]);
    }

    public function __unset($name){
        echo "Se intento eliminar la propiedad $name <br>";
    }
}

