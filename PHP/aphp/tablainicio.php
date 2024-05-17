<?php
        $id = $_GET['id'];
        $user = $_GET['user'];
        $tipo = $_GET['tipo'];
        date_default_timezone_set('America/Chihuahua');
        $fecha = date("Y-m-d");
        $mysqli = new mysqli('localhost','root', '', 'mercury');
        $mysqli->set_charset("utf8");
        $mysqli->query("INSERT INTO inicio_sesion (Id_iniciosesion, id_usuarios, fecha_inicio) VALUES (NULL,'".$id."','".$fecha."');");
        mysqli_close($mysqli);
        header("Location: /Mercury/PHP/lphp/caja.php?user=".$user."&id=".$id."&tipo=".$tipo);
?>

<!--?php
    $id  = $_REQUEST['id'];
    date_default_timezone_set('America/Chihuahua');
    $fecha = date("Y-m-d");
    $mysqli = mysqli_connect("localhost","root", "j@5h&tyl3r", "kidslearnbd");
    $query = $mysqli->query('SELECT * FROM usuarios');
    while($dat = $query ->fetch_object()){
    $dat->id_proveedor;
    }
    $query = ("INSERT INTO inicio_sesion (Id_iniciosesion, id_usuarios, fecha_inicio) VALUES (NULL,'".$_POST['id']."','".$_POST['id']."');");
    
    mysqli_close($mysqli);



    $ids = $datos->ids;
        $id=$_GET['id'];
        date_default_timezone_set('America/Chihuahua');
        $fecha = date("Y-m-d");
        $mysqli = new mysqli('localhost','root','j@5h&tyl3r','mercury');
        $mysqli->set_charset("utf8");
        $mysqli->query("INSERT INTO inicio_sesion (Id_iniciosesion, id_usuarios, fecha_inicio) VALUES (NULL,'".$_POST['id']."','".$_POST['id']."');");
        mysqli_close($mysqli);
    
    ?> -->