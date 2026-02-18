<?php
include("../config/conexion.php");

$folio = $_POST['folio'];
$tipo = $_POST['tipo_movimiento'];
$cantidad = $_POST['cantidad'];
$id_producto = $_POST['id_producto'];

$sqlStock = "SELECT stock_actual FROM productos WHERE id_producto = $id_producto";
$result = $conn->query($sqlStock);
$row = $result->fetch_assoc();
$stockActual = $row['stock_actual'];

if ($tipo == "VENTA" && $stockActual < $cantidad) {
    echo "Stock insuficiente";
    exit;
}

$nuevoStock = ($tipo == "COMPRA") 
    ? $stockActual + $cantidad 
    : $stockActual - $cantidad;

$conn->query("UPDATE productos SET stock_actual = $nuevoStock WHERE id_producto = $id_producto");

$conn->query("INSERT INTO movimientos (folio, tipo_movimiento, cantidad, id_producto)
              VALUES ('$folio', '$tipo', '$cantidad', '$id_producto')");

echo "Movimiento registrado correctamente";
?>
