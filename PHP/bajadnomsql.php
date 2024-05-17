<?php
$datos = json_decode(file_get_contents("php://input"));
// Aquí podemos procesar los datos
$idp2 = $datos->idp2;
$nombrep2 = $datos->nombrep2;

$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");
$query = $mysqli->query("call bajadnom_producto('".$nombrep2."');");
$mysqli->close();
echo json_encode("BAJA DEFINITIVA REALIZADA");
?>