<?php
$datos = json_decode(file_get_contents("php://input"));
// Aquí podemos procesar los datos
$idp = $datos->idp;
$nombrep = $datos->nombrep;
$cantidadp = $datos->cantidadp;
$fc = $datos->fc;

$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");
$query = $mysqli->query("call altaNnom_producto('".$nombrep."',".$cantidadp.",'".$fc."');");
$mysqli->close();
echo json_encode("STOCK AUMENTADO");
?>


