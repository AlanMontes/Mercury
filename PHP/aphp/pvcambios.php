<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERCURY</title>
    <!--Boostrap-->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/RDiseno.css"/>
    <link rel="shortcut icon" type="image/svg" href="/Mercury/PHP/lphp/Mercury_Logos/7.png"/>
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
        <center><h1>Editar Proveedor</h1><br>
        <a class="btn" href="proveedores.php">Lista</a>
        <a class="btn" href="pvagregar.php">Altas</a>
        <a class="btn" href="pveliminar.php">Bajas</a>
        <a class="btn" href="pveditar.php">Editar</a>
        <br></br>
        <form action="editarsql.php" method="POST">
            <table class="cor">
                <?php
                    $id = $_GET['id'];
                    $mysqli = new mysqli('localhost','root', '', 'mercury');
                    $mysqli->set_charset("utf8");
                    $query = $mysqli->query("SELECT * FROM proveedor where id_proveedor='".$id."'");   
                    $dat = $query ->fetch_object();             
                    echo  "<tr><td class='cor2'>ID Proveedor</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='idprov' value='".$dat->id_proveedor."' readonly></td></tr>
                    <tr><td class='cor2'>Nombres</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='nombres' value='".$dat->nombres."' onkeyup='javascript:this.value=this.value.toUpperCase();'></td></tr>
                    <tr><td class='cor2'>Apellido Paterno</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='apa' value='".$dat->ap_paterno."' onkeyup='javascript:this.value=this.value.toUpperCase();'></td></tr>
                    <tr><td class='cor2'>Apellido Materno</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='ama' value='".$dat->ap_materno."' onkeyup='javascript:this.value=this.value.toUpperCase();'></td></tr>
                    <tr><td class='cor2'>E-mail</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='email' value='".$dat->correo."'></td></tr>
                    <tr><td class='cor2'>Teléfono</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='telefono' value='".$dat->telefono."' ></td></tr>
                    <tr><td class='cor2'>Empresa</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='empresa' value='".$dat->nombre_empresa."' onkeyup='javascript:this.value=this.value.toUpperCase();'></td></tr>
                    <tr><td class='cor2'><input type='submit' class='btn'></td><td class='cor2'><input type='reset' class='btn'></td></tr>"
                    
                ?>
            </table>
        </form></center>
        </section>
    </div>
    </div>
        <div>
            <footer class=" text-center text-lg-start">
             <div class="text-center p-3">
              © 2023 Mercury Team
             </div>
            </footer>
        </div>
    </body>
</html>