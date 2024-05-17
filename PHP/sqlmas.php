<?php
$fi = $_GET['fi'];
$ff = $_GET['ff'];
$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");

$query = $mysqli->query("call masvendidos('".$fi."', '".$ff."');");

echo "<div id='form'>";
echo "<table>";
echo "<tr><th>Lista de más vendidos</th></tr>";
echo "<tr>";
echo "<td>";
echo "<div id='form'>";
echo "<table id='productos'>";
echo "<tr><th id='td1'>ID/Código de Barras</th><th>Nombre</th><th>Cantidad vendido</th><th>Monto total de venta</th><th>Stock</th><th id='td2'>Fecha venta</th></tr>";
while($dat = $query ->fetch_object()){   
echo "<tr><td id='td1'>".$dat->id_producto."</td><td>".$dat->nombre_producto."</td><td>".$dat->cantidadVendido."</td><td>".$dat->montoPorProductos."</td><td>".$dat->cantidad_producto."</td><td id='td2'>".$dat->fechaVenta."</td></tr>";
}                
echo "</table>";
echo "</div>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";

?>