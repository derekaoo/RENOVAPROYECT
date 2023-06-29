<?php
include_once("conexion.php");

// Obtener la valoración enviada
$valoracion = $_POST['valoracion'];

// Validar la valoración (opcional)
if ($valoracion < 1 || $valoracion > 5) {
  die("Valoración inválida");
}

// Insertar la valoración en la base de datos
$stmt = $conexion->prepare("INSERT INTO reseñas (valoracion) VALUES (?)");
$stmt->bind_param("i", $valoracion);
$stmt->execute();

// Verificar si la valoración se guardó correctamente
if ($stmt->affected_rows > 0) {
  echo "Valoración guardada correctamente";
} else {
  echo "Error al guardar la valoración";
}

// Cerrar la declaración y la conexión
$stmt->close();
$conexion->close();
?>
