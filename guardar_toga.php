<?php
include 'conexion.php';

$carnet = $_POST['CarnetT'];
$nombre = $_POST['NombreT'];
$talla = $_POST['TallaT'];
$fecha_entrega = $_POST['FechaEnT'];
$fecha_devolucion = $_POST['FechaReT'];

$sql = "INSERT INTO Togas (carnet, nombre, talla, fecha_entrega, fecha_devolucion) VALUES ('$carnet', '$nombre', '$talla', '$fecha_entrega', '$fecha_devolucion')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
