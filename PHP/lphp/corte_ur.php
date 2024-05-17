<?php
$db = new mysqli('localhost', 'root', '', 'mercury');
$db->set_charset("utf8");
if ($db->connect_errno) {
    echo json_encode(array('error' => 'Error al conectar a la base de datos: ' . $db->connect_error));
    exit();
}

$query = "SELECT * FROM corte ORDER BY id_corte DESC LIMIT 1";
$result = $db->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id_usuarios = $row['id_usuarios'];

    // Obtener el nombre y apellido utilizando el procedimiento almacenado
    $stmt = $db->prepare("CALL ObtenerNombreApellido(?, @nombre_apellido)");
    $stmt->bind_param("i", $id_usuarios);
    $stmt->execute();
    $stmt->close();

    // Obtener el resultado del procedimiento almacenado
    $result = $db->query("SELECT @nombre_apellido AS nombre_apellido");
    $nombre_apellido = $result->fetch_assoc()['nombre_apellido'];

    // Construir el array de datos a enviar como JSON
    $data = array(
        'id_corte' => $row['id_corte'],
        'balance' => $row['balance'],
        'monto_venta' => $row['monto_venta'],
        'fecha_corte' => $row['fecha_corte'],
        'id_usuarios' => $row['id_usuarios'],
        'nombre_apellido' => $nombre_apellido,
        'quinientos' => $row['quinientos'],
        'doscientos' => $row['doscientos'],
        'cien' => $row['cien'],
        'cincuenta' => $row['cincuenta'],
        'veinte' => $row['veinte'],
        'diez' => $row['diez'],
        'cinco' => $row['cinco'],
        'dos' => $row['dos'],
        'uno' => $row['uno'],
        'cinc_cent' => $row['cinc_cent'],
        'total' => $row['total']
    );

    echo json_encode($data);
} else {
    echo json_encode(array('error' => 'No se encontraron registros'));
}

$db->close();
?>
