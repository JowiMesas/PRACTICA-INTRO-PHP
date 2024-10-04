<?php
/**
 * 1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente: 
 * 
 */
$num1 = 20;
echo"Numero 1: $num1 <br>";
$num2 = 57;
echo "Numero 2: $num2 <br>";

echo "<br> 1 . Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for <br>";
for ($i = 0; $i < $num1; $i++) {
 if ($i%2 == 0) {
    echo "$i ";
 }
}
echo" <br> <br>  3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
while. <br>";
$tempNum2 = $num2;
while ($tempNum2 >= 0) {
   echo $tempNum2. " ";
   $tempNum2--;
}
echo "<br> <br> Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while.
 <br> a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez el valor de la primera variable. <br>";
 if ($num2 < $num1) {
   echo $num1;
} else {
   do {
      echo $num1 . " ";
      $num1++;
   } while ($num1 <= $num2);
}

