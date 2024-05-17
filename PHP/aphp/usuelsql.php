<?php
    $id=$_GET['id'];
     $mysqli = new mysqli('localhost','root', '', 'mercury');
     $mysqli->set_charset("utf8");
     $query = $mysqli->query("DELETE FROM usuarios WHERE id_usuarios='".$id."'");
     header("Location:elimusuarios.php")
?>