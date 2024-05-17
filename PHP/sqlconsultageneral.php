<?php
$tip = $_GET['q'];
$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");

$query = $mysqli->query("SELECT id_producto,nombre_producto,departamento,precio_publico,precio_proveedor,cantidad_producto,cantidad_mermados,cantidad_caducos,
proveedor.nombre_empresa as 'proveedor' from producto
inner join proveedor on producto.id_proveedor = proveedor.id_proveedor
ORDER BY departamento;");

// $stmt = $mysqli->prepare($sql);
// $stmt->bind_param("s", $_GET['q']);
// $stmt->execute();
// $stmt->store_result();
// $stmt->bind_result($id_producto, $nombre_producto, $precio_publico, $precio_proveedor, $cantidad_producto, $cantidad_mermados, $cantidad_caducos, $proveedor);
// $stmt->fetch();
// $stmt->close();

echo "<table id='productos'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Nombre</th>";
echo "<th>Departamento</th>";
echo "<th>Precio publico</th>";
echo "<th>Precio proveedor</th>";
echo "<th>Cantidad en STOCK</th>";
echo "<th>Cantidad mermados</th>";
echo "<th>Cantidad caducos</th>";
echo "<th>Proveedor</th>";
echo "</tr>";
while($dat = $query ->fetch_object()){    
echo "<tr>";
echo "<td>" .$dat->id_producto. "</td>";
echo "<td>" .$dat->nombre_producto . "</td>";
echo "<td>" .$dat->departamento . "</td>";
echo "<td>" .$dat->precio_publico . "</td>";
echo "<td>" .$dat->precio_proveedor . "</td>";
echo "<td>" .$dat->cantidad_producto . "</td>";
echo "<td>" .$dat->cantidad_mermados . "</td>";
echo "<td>" .$dat->cantidad_caducos . "</td>";
echo "<td>" .$dat->proveedor . "</td>";
echo "</tr>";
}
echo "</table>";
?>