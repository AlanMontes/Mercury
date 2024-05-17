<?php
$fi = $_GET['fi'];
$ff = $_GET['ff'];
$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");

$query = $mysqli->query("call lista_mermas('".$fi."', '".$ff."');");

echo "<div id='form'>";
echo "<table>";
echo "<tr><th>Lista de mermas</th></tr>";
echo "<tr>";
echo "<td>";
echo "<div id='form'>";
echo "<table id='productos'>";
echo "<tr><th id='td1'>ID/Código de Barras</th><th>Nombre</th><th>Mermas</th><th>Precio proveedor</th><th>Fecha registro</th><th id='td2'>Stock</th></tr>";
while($dat = $query ->fetch_object()){   
echo "<tr><td id='td1'>".$dat->id_producto."</td><td>".$dat->nombre_producto."</td><td>".$dat->cantidad."</td><td>".$dat->precio_proveedor."</td><td>".$dat->fecha_Registro."</td><td id='td2'>".$dat->stock."</td></tr>";
}                
echo "</table>";
echo "</div>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";

?>