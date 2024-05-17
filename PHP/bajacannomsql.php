<?php
$datos = json_decode(file_get_contents("php://input"));
// Aquí podemos procesar los datos
$idp = $datos->idp;
$nombrep = $datos->nombrep;
$radio = $datos->radio;
$cant = $datos->cant;

$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");
$query = $mysqli->query("call bajacannom_producto('".$nombrep."',".$cant.",".$radio.");");
$mysqli->close();
echo json_encode("BAJA REALIZADA");
?>