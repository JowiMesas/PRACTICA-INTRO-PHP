<?php
/* a) Se debe mantener el nombre del trabajador que está uƟlizando la aplicación.
b) Se debe poder añadir y quitar leche o refresco seleccionando de una lista
c) Se debe controlar que no se pueden quitar mas unidades de las que haya, en ese
caso mostrar error. */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciseSession1</title>
</head>
<body>
 <form action="" method="post">
 <h2>Supermarket management</h2>
    Worker name: <input type="text" name="quantity" required>
    <br>
    <h3>Choose product: </h3>
    <select name="lista" id="lista">
        <option value="milk">Milk</option>
        <option value="softDrink">Soft Drink</option>
    </select>
    <br>
    <h3>Product quantity:</h3>
    <input type="number" name = "quantity">
    <br> <br>
    <input type="submit" name="add" value="add" >
    <input type="submit" name="remove" value="remove" >
    <input type="submit"  name="reset" value="reset" >
 </form>
</body>
</html>