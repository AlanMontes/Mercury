<?php
$nom = $_GET['q'];
$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");

$query = $mysqli->query("SELECT id_producto,nombre_producto,descripcion,departamento,precio_publico,precio_proveedor,cantidad_producto,cantidad_mermados,cantidad_caducos,
proveedor.nombre_empresa as 'proveedor', producto.id_proveedor from producto
inner join proveedor on producto.id_proveedor = proveedor.id_proveedor
where nombre_producto='".$nom."';");

echo "<div id='form'>";
echo "<form id='myform'>";
while($dat = $query ->fetch_object()){    
echo "<center><div id='f1'>".$dat->nombre_producto."</div></center>";
echo "<table>";
echo "<tr><td>Código de barras del producto</td><td><input type='number' name='ide' id='ide' class='f' readonly value='".$dat->id_producto."'></td></tr> ";
echo "<tr><td>Nombre del producto </td><td><input type='text' name='nome' id='nome' class='f' value='".$dat->nombre_producto."'></td> </tr>";
echo "<tr><td>Descripción del producto </td><td> <input type='text' name='dese' id='dese' class='f' value='".$dat->descripcion."'></td> </tr>";
echo "<tr><td>Precio público</td><td> <input type='number' name='ppe' id='ppe' class='f' value='".$dat->precio_publico."'></td>" ;
echo "<td>Precio proveedor</td><td> <input type='number' name='pre' id='pre' class='f' value='".$dat->precio_proveedor ."'></td> </tr>"; 
echo "<tr><td>Cantidad en stock</td><td> <input type='number' name='cane' id='cane' class='f' readonly value='".$dat->cantidad_producto ."'></td>"; 
echo "<td>Proveedor ID</td><td><input type='number' name='idpro' id='idpro' class='f' readonly value='".$dat->id_proveedor."'></td> </tr>";
echo "<tr><td>Departamento</td><td> <input type='text' name='depe' id='depe' class='f' readonly value='".$dat->departamento."'></td>"; 
echo "<td>Proveedor nombre</td><td><input type='text' name='prove' id='prove' class='f' readonly value='".$dat->proveedor."'></td> </tr>";
echo "<td>Seleccionar proveedor a cambiar</td>
        <td><center><select name='prov' id='prov' class='f'>
        <option value='1' class='f'>Value 1</option>  
        <option value='2' class='f'>Value 2</option>  
        </select></center></td>";
}
echo "<tr><td></td></tr>";
echo "</table>";
echo "<tr><td><button value='Enviar' type='button' onClick='funs2()';>ACTUALIZAR CAMPOS EDITABLES DEL REGISTRO</button></td></tr>";
echo "</form>";
echo "</div>";








?>