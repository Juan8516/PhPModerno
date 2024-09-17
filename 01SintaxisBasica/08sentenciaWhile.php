<?php
//Variable global
$i = 1;
$j = 1;
$k = 1;
$l = 1;

//Iteracion normal
while($i <= 10){
    echo $i;
    $i++;
}
echo "<br>";

//Iteracion for con if y break
while($j <= 10){
    if($j % 2 == 0){
        break;
    }
    $j++;
    echo $j;
}
echo "<br>";

//Iteracion for con if - (mostrar numeros pares)
while($k <= 10){
    if($k % 2 == 0){
        echo $k;
    }
    $k++;
}
echo "<br>";

//Iteracion for con if - (mostrar numeros impares)
while($l <= 10){
    if($l % 2 == 1){
        echo $l;
    }
    $l++;
    
}
