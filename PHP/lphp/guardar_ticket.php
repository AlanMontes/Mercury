<?php
// Establecer la conexión a la base de datos
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

// Obtener los datos enviados desde JavaScript
$montoTotal = $_POST['monto_total'];
$pagoCant = $_POST['pago_cant'];
$cambio = $_POST['cambio'];
$idFpago = $_POST['id_fpago'];

// Obtener el id_usuario del último registro de la tabla inicio_sesion
$sqlIdUsuario = "SELECT id_usuarios FROM inicio_sesion ORDER BY Id_iniciosesion DESC LIMIT 1";
$resultIdUsuario = $conn->query($sqlIdUsuario);

// Verificar si la consulta fue exitosa y se obtuvo el id_usuario
if ($resultIdUsuario && $resultIdUsuario->num_rows > 0) {
  $rowIdUsuario = $resultIdUsuario->fetch_assoc();
  $idUsuario = $rowIdUsuario['id_usuarios'];

  // Preparar la consulta SQL para insertar los datos en la tabla "ticket"
  $sql = "INSERT INTO ticket (monto_total, pago_cant, cambio, id_fpago, id_usuarios) VALUES (?, ?, ?, ?, ?)";

  // Preparar la sentencia
  $stmt = $conn->prepare($sql);

  // Verificar si hubo algún error al preparar la sentencia
  if (!$stmt) {
    echo json_encode(['success' => false, 'error' => 'Error al preparar la consulta']);
    exit;
  }

  // Asignar los valores a los parámetros de la sentencia
  $stmt->bind_param("dddsi", $montoTotal, $pagoCant, $cambio, $idFpago, $idUsuario);

  // Ejecutar la sentencia
  if ($stmt->execute()) {
    // La inserción fue exitosa
    echo json_encode(['success' => true]);
  } else {
    // Error al ejecutar la consulta SQL
    echo json_encode(['success' => false, 'error' => 'Error al ejecutar la consulta']);
  }

  // Cerrar la sentencia
  $stmt->close();
} else {
  // Error al obtener el id_usuario
  echo json_encode(['success' => false, 'error' => 'Error al obtener el id_usuario']);
}

$conn->close();
?>
