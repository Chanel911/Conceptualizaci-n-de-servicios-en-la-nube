<?php
include 'conexion.php';
$clientes = $conexion->query("SELECT * FROM clientes");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes - Glaseado Rosa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css"> <!-- Usa tus estilos pastel -->
    <style>
        .btn-regreso {
            background-color: #f8a5c2;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 20px;
            font-weight: bold;
            text-decoration: none;
        }

        .btn-regreso:hover {
            background-color: #f78fb3;
            color: white;
        }

        .regreso-container {
            display: flex;
            justify-content: center;
            margin: 40px 0 20px;
        }
    </style>
</head>
<body>
    <img src="logo.jpg.png" style="height: 60px;">
</header>
<div class="container mt-5">
    <h1 class="text-center mb-4">Lista de Clientes</h1>
    <div class="text-end mb-3">
        <a href="agregar.php" class="btn btn-success">➕ Agregar Cliente</a>
    </div>
    <table class="table table-bordered table-hover">
        <thead class="table-danger text-white">
            <tr>
                <th>ID</th><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Dirección</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $clientes->fetch_assoc()): ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["nombre"] ?></td>
                <td><?= $row["correo"] ?></td>
                <td><?= $row["telefono"] ?></td>
                <td><?= $row["direccion"] ?></td>
                <td>
                    <a href="ver.php?id=<?= $row['id'] ?>" class="btn btn-info btn-sm">Ver</a>
                    <a href="editar.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="eliminar.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar cliente?')">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<div class="regreso-container">
    <a href="index" class="btn-regreso">⬅️ Regresar al inicio</a>
</div>

</body>
</html>
