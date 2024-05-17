<?php
$id = $_GET['id'];
require_once('tcpdf/tcpdf.php');

 $mysqli = new mysqli('localhost','root', '', 'mercury');
 $mysqli->set_charset("utf8"); 
 $query = $mysqli->query("call nota();");

// Generar un PDF
$pdf = new TCPDF();

$pdf->SetMargins(10, 10, 10);
$pdf->AddPage();

$pdf->SetFont('helvetica', 'B', 12);
$pdf->Cell(0, 10, 'NOTA DE PEDIDOS', 0, 1, 'C');
$cont =0;
 $pdf->SetFont('helvetica', '', 12);
 while($dat = $query ->fetch_object()){   
 $cont++;
 $pdf->Cell(10, 10, 'PRODUCTO: ' .$cont, 0, 1);
 $pdf->Cell(10, 10, 'Codigo barras: ' .$dat->id_producto, 0, 1);
 $pdf->Cell(20, 10, 'Producto: ' .$dat->nombre_producto, 0, 1);
 $pdf->Cell(30, 10, 'Precio venta: ' .$dat->precio_publico, 0, 1);
 $pdf->Cell(40, 10, 'Precio proveedor: ' .$dat->precio_proveedor, 0, 1);
 $pdf->Cell(50, 10, 'Proveedor: ' .$dat->nombre_empresa, 0, 1);
}  
$pdf->Cell(60, 10, 'SUBTOTAL A PAGAR: $' .$id, 0, 1);

// $html = '            <div id="form">
// <table id="productos">
// <tr><th>ID/Código de Barras</th><th>Nombre</th><th>Stock</th><th>Proveedor</th><th>Precio publico</th><th>Precio proveedor</th><th>Cantidad a pedir</th><th>Total</th></tr>
// <tr><td>125</td><td>Platano</td><td>135</td><td>bimbo</td><td>45</td><td>20</td><td>56</td><td>1000</td></tr>
// <tr><td></td><td></td><td></td><td></td><td></td><td></td><td>SUBTOTAL: </td><td>1000</td></tr>
// </table>
// </div>';

// // output the HTML content
// $pdf->writeHTML($html, true, false, true, false, '');
ob_end_clean();
$pdf->Output('Nota productos a pedir.pdf', 'D');



?>
