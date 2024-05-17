<?php
// Obtener los valores enviados desde el formulario
$usuario = $_POST['usuario'];
$quinientos = $_POST['quinientos'];
$doscientos = $_POST['doscientos'];
$cien = $_POST['cien'];
$cincuenta = $_POST['cincuenta'];
$veinte = $_POST['veinte'];
$diez = $_POST['diez'];
$cinco = $_POST['cinco'];
$dos = $_POST['dos'];
$uno = $_POST['uno'];
$cinc_cent = $_POST['cinc_cent'];

// Obtener el total
$b500 = $quinientos * 500;
$b200 = $doscientos * 200;
$b100 = $cien * 100;
$b50 = $cincuenta * 50;
$b20 = $veinte * 20;
$m10 = $diez * 10;
$m5 = $cinco * 5;
$m2 = $dos * 2;
$m1 = $uno;
$mc5 = $cinc_cent * 0.5;

$total = $b500 + $b200 + $b100 + $b50 + $b20 + $m10 + $m5 + $m2 + $m1 + $mc5;

// Obtener la fecha actual
date_default_timezone_set('America/Chihuahua');
$fecha = date("Y-m-d");

// Llamar al procedimiento ObtenerSumaProductosRango y pasar los valores
$db = new mysqli('localhost', 'root', '', 'mercury');
$db->set_charset("utf8");
if ($db->connect_errno) {
    echo "Error al conectar a la base de datos: " . $db->connect_error;
    exit();
}

$query = "CALL SumarMontoPorRangoFechas('$fecha', '$fecha', @venta)";
$db->query($query);

// Obtener el resultado del procedimiento ObtenerSumaProductosRango
$resultado_venta = $db->query("SELECT @venta AS venta");
$venta = intval($resultado_venta->fetch_assoc()['venta']);

// Obtener el balance
$balance = $total - $venta;

// Registro de valores en la BD
$query = $db->prepare("INSERT INTO corte (balance, monto_venta, fecha_corte, id_usuarios, quinientos, doscientos, cien, cincuenta, veinte, diez, cinco, dos, uno, cinc_cent, total)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$query->bind_param("disiiiiiiiiiiid", $balance, $venta, $fecha, $usuario, $quinientos, $doscientos, $cien, $cincuenta, $veinte, $diez, $cinco, $dos, $uno, $cinc_cent, $total);
$query->execute();
$query->close();

// Cerrar la conexión a la base de datos
$db->close();

header("Location: corte_res.php"); // Redireccionar a otra página dentro de la misma carpeta
?>
