<?php

/*Los métodos mágicos __call() y __callStatic() en PHP permiten interceptar 
llamadas a métodos no definidos en un objeto (__call()) o en una clase estática 
(__callStatic()), permitiendo así manejar dinámicamente esas invocaciones.*/

$engine = new Engine("log.txt");
$engine->error("Un error ocurrio");
$engine->log("el usuario ha hecho lo siguiente");
$engine->warning("Alerta !!!");
//$engine->run('name', "some", true);
//$engine::some();

Class Engine{

    private $fileName;

    public function __construct($fileName){
        $this->fileName = $fileName;
    }

    public function __call($name, $args){
        echo "Llamando al metodo '$name'"
            ."con los argumentos: ".implode(', ', $args) . "\n";
            $message = $name.": ";
            $message .= $args[0]." - ";
            $message .= date("Y-m-d H:i:s")."\n";

            if(!file_exists($this->fileName)){
                file_put_contents($this->fileName, "");
            }

            file_put_contents($this->fileName, $message, FILE_APPEND);
    }

    public static function __callStatic($name, $args){
        echo "Llamando al metodo '$name'"
            ."con los argumentos: ".implode(', ', $args) . "\n";
    }
}