<?php
// Obtener el valor del parámetro id_producto enviado desde JavaScript
$id_producto = $_POST['id_producto'];

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mercury";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Llamar al procedimiento almacenado y obtener los valores del producto
$sql = "CALL ObtenerProducto($id_producto, @nombre_producto, @precio_publico)";

if ($conn->query($sql) === TRUE) {
    // Obtener los valores de las variables de salida del procedimiento almacenado
    $result = $conn->query("SELECT @nombre_producto AS nombre_producto, @precio_publico AS precio_publico");
    $row = $result->fetch_assoc();

    $nombre_producto = $row['nombre_producto'];
    $precio_publico = $row['precio_publico'];

    // Insertar los valores en la tabla "tabla_transacciones"
    $insert_query = "INSERT INTO tabla_transacciones (id_producto, nombre_p, precio) VALUES ('$id_producto', '$nombre_producto', $precio_publico)";
    if ($conn->query($insert_query) !== TRUE) {
        echo "Error al agregar el producto: " . $conn->error;
    }
} else {
    echo "Error al llamar al procedimiento almacenado: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
