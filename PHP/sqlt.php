<?php
$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");

$query = $mysqli->query("call terminados();");

echo "<div id='form'>";
echo "<table>";
echo "<tr><th>Lista de productos terminados</th></tr>";
echo "<tr>";
echo "<td>";
echo "<div id='form'>";
echo "<table id='productos'>";
echo "<tr><th id='td1'>ID/Código de Barras</th><th>Nombre</th><th>Precio proveedor</th><th>Stock</th><th id='td2'>Proveedor</th></tr>";
while($dat = $query ->fetch_object()){   
echo "<tr><td id='td1'>".$dat->id_producto."</td><td>".$dat->nombre_producto."</td><td>".$dat->precio_proveedor."</td><td>".$dat->cantidad_producto."</td><td id='td2'>".$dat->nombre_empresa."</td></tr>";
}                
echo "</table>";
echo "</div>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";

?>