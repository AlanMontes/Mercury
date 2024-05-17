<?php
require_once('tcpdf/tcpdf.php');

// Conectarse a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'mercury');
$conexion->set_charset("utf8");
// Consulta para obtener el último registro
$query = "SELECT * FROM ingresosegresos ORDER BY id_ingEgr DESC LIMIT 1";
$resultado = mysqli_query($conexion, $query);

// Obtener los datos del último registro
$registro = mysqli_fetch_assoc($resultado);

// Generar un PDF
$pdf = new TCPDF();

$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, 'Reporte de Ingresos y Egresos', 0, 1, 'C');

$pdf->SetFont('helvetica', '', 12);
$pdf->Cell(0, 10, 'Folio: ' . $registro['id_ingEgr'], 0, 1);
$pdf->Cell(0, 10, 'Ganancia: ' . $registro['ganancia'], 0, 1);
$pdf->Cell(0, 10, 'Inversión: ' . $registro['inversion'], 0, 1);
$pdf->Cell(0, 10, 'Venta: ' . $registro['venta'], 0, 1);
$pdf->Cell(0, 10, 'Fecha expedición: ' . $registro['fecha_exp'], 0, 1);
$pdf->Cell(0, 10, 'Periodo: ' . $registro['periodo'], 0, 1);
// Agrega más celdas para otros campos que deseas mostrar

$pdf->Output('Reporte_IngEgr.pdf', 'D');
?>
