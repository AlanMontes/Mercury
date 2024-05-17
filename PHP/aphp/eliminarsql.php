<?php
    $id=$_GET['id'];
     $mysqli = new mysqli('localhost','root', '', 'mercury');
     $mysqli->set_charset("utf8");
     $query = $mysqli->query("DELETE FROM proveedor WHERE id_proveedor='".$id."'");
     header("Location:pveliminar.php")
?>