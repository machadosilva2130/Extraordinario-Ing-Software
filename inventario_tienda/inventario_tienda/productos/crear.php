<?php
include("../config/conexion.php");

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$sql = "INSERT INTO productos (codigo, nombre, descripcion, precio, stock_actual)
        VALUES ('$codigo', '$nombre', '$descripcion', '$precio', '$stock')";

if ($conn->query($sql) === TRUE) {
    echo "Producto registrado correctamente";
} else {
    echo "Error: " . $conn->error;
}
?>
