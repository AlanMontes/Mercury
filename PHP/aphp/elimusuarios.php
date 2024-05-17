<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERCURY</title>
    <!--Boostrap-->
    <link rel="stylesheet" href="/Mercury/CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Mercury/CSS/RDiseno.css"/>
    <title>Conexion bd</title>
</head>
<body class="prov">
<nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            <img src="/Mercury/IMAGENES/6.png" id="logo">

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                
                    <a id="linkNav" class="nav-link active" aria-current="page" href="">Caja</a>
                    <a id="linkNav" class="nav-link" href="">Registro clientes</a>
                    <a id="linkNav" class="nav-link" href="">Inventario</a>
                    <a id="linkNav" class="nav-link" href="">Ingresos/Egresos</a>
                    <a id="linkNav" class="nav-link" href="/Mercury/PHP/proveedores.php">Proveedores</a>
                    <a id="linkNav" class="nav-link" href="/Mercury/PHP/regusuarios.php">Registro empleados</a>
                
                </div>
            </div>
            <div id="logout">
                <a href="/Mercury/PHP/indice.html"><img src="/Mercury/IMAGENES/logout.png" id="imglo"/></a>
            </div>
            </div>
        </nav>

    <center>
    <a id="li" href="usulist.php">Lista</a>
    <a id="li" href="regusuarios.php">Altas</a>
    <a id="li" href="elimusuarios.php">Bajas</a>
    <a id="li" href="usueditar.php">Editar</a><br>
    </center>
    <div class="cont1">
        <div class="cont2">
    <section>
    <center><h1>Eliminar Empleados</h1>
        <table class="tpr">
            <tr>
                <th class="num">ID</th><th class="tb">Correo</th><th class="tb">Nombres</th>
                <th class="tb">Apellido paterno</th><th class="tb">Apellido Materno</th><th class="tb">Sexo</th><th class="tb">Tipo Usuario</th>
                <th class="tb">usuario</th><th class="tb">contraseña</th><th class="tb"></th>
            </tr>
            <?php
            $mysqli = new mysqli('localhost','root', '', 'mercury');
			$mysqli->set_charset("utf8");
			$query = $mysqli->query('SELECT * FROM usuarios');
			while($dat = $query ->fetch_object()){
			echo "<tr><td>".$dat->id_usuarios."</td><td>".$dat->correo.
            "</td><td>".$dat->nombre."</td><td>".$dat->ap_paterno.
			"</td><td>".$dat->ap_materno."</td><td>".$dat->sexo."</td><td>".$dat->id_tipoUsuario."</td>
            <td>".$dat->usuario."</td><td>".$dat->contraseña."</td>
            <td><a id='eliminar'href='usudes.php?id=".$dat->id_usuarios."'class='btn'>Eliminar</a></td></tr>";
			}
            ?>
           
        </table>
    </section>
    </div>
    </div>
    <div>
        <footer class=" text-center text-lg-start ">
             <div class="text-center p-3">
              © 2023 Mercury Team
             </div>
        </footer>
    </div>
</body>
</html>