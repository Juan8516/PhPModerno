<?php

/*Una interfaz en PHP define un conjunto de métodos que una clase debe 
implementar, sin proporcionar la implementación de esos métodos, promoviendo 
un contrato común entre las clases.*/

interface SendInterface{
    public function send(string $message);
}

interface SaveInterface{
    public function save();
}

class Document implements SendInterface, SaveInterface{
    public function send(string $message){
        echo "Se envia factura".$message;
    }

    public function save(){
        echo "Se ha guardado la informacion";
    }
}

class SodaRepository implements SaveInterface{
    public function save(){
        echo "Se envio informacion a la base de datos";
    }
}

class saveProcess{
    private SaveInterface $saveManager;

    public function __construct(SaveInterface $saveManager)
    {
        $this->saveManager = $saveManager;
    }

    public function keep(){
        echo "Proceso antes<br>";
        $this->saveManager->save();
    }
}

$sodaRepository = new SodaRepository();
$document = new Document();
$saveProcess = new saveProcess($sodaRepository);
$saveProcess->keep();

