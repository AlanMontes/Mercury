<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="shortcut icon" type="image/svg" href="/Mercury/Mercury_Logos/7.png" />
    <link rel="stylesheet" type="text/css" href="/Mercury/CSS/inventario.css" />
    <link rel="stylesheet" href="/Mercury/bootstrap.min.css">
    <link rel="stylesheet" href="/Mercury/estilo1.css" type="text/css">
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="/Mercury/Mercury_Logos/6.png" id="logo">

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        
            <a id="linkNav" class="nav-link active" aria-current="page" href="lphp/caja.php">Caja</a>
            <a id="linkNav" class="nav-link active" aria-current="page" href="lphp/corte_caja.php">Corte Caja</a>
            <a id="linkNav" class="nav-link" href="inventario.php" href="inventario.php">Inventario</a>
            <a id="linkNav" class="nav-link" href="lphp/ing_egr.php">Ingresos/Egresos</a>
            <a id="linkNav" class="nav-link" href="aphp/proveedores.php">Proveedores</a>
            <a id="linkNav" class="nav-link" href="aphp/usulist.php">Registro empleados</a>
          
        </div>
      </div>
      <div id="logout">
        <a href="aphp/indice.html"><img src="/Mercury/Imagen/logout.png" id="imglo"/></a>
      </div>
    </div>
  </nav>
<br><br>
<center>
<section>
        <nav id="menu2">
                <div class="pestañas3" id="p1"><a href="consultarProducto.php" id="r">Consultar Inventario</a></div>
                <div class="pestañas3" ><a href="altaProducto.php" id="r">Alta Inventario</a></div>
                <div class="pestañas3" ><a href="bajaProducto.php" id="r">Baja Inventario</a></div>
                <div class="pestañas3" id="p3-12"><a href="estadisticas.php" id="r">Estadisticas</a></div>
        </nav>
</section>
</center>


    
</body>
</html>