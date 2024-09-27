<?php

/*Los traits en PHP son mecanismos para reutilizar código en múltiples clases, permitiendo incluir métodos 
comunes sin necesidad de herencia.*/

// Trait que permite reutilizar el método sendEmail en cualquier clase que lo use
trait EmailSender{
    public function sendEmail(){
        echo "Email enviado correctamente<br>";
    }
}

trait BD{
    public function save(){
        echo "Base guardada correctamente<br>";
    }
}

trait Log{
    public function log(string $message, string $fileName){
        if(!file_exists($fileName)){
            file_put_contents($fileName, "");
        }

        $current = file_get_contents($fileName);

        /* El operador .= concatena la cadena actual de $current con 
        la fecha y hora formateada*/
        $current .= date("Y-m-d H:i:s")."-".$message."\n";
        file_put_contents($fileName, $current);
    }
}

// Clase Invoice que utiliza el trait EmailSender para enviar emails
class Invoice {
    use EmailSender, BD, Log;

    public function create(){
        echo "Facturacion generada";
        $this->log("Se crea la factura", "log.txt");
    }
}

$invoice = new Invoice();
$invoice->sendEmail();
$invoice->save();
$invoice->create();