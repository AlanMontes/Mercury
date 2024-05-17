<?php

$ide = $_GET['q'];
$nome = $_GET['nome'];
$dese = $_GET['dese'];
$ppe = $_GET['ppe'];
$pre = $_GET['pre'];
$idpro = $_GET['idpro'];

$mysqli = new mysqli('localhost','root', '', 'mercury');
$mysqli->set_charset("utf8");
$query = $mysqli->query("call editar_producto(".$ide.", '".$nome."', '".$dese."',".$ppe.",".$pre.",".$idpro.");");
$mysqli->close();


echo "REGISTRO EDITADO";

?>