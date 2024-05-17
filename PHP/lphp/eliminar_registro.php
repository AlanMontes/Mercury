<?php
// Conectar a la base de datos y eliminar el registro
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mercury";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$idTrans = $_POST['id_trans'];

$sql = "DELETE FROM tabla_transacciones WHERE id_trans = $idTrans";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado correctamente";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

$conn->close();
?>
