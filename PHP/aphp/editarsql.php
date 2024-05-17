<?php        
    $mysqli = new mysqli('localhost','root', '', 'mercury');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("Update proveedor SET nombres='".$_POST['nombres']."', ap_paterno='".$_POST['apa']."', ap_materno='".$_POST['ama']."' , correo='".$_POST['email']."', telefono='".$_POST['telefono']."', nombre_empresa='".$_POST['empresa']."' where id_proveedor = '".$_POST['idprov']."'");
    header("Location:pveditar.php")
?>