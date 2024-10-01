<?php

echo"1) Crea un array asociativo con los siguientes datos y claves.
nombre: Sara, apellido: Martinez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior utilizando foreach <br> <br> ";
$persona = array("nombre" => "Sara","apellido" => "Martinez","edad"=> "23","ciudad" => "Barcelona") ;

$contador = 1;
foreach ($persona as $valor) {
echo "dato" .$contador++. "º:". $valor ."<br>";

}

echo "<br> 2) Muestra los valores del array del ejercicio 1 mostrando la clave y el valor utilizando
foreach. <br> <br>";
foreach ($persona as $key => $valor) {

echo $key.":". $valor ."<br>";
}

echo" <br> 3) Modifica la edad del primer array a 24. Vuelve a mostrar toda su información <br> <br>";
$persona ["edad"] = 24;
$contador = 1;
foreach ($persona as $valor) {
    echo "dato" .$contador++. "º:". $valor ."<br>";
    
    }
echo "<br> 4) Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump. <br> <br>";
unset(  $persona["ciudad"]);
var_dump($persona);

echo "<br> <br>  5) Crear un nuevo array con un valor separado por coma a partir de la cadena de texto
$ letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su información en orden descendente <br> <br>";
$letters = "a,b,c,d,e,f";
$array = explode(",", $letters);
rsort($array);
$contadorDesc = 6;

foreach ($array as $letra) {
echo "letter ".$contadorDesc--."º:" .$letra. "<br>";
}
echo "<br> <br> 6) Un profesor quiere registrar las notas de su clase en un array asociativo. Las notas son
las siguientes: <br>
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1 <br>
Guarda los datos en un array asociativo en el orden previo y muéstralos ordenados de
mayor a menor. <br> <br>";

$array_notas = array("Miguel" => "5","Luis" => "7","Marta" => "10","Isabel" => "8","Aitor" => "4","Pepe" => "1");
arsort( $array_notas );
echo "Notas de los estudiantes:";
foreach ($array_notas as $nombreAlumno => $notaAlumno) {
echo "" .$nombreAlumno . ":" .$notaAlumno. " ";
}
echo "<br> <br> 7) Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media. <br> <br>";

$suma_notas = array_sum($array_notas);
$alumnosTotales = count ( $array_notas);
$mediaDeNotas = $suma_notas / $alumnosTotales;
echo "Media de las notas: " . number_format( $mediaDeNotas,2) ."<br> <br>";

echo "Alumnos por encima de la media: <br>";
foreach ($array_notas as $nombreAlumno => $notaAlumno) {
    if ($notaAlumno > $mediaDeNotas) {
        echo $nombreAlumno . "<br>";
    }
}

echo " <br> 8) Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
array. <br> <br>";
$nota_mas_alta = 0;
$mejor_alumno = '';
foreach ($array_notas as $nombreAlumno => $notaAlumno) {
    if ($notaAlumno > $nota_mas_alta) {
        $nota_mas_alta = $notaAlumno;
        $mejor_alumno = $nombreAlumno;
    }
}
echo "La nota mas alta es " . $nota_mas_alta . " y el mejor alumno es " . $mejor_alumno;