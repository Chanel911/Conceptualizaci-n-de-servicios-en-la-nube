<?php
include 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $conexion->query("INSERT INTO clientes (nombre, correo, telefono, direccion, fecha_registro) VALUES ('$nombre', '$correo', '$telefono', '$direccion', NOW())");
    header("Location: panel.php"); // redirige al panel de clientes
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <h2>Agregar Cliente</h2>
    <form method="POST">
        <div class="mb-3"><label>Nombre</label><input type="text" name="nombre" class="form-control" required></div>
        <div class="mb-3"><label>Correo</label><input type="email" name="correo" class="form-control" required></div>
        <div class="mb-3"><label>Teléfono</label><input type="text" name="telefono" class="form-control" required></div>
        <div class="mb-3"><label>Dirección</label><input type="text" name="direccion" class="form-control" required></div>
        <button class="btn btn-success" type="submit">Guardar</button>
        <a href="panel.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
