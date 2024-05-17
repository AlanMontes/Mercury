<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERCURY</title>
    <link rel="shortcut icon" type="image/svg" href="/Mercury/PHP/lphp/Mercury_Logos/7.png"/>
    <!--Boostrap-->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/RDiseno.css"/>
    </head>
    <body class="prov">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            <img src="IMAGENES/6.png" id="logo">

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a id="linkNav" class="nav-link active" aria-current="page" href="/Mercury/PHP/lphp/caja.php">Caja</a>
            <a id="linkNav" class="nav-link active" aria-current="page" href="/Mercury/PHP/lphp/corte_caja.php">Corte Caja</a>
            <a id="linkNav" class="nav-link" href="/Mercury/PHP/inventario.php">Inventario</a>
            <a id="linkNav" class="nav-link" href="/Mercury/PHP/lphp/ing_egr.php">Ingresos/Egresos</a>
            <a id="linkNav" class="nav-link" href="proveedores.php">Proveedores</a>
            <a id="linkNav" class="nav-link" href="usulist.php">Registro empleados</a>
                </div>
            </div>
            <div id="logout">
                <a href="indice.html"><img src="IMAGENES/logout.png" id="imglo"/></a>
            </div>
            </div>
        </nav>

    <div class="cont1">
        <div class="cont2">
        <section>
           <center> <h1>Editar Proveedores</h1><br>
           <a class="btn" href="proveedores.php">Lista</a>
            <a class="btn" href="pvagregar.php">Altas</a>
            <a class="btn" href="pveliminar.php">Bajas</a>
            <a class="btn" href="pveditar.php">Editar</a>
        
            <table class="tpr">
            <tr id="ptr">
                <th class="num">ID</th><th class="tb">Nombres</th><th class="tb">Apellido paterno</th>
                <th class="tb">Apellido Materno</th><th class="tb">Email</th><th class="tb">Teléfono</th><th class="tb">Empresa</th><th class="tb"></th>
            </tr> <br></br>
            <?php
            $mysqli = new mysqli('localhost','root','', 'mercury');
			$mysqli->set_charset("utf8");
			$query = $mysqli->query('SELECT * FROM proveedor');
			while($dat = $query ->fetch_object()){
			echo "<tr><td>".$dat->id_proveedor."</td><td>".$dat->nombres.
            "</td><td>".$dat->ap_paterno."</td><td>".$dat->ap_materno.
			"</td><td>".$dat->correo."</td><td>".$dat->telefono."</td><td>".$dat->nombre_empresa."</td>
            <td><a id='editar' href='pvcambios.php?id=".$dat->id_proveedor."' class='btn'>Editar</a></td></tr>";
            
			}
            ?>
            </table></center>
        </section>
    </div>
    </div>
        <div>
            <footer class=" text-center text-lg-start fixed-bottom">
             <div class="text-center p-3">
              © 2023 Mercury Team
             </div>
            </footer>
        </div>
    </body>
</html>