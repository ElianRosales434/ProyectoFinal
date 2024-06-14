<?php
include 'conexion.php';

$carnet = $_POST['CarnetB'];
$nombre = $_POST['NombreB'];
$talla = $_POST['TallaB'];
$fecha_entrega = $_POST['FechaEnB'];
$fecha_devolucion = $_POST['FechaReB'];

$sql = "INSERT INTO Birretes (carnet, nombre, talla, fecha_entrega, fecha_devolucion) VALUES ('$carnet', '$nombre', '$talla', '$fecha_entrega', '$fecha_devolucion')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
