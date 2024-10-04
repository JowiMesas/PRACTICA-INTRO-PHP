<?php
echo "1. Se declara una variable con un valor numérico.  <br> Utilizando una estructura switch/case 
genera un mensaje que indique a qué día de la semana se corresponde. <br> 
a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde 
con ningún día. 
<br>  <br>";
$num1 = rand(1,7);
echo"Dia: $num1 <br>";
switch ($num1) {
    case 1:
        echo"Lunes";
        break;
    case 2: 
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
    default: 
        echo "No es una respuesta correcta";
        break;
}
