<!DOCTYPE html>
<html>
<head>
    <title>Inventario Tienda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Sistema de Inventario</h1>

<h2>Registrar Producto</h2>

<form id="formProducto">
    <input type="text" name="codigo" placeholder="Código" required>
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="descripcion" placeholder="Descripción">
    <input type="number" name="precio" placeholder="Precio" required>
    <input type="number" name="stock" placeholder="Stock Inicial" required>
    <button type="submit">Registrar</button>
</form>

<h2>Inventario</h2>
<button onclick="cargarProductos()">Ver Inventario</button>
<ul id="lista"></ul>

<script src="script.js"></script>
</body>
</html>


