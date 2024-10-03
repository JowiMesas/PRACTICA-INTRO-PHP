<?php
/* Crea un php con un array inicial con 3 valores numéricos.
a) Crea un formulario que permita modificar el valor en una posición en concreto.
b) Consigue que se mantenga las modificaciones en el array.
c) Añade un botón para calcular el valor medio.  */
session_start();
if (!isset($_SESSION['arrayNumeros'])) {
    $_SESSION['arrayNumeros'] = [10, 20, 30];
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
    <h2>Modify array saved in season</h2>
    <br>
    Postion to modify: 
    <select name="postion">
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
    <p><?php echo implode(", ", $_SESSION['arrayNumeros']); ?></p>
</body>
</html>