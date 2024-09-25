<?php

echo"<br> 1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla. <br>";

echo "<br> 2. Se repita la operación hasta que el total de valores sumados sea superior a 100. 
<br>";
$suma = 0;
while ($suma <= 100) {
    $numero = rand(0,20);
    echo $numero . " | ";
    $suma += $numero;
}
