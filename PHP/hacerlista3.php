<?php
$nombre = $_GET['q'];
$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");
$prov =  $mysqli->query("select id_proveedor from producto where nombre_producto ='".$nombre."';");
$p;
while($dat = $prov ->fetch_object()){   
    $p = $dat->id_proveedor;
} 

$query = $mysqli->query("select id_proveedor,upper(nombre_empresa) as 'nombre_empresa' from proveedor;");

while($dat = $query ->fetch_object()){   
    if($dat->id_proveedor == $p){
        echo "<option value='".$dat->id_proveedor."' class='f' selected>".$dat->nombre_empresa."</option>";
    }else{
        echo "<option value='".$dat->id_proveedor."' class='f'>".$dat->nombre_empresa."</option>";
    }
}      

?>