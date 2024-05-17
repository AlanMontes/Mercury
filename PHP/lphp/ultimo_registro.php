<?php
$db = new mysqli('localhost', 'root', '', 'mercury');
$db->set_charset("utf8");
if ($db->connect_errno) {
    echo json_encode(array('error' => 'Error al conectar a la base de datos: ' . $db->connect_error));
    exit();
}

$query = "SELECT * FROM ingresosegresos ORDER BY id_ingEgr DESC LIMIT 1";
$result = $db->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $data = array(
        'id_ingEgr' => $row['id_ingEgr'],
        'periodo' => $row['periodo'],
        'inversion' => $row['inversion'],
        'venta' => $row['venta'],
        'ganancia' => $row['ganancia'],
        'fecha_exp' => $row['fecha_exp']
    );

    echo json_encode($data);
} else {
    echo json_encode(array('error' => 'No se encontraron registros'));
}

$db->close();
?>
