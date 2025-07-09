<?php
include 'conexion.php';
$id = $_GET["id"];
$conexion->query("DELETE FROM clientes WHERE id = $id");
header("Location: panel.php");
exit;
?>