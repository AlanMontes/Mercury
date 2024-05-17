<?php
        $mysqli = new mysqli('localhost','root', '', 'mercury');
        $mysqli->set_charset("utf8");
        $query = $mysqli->query("INSERT INTO usuarios (id_usuarios, nombre_pventa, correo, nombre, ap_paterno, ap_materno, sexo, id_tipoUsuario, usuario, contraseña) VALUES (null,'".$_POST['pvname']."', '".$_POST['correoe']."', '".$_POST['nombres']."','".$_POST['apa']."', ".$_POST['ama'].", '".$_POST['sexo']."', '".$_POST['usu']."', '".$_POST['usuario']."', '".$_POST['contrasena']."');"
            );
        header("Location: registroi.php");
?>
   <!-- id_usuarios, nombre_pventa, correo, nombre, ap_paterno, ap_materno, sexo, id_tipoUsuario, usuario, contraseña-->