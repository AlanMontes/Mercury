<?php
$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");

$query = $mysqli->query("select id_proveedor,upper(nombre_empresa) as 'nombre_empresa' from proveedor;");

while($dat = $query ->fetch_object()){   
echo "<option value='".$dat->id_proveedor."' class='f'>".$dat->nombre_empresa."</option>";
}      
?>