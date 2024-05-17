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
    <title>Conexion bd</title>
</head>
<body class="prov">
    <!--Header-->
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
                <!--Fin del encabezado-->
    <section>

    <div class="cont1">
        <div class="cont2">
        <center><h1> Agregar Proveedores</h1><br>
        <a href="proveedores.php" class="btn">Lista</a>
        <a href="pvagregar.php" class="btn">Altas</a>
        <a href="pveliminar.php" class="btn">Bajas</a>
        <a href="pveditar.php" class="btn">Editar</a>
        <br></br>
        <form action="agregarphp.php" method="POST">
        <table class="cor">
                    <tr>
                        <td class="cor2">Nombres del proveedor</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="nombres" onkeyup="javascript:this.value=this.value.toUpperCase();" required></td>                 
                    </tr>
                    <tr>
                        <td class="cor2">Apellido paterno</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="apa" onkeyup="javascript:this.value=this.value.toUpperCase();" required></td>
                    </tr>
                    <tr>
                        <td class="cor2">Apellido materno</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="ama" onkeyup="javascript:this.value=this.value.toUpperCase();" required></td>
                    </tr>
                    <tr>
                        <td class="cor2">E-mail</td>
                        <td class="cor2"><input type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="email" required></td>            
                    </tr>
                    <tr>
                        <td class="cor2">Telefono</td>
                        <td class="cor2"><input type="tel" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="telefono" pattern="[0-9]{10}" title="Número de telefono a 10 digitos" required></td>
                    </tr>
                    <tr>
                        <td class="cor2">Empresa</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="empresa" onkeyup="javascript:this.value=this.value.toUpperCase();" required></td>
                    </tr>                        
                </table><br>
                <input type="submit" class="btn"> <a> </a> <input type="reset" class="btn">  
        </form>
        </center> 
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
<!--
            <table >
                <tr><td>Nombres</td><td><input type="text" name="nombres" ></td></tr>
                <tr><td>Apellido Paterno</td><td><input type="text" name="apa" ></td></tr>
                <tr><td>Apellido Materno</td><td><input type="text" name="ama" ></td></tr>
                <tr><td>E-mail</td><td><input type="email" name="email" ></td></tr>
                <tr><td>Telefono</td><td><input type="tel" name="telefono" ></td></tr>
                <tr><td>Empresa</td><td><input type="text" name="empresa" ></td></tr>
                
        </table> -->