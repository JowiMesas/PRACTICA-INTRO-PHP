<?php

echo"<br> 1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla. <br>";

echo "<br> 2. Se repita la operación hasta que el total de valores sumados sea superior a 100. 
<br>";
$suma = 0;
$numeros_pares = 0;
$numeros_impares = 0;
while ($suma <= 100) {
    $numero = rand(0,20);
    echo $numero . " | ";
    $suma += $numero;

    if  ($numero % 2 == 0) {
        $numeros_pares++;
    } else {
        $numeros_impares++;
    }
    }
echo "<br> <br> ";
echo " <br> La suma de valores es $suma";

echo"<br> <br> 4. Muestra el total de números pares e impares generados. 
<br> ";
echo" Hay $numeros_pares numeros pares <br> ";
echo" Hay $numeros_impares numeros impares <br>";
