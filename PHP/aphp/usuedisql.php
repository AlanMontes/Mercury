<?php        
    $mysqli = new mysqli('localhost','root', '', 'mercury');
    $mysqli->set_charset("utf8");
    $query = $mysqli->query("Update usuarios SET correo='".$_POST['correo']."',nombre='".$_POST['nombre']."', ap_paterno='".$_POST['apa']."', ap_materno='".$_POST['ama']."' , sexo='".$_POST['sexo']."', id_tipoUsuario='".$_POST['usu']."', usuario='".$_POST['usuario']."',contraseña='".$_POST['contrasena']."' where id_usuarios = '".$_POST['idusu']."'");
    header("Location:usuedit.php")
?>