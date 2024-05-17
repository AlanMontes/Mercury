<?php
require_once('tcpdf/tcpdf.php');

// Conectarse a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'mercury');
$conexion->set_charset("utf8");
// Consulta para obtener el último registro
$query = "SELECT * FROM corte ORDER BY id_corte DESC LIMIT 1";
$resultado = mysqli_query($conexion, $query);

// Obtener los datos del último registro
$registro = mysqli_fetch_assoc($resultado);
$id_usuarios = $registro['id_usuarios'];

// Obtener el nombre y apellido utilizando el procedimiento almacenado
$stmt = $conexion->prepare("CALL ObtenerNombreApellido(?, @nombre_apellido)");
$stmt->bind_param("i", $id_usuarios);
$stmt->execute();
$stmt->close();

// Obtener el resultado del procedimiento almacenado
$result = $conexion->query("SELECT @nombre_apellido AS nombre_apellido");
$nombre_apellido = $result->fetch_assoc()['nombre_apellido'];

// Generar un PDF
$pdf = new TCPDF();

$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, 'Corte de caja', 0, 1, 'C');

$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 10, 'Folio: ' . $registro['id_corte'], 0, 1);
$pdf->Cell(0, 10, 'Nombre del cajero: ' . $nombre_apellido, 0, 1);
$pdf->Cell(0, 10, 'Fecha: ' . $registro['fecha_corte'], 0, 1);
$pdf->Cell(0, 10, '500 X ' . $registro['quinientos'], 0, 1);
$pdf->Cell(0, 10, '200 X ' . $registro['doscientos'], 0, 1);
$pdf->Cell(0, 10, '100 X ' . $registro['cien'], 0, 1);
$pdf->Cell(0, 10, '50 X ' . $registro['cincuenta'], 0, 1);
$pdf->Cell(0, 10, '20 X ' . $registro['veinte'], 0, 1);
$pdf->Cell(0, 10, '10 X ' . $registro['diez'], 0, 1);
$pdf->Cell(0, 10, '5 X ' . $registro['cinco'], 0, 1);
$pdf->Cell(0, 10, '2 X ' . $registro['dos'], 0, 1);
$pdf->Cell(0, 10, '1 X ' . $registro['uno'], 0, 1);
$pdf->Cell(0, 10, '0.5 X ' . $registro['cinc_cent'], 0, 1);
$pdf->Cell(0, 10, 'Total: ' . $registro['total'], 0, 1);
$pdf->Cell(0, 10, 'Venta: ' . $registro['monto_venta'], 0, 1);
$pdf->Cell(0, 10, 'Diferenecia: ' . $registro['balance'], 0, 1);


$pdf->Output('corte_caja.pdf', 'D');
?>

