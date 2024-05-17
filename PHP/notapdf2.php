<?php
$id = $_GET['id'];
require_once('tcpdf/tcpdf.php');

// Generar un PDF
$pdf = new TCPDF();

$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, 'NOTA DE PEDIDOS', 0, 1, 'C');


$html = "<div id='form'>
<table id='productos'>
<tr><th>ID/Código de Barras</th><th>Nombre</th><th>Stock</th><th>Proveedor</th><th>Precio publico</th><th>Precio proveedor</th><th>Cantidad a pedir</th><th>Total</th></tr>
<tr><td>125</td><td>Platano</td><td>135</td><td>bimbo</td><td>45</td><td>20</td><td>56</td><td>1000</td></tr>
<tr><td></td><td></td><td></td><td></td><td></td><td></td><td>SUBTOTAL: </td><td></td></tr>
</table>
</div>";
// output the HTML content

$pdf->writeHTML($html, true, false, true, false, '');
ob_end_clean();
$pdf->Output('Nota productos a pedir.pdf', 'D');



?>
