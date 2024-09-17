<?php

//Iteracion normal
for($i = 1; $i <= 10; $i++){
    echo $i;
}
echo "<br>";

//Iteracion for con if y break
for($i = 1; $i < 10; $i++){
    if($i % 2 == 0){
        break; //Encuentra el primer numero que cumpla la condicion y se detiene.
    }
    echo $i;
}
echo "<br>";

//Iteracion for con if - (mostrar numeros pares)
for($i = 1; $i < 10; $i++){
    if($i % 2 == 0){
        echo $i;
    }
}
echo "<br>";

//Iteracion for con if y continue
for($i = 1; $i < 10; $i++){
    if($i % 2 == 0){
        continue; //Salta los pares, muestra solo impares
    }
    echo $i;
}
echo "<br>";

//Ejemplo numeros pares sin break.
for($i = 1; $i <= 10; $i++){
    if($i % 2 == 0){
        echo $i;
    }
}
echo "<br>";

//Ejemplo numeros impares sin continue.
for($i = 1; $i <= 10; $i++){
    if($i % 2 == 1){
        echo $i;
    }
}
