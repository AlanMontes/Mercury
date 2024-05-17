<?php
$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");

$query = $mysqli->query("call nota();");

echo "<div id='form'>";
echo "<table>";
echo "<tr><th>Lista de menos vendidos</th></tr>";
echo "<tr>";
echo "<td>";
echo "<div id='form'>";
echo "<table id='productos'>";
echo "<tr><th id='td1'>ID/Código de Barras</th><th>Nombre</th><th>Precio publico</th><th>Precio proveedor</th><th>Stock</th><th>Proveedor</th><th>Cantidad a pedir</th><th id='td2'>Total</th></tr>";
$cont = 0;
while($dat = $query ->fetch_object()){   
$cont++;
echo "<tr><td id='td1'>".$dat->id_producto."</td><td>".$dat->nombre_producto."</td><td>".$dat->precio_publico."</td><td>".$dat->precio_proveedor."</td><td>".$dat->cantidad_producto."</td><td>".$dat->nombre_empresa."</td><td><input type='number' id='input' class='f' onchange='csub()' oninput='myFunction(this.value,".$dat->precio_proveedor.",".$cont.")' style='text-align: center'> </td><td id='td2'><input type='number' id='".$cont."' class='f' value='0' readonly style='text-align: center'></td></tr>";
}      
echo "<tr><td id='td1'></td><td></td><td></td><td></td><td>Productos terminados:</td><td><input type='number' id='numeroregistros' class='f' value='".$cont."' readonly style='text-align: center'></td><td>SUBTOTAL</td><td id='td2'><p id='subtotal'>0</p></td></tr>";
echo "</table>";
echo "</div>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";

?>