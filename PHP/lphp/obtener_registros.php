<?php
// Conectar a la base de datos y obtener los registros
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mercury";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT id_trans, id_producto, nombre_p, precio FROM tabla_transacciones";
$result = $conn->query($sql);

$registros = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $registro = array(
            'id_trans' => $row['id_trans'],  // Agregar el campo id_trans al array
            'id_producto' => $row['id_producto'],
            'nombre_p' => $row['nombre_p'],
            'precio' => $row['precio']
        );
        $registros[] = $registro;
    }
}


// Devolver los registros como respuesta en formato JSON
echo json_encode($registros);

$conn->close();
?>
