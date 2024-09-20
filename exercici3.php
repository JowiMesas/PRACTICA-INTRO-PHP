<?php
/**
 * 1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente: 
 * 
 */
$num1 = 20;
echo"$num1 <br>";
$num2 = 57;
echo "$num2 <br>";

echo ". Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for <br>";
for ($i = 0; $i < $num1; $i++) {
 if ($i%2 == 0) {
    echo "$i ";
 }
}
echo" <br> 3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
while. <br>";

while ($num2 >= 0) {
   echo $num2. " ";
   $num2--;
}
echo "<br>  Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while.
a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez el valor de la primera variable. <br>";
if ($num1 > $num2) {
   echo $num1;
}
do {
echo $num1 . " ";
$num1++;
} while ($num1 <= $num2);
