<?php
// Establecer la conexión con la base de datos
$conexion = new mysqli('localhost', 'root', '', 'mercury');
$conexion->set_charset("utf8");
// Verificar la conexión
if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Consulta para eliminar todos los registros
$query = "TRUNCATE TABLE tabla_transacciones";

// Ejecutar la consulta
if ($conexion->query($query) === TRUE) {
    // Éxito al eliminar los registros
    $response = array('success' => true);
} else {
    // Error al ejecutar la consulta
    $response = array('success' => false);
}

// Devolver la respuesta como JSON
echo json_encode($response);

// Cerrar la conexión
$conexion->close();
?>
