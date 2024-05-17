<?php

// Obtener la fecha actual
date_default_timezone_set('America/Chihuahua');
$fechaVenta = date("Y-m-d");

// Realizar la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mercury";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Obtener el ID del último registro de la tabla "ticket"
$sqlIdTicket = "SELECT id_ticket FROM ticket ORDER BY id_ticket DESC LIMIT 1";
$resultIdTicket = $conn->query($sqlIdTicket);

// Verificar si la consulta fue exitosa y se obtuvo el ID del último ticket
if ($resultIdTicket && $resultIdTicket->num_rows > 0) {
    $rowIdTicket = $resultIdTicket->fetch_assoc();
    $idTicket = $rowIdTicket['id_ticket'];

    // Inserción en la tabla "ventas"
    $query = "INSERT INTO ventas (cantidadvendidos, id_producto, montoPorProductos, fechaVenta, id_ticket) 
    SELECT COUNT(tt.id_producto) AS cantidadvendidos, tt.id_producto, (COUNT(tt.id_producto) * p.precio_publico) AS montoPorProductos, '$fechaVenta', $idTicket
    FROM tabla_transacciones tt
    INNER JOIN producto p ON tt.id_producto = p.id_producto
    GROUP BY tt.id_producto";

    if ($conn->query($query) === TRUE) {
        // Inserción exitosa
        $response = array('success' => true);
        echo json_encode($response);
    } else {
        // Error al insertar en la tabla "ventas"
        $response = array('success' => false);
        echo json_encode($response);
    }
} else {
    // Error al obtener el ID del último ticket
    $response = array('success' => false, 'error' => 'Error al obtener el ID del último ticket');
    echo json_encode($response);
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
