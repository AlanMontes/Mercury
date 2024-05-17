<?php
$datos = json_decode(file_get_contents("php://input"));
// Aquí podemos procesar los datos
$id = $datos->id;
$tipo = $datos->tipo;
$nom_pro = $datos->nom_pro;
$des = $datos->des;
$precio_pu = $datos->precio_pu;
$precio_prov = $datos->precio_prov;
$cantidad = $datos->cantidad;
$proveedor = $datos->proveedor;
$f_cadu = $datos->f_cadu;


$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");
$query = $mysqli->query("call alta_producto(".$id.", '".$nom_pro."', '".$des."',".$precio_pu.",".$precio_prov.",".$cantidad.",'".$f_cadu."',".$proveedor.",'".$tipo."');");
echo json_encode("PRODUCTO DADO DE ALTA");
?>


