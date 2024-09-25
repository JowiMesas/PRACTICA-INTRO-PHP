<?php
$num1 = 5;
$num2 = 10;
echo"$num1 <br>";
echo"$num2 <br>";
 //Operaciones
 $suma = $num1 + $num2;
 $resta = $num1 - $num2;
 $division = $num1 / $num2;

 //Respuestas
 echo "La suma de $num1 i $num2 es $suma <br>";
 echo "La resta de $num1 i $num2 es $resta <br>";
 echo "La division de $num1 i $num2 es $division <br> ";

 if ($num1 == $num2) {
    echo"$num1 i $num2 son iguales <br>";
 } else if( $num1 > $num2) {
    echo "$num1 es mas grande que $num2 <br>";
 } else if( $num1 < $num2) {
    echo "$num2 es mas grande que $num1 <br> ";
 }
 /**
  * 3. Si las dos variables son valores superiores a 1,
* a. calcula el área del triángulo con base y altura igual a los valores de las
 * variables.
*/
if( $num1 > 1 && $num2 > 1) {
    $area = $num1 * $num2 / 2;
    echo "El area del triangle es $area";
}
