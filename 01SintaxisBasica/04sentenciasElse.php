<?php

//Variable
$age = 4;

/*Comparativas
    && (AND lógico) se usa para verificar si ambas condiciones son verdaderas.
    || (OR lógico) se usa para verificar si al menos una de las condiciones es verdadera.
*/

//Se deben cumplir las dos condiciones &&.
if($age >= 0 && $age < 18){
    echo "Es de edad temprana";
} elseif ($age > 18 && $age < 60) {
    echo "Es de edad media";
} elseif ($age > 60) {
    echo ("Es de edad avanzada");
} else {
    echo "Ingresa una edad correcta";
}