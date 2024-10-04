<?php

/*Los namespaces en PHP son una forma de organizar y agrupar clases, funciones y 
constantes bajo un mismo espacio de nombres, evitando colisiones de nombres entre 
diferentes partes de un proyecto o bibliotecas.*/


/*El código incluye el archivo Operations.php del namespace Utils, importa la 
clase Operations, crea una instancia de ella, y luego llama al método add*/

require "Utils\Operations.php";

use Utils\Operations;

$op = new Operations();
echo $op->add(5, 9);