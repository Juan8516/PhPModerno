<?php

/*Poliformismo en interfases: permite quediferentes clases implementen los mismos 
métodos definidos en una interfaz de maneras distintas, promoviendo un 
comportamiento uniforme a través de 
múltiples clases.*/

interface GetInfo{
    public function getInfo(): string;
}

class Address implements GetInfo{
    protected $address;

    public function __construct($address){
        $this->address = $address;
    }

    public function getInfo(): string{
        return $this->address;
    }
}

class WebSite implements GetInfo{
    protected $url;

    public function __construct($url){
        $this->url = $url;
    }

    public function getInfo(): string
    {
        return file_get_contents($this->url);
    }
    
}

function printInfo(GetInfo $site){
    echo $site->getInfo();
}

$address = new Address("Calle 51E");
$weSite = new WebSite("https://www.php.net/");
printInfo($weSite);




