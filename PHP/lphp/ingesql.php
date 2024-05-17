<?php
// Obtener los valores enviados desde el formulario
$fecha_inicio = $_POST['inicio'];
$fecha_fin = $_POST['final'];

// Llamar al procedimiento ObtenerSumaProductosRango y pasar los valores
$db = new mysqli('localhost', 'root', '', 'mercury');
$db->set_charset("utf8");
if ($db->connect_errno) {
    echo "Error al conectar a la base de datos: " . $db->connect_error;
    exit();
}

$query = "CALL SumarMontoPorRangoFechas('$fecha_inicio', '$fecha_fin', @venta)";
$db->query($query);

// Obtener el resultado del procedimiento ObtenerSumaProductosRango
$resultado_venta = $db->query("SELECT @venta AS venta");
$venta = intval($resultado_venta->fetch_assoc()['venta']);

// Llamar al procedimiento SumarMontoPorRangoFechas y pasar los valores
$query = "CALL ObtenerSumaProductosRango('$fecha_inicio', '$fecha_fin', @inversion)";
$db->query($query);

// Obtener el resultado del procedimiento SumarMontoPorRangoFechas
$resultado_inversion = $db->query("SELECT @inversion AS inversion");
$inversion = $resultado_inversion->fetch_assoc()['inversion'];

// Obtener la ganancia
$ganancia = $venta - $inversion;

// Obtener la fecha actual
date_default_timezone_set('America/Chihuahua');  
$fecha_exp = date("Y-m-d");

// Registro de valores en la BD
$query = $db->query("INSERT INTO ingresosegresos (ganancia, inversion, venta, fecha_inicio, fecha_final, fecha_exp, periodo) VALUES ('$ganancia', '$inversion', '$venta', '$fecha_inicio', '$fecha_fin', '$fecha_exp', '$fecha_inicio a $fecha_fin')");

// Cerrar la conexión a la base de datos
$db->close();

header("Location: inge_res.php"); // Redireccionar a otra página dentro de la misma carpeta
?>
