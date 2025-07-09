<?php
include 'conexion.php';
$id = $_GET["id"];
$resultado = $conexion->query("SELECT * FROM clientes WHERE id = $id");
$cliente = $resultado->fetch_assoc();
if (!$cliente) {
    echo "<div class='container'><h2>No se encontró el cliente.</h2><a href='index.php' class='btn btn-primary mt-3'>Volver</a></div>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <img src="logo.jpg.png" style="height: 60px;">
<div class="container">
    <h2>Detalles del Cliente</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nombre:</strong> <?= $cliente["nombre"] ?></li>
        <li class="list-group-item"><strong>Correo:</strong> <?= $cliente["correo"] ?></li>
        <li class="list-group-item"><strong>Teléfono:</strong> <?= $cliente["telefono"] ?></li>
        <li class="list-group-item"><strong>Dirección:</strong> <?= $cliente["direccion"] ?></li>
        <li class="list-group-item"><strong>Fecha de Registro:</strong> <?= $cliente["fecha_registro"] ?></li>
    </ul>
    <a href="panel.php" class="btn btn-primary mt-3">Volver</a>
</div>
</body>
</html>