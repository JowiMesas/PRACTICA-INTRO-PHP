<?php
/* Crea un php con un array inicial con 3 valores numéricos.
a) Crea un formulario que permita modificar el valor en una posición en concreto.
b) Consigue que se mantenga las modificaciones en el array.
c) Añade un botón para calcular el valor medio.  */
session_start();
if (!isset($_SESSION['arrayNumeros'])) {
    $_SESSION['arrayNumeros'] = [10, 20, 30];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["modify"])) {
        $position = $_POST["position"];
        $newValue = $_POST["newValue"];
        
        $_SESSION['arrayNumeros'][$position] = $newValue;
    } else if (isset($_POST['average'])) {
        $sumaTotal = array_sum($_SESSION['arrayNumeros']);
        $_SESSION['posAverage'] = number_format($sumaTotal / count($_SESSION['arrayNumeros']), 2);

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciseSession02</title>
</head>
<body>
 <form action="" method="post" >
 <h2>Modify array saved in season</h2>
    <br>
    Postion to modify: 
    <select name="position">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
    <br> <br>
    New value:
    <input type="number" name="newValue" >
    <br>
    <br>
    <input type="submit" name="modify" value="Modify">
    <input type="submit" name="average" value="Average" >
    <input type="reset" value="Reset" >
    <br>
 </form>
    <p>Current array: <?php echo implode(", ", $_SESSION['arrayNumeros']); ?></p>
    <p><?php 
    if(isset( $_SESSION['posAverage'])) {
        echo 'Average: '. $_SESSION['posAverage'] .'';
    }
    ?></p>
</body>
</html>