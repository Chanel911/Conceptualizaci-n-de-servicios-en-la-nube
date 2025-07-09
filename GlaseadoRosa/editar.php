<?php
include 'conexion.php';
$id = $_GET["id"];
$resultado = $conexion->query("SELECT * FROM clientes WHERE id = $id");
$cliente = $resultado->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $conexion->query("UPDATE clientes SET nombre='$nombre', correo='$correo', telefono='$telefono', direccion='$direccion' WHERE id=$id");
    header("Location: panel.php"); // Redirige al panel después de guardar
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <img src="logo.jpg.png" style="height: 60px;">
<div class="container">
    <h2>Editar Cliente</h2>
    <form method="POST">
        <div class="mb-3"><label>Nombre</label><input type="text" name="nombre" class="form-control" value="<?= $cliente['nombre'] ?>" required></div>
        <div class="mb-3"><label>Correo</label><input type="email" name="correo" class="form-control" value="<?= $cliente['correo'] ?>" required></div>
        <div class="mb-3"><label>Teléfono</label><input type="text" name="telefono" class="form-control" value="<?= $cliente['telefono'] ?>" required></div>
        <div class="mb-3"><label>Dirección</label><input type="text" name="direccion" class="form-control" value="<?= $cliente['direccion'] ?>" required></div>
        <button class="btn btn-primary" type="submit">Guardar Cambios</button>
        <a href="panel.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
