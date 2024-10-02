<?php
/* a) Se debe mantener el nombre del trabajador que está uƟlizando la aplicación.
b) Se debe poder añadir y quitar leche o refresco seleccionando de una lista
c) Se debe controlar que no se pueden quitar mas unidades de las que haya, en ese
caso mostrar error. */
session_start();
//Inicializamos las variables por si aun  no existe aun el trabajador
if (!isset($_SESSION['worker'])) {
    $_SESSION['worker'] = '';
}
if (!isset($_SESSION['milk'])) {
    $_SESSION['milk'] = 0;
}
if (!isset($_SESSION['softDrink'])) {
    $_SESSION['softDrink'] = 0;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['worker'] = $_POST['worker'];
    $tipoProducto = $_POST['lista'];
    $quantity = intval($_POST['quantity']);

    //Añadimos la cantidad puesta en el tipo de Producto que se elija
if (isset($_POST['add'])) {
    if ($tipoProducto == 'milk') {
        $_SESSION['milk'] += $quantity;
    } else if ($tipoProducto == 'softDrink') {
        $_SESSION['softDrink'] += $quantity;
    }
 } else if(isset($_POST['remove'])) {
    if ($tipoProducto == 'milk') {
        if($_SESSION['milk'] >= $quantity) {
            $_SESSION['milk'] -= $quantity;
        } else {
            echo "<p> ERROR!! No se puede quitar mas unidades de las que  hay!! </p>";
        }
    } else if($tipoProducto == 'softDrink') {
        if($_SESSION['softDrink'] >= $quantity) {
            $_SESSION['softDrink'] -= $quantity;
        } else {
            echo '<p> ERROR!! No se puede quitar mas unidades de las que  hay!! </p> ';
        }
    }
 }
}
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
    Worker name: <input type="text" name="worker" required>
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
    <input type="reset"  name="reset" value="reset" >
 </form>
 <h3>Inventary:</h3>
 <p>Worker: <?php echo $_SESSION['worker']; ?> </p>
 <p>Units milk: <?php echo $_SESSION['milk']; ?> </p>
 <p>Units soft drink: <?php echo $_SESSION['softDrink']; ?> </p>
</body>
</html>