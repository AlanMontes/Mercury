<?php
    $id = $datos->id;
    $nombres = $datos->nombres;
    $apa = $datos->apa;
    $ama = $datos->ama;
    $email = $datos->email;
    $telefono = $datos->telefono;
    $empresa = $datos->$empresa;
        $mysqli = new mysqli('localhost','root', '', 'mercury');
        $mysqli->set_charset("utf8");
        $query = $mysqli->query("INSERT INTO proveedor (id_proveedor, nombres, ap_paterno, ap_materno, correo, telefono, nombre_empresa) VALUES (null,'".$_POST['nombres']."', '".$_POST['apa']."', '".$_POST['ama']."','".$_POST['email']."', ".$_POST['telefono'].", '".$_POST['empresa']."');");
        header("Location: proveedores.php");
?>


<!--
        $query = $mysqli->query("call altas_proveedor ('.$id.','.$nombres.','.$apa.','.$ama.','.$email.', '.$telefono.','.$empresa.');");-->
        <!--$query = $mysqli->query("call altaNid_producto(".$idp.",".$cantidadp.",'".$fc."');");
$mysqli->close();