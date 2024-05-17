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
        <center><h1>Editar Empleados</h1>
        <a class="btn" href="usulist.php">Lista</a>
        <a class="btn" href="regusuarios.php">Altas</a>
        <a class="btn" href="usuedit.php">Editar</a><br></br>
        <form action="usuedisql.php" method="POST">
            <table class="cor">
                <?php
                    $id = $_GET['id'];
                    $mysqli = new mysqli('localhost','root', '', 'mercury');
                    $mysqli->set_charset("utf8");
                    $query = $mysqli->query("SELECT * FROM usuarios where id_usuarios='".$id."'");   
                    $dat = $query ->fetch_object();             
                    echo  "<tr><td class='cor2'>ID Usuario</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='idusu' value='".$dat->id_usuarios."' readonly></td></tr>
                    <tr><td class='cor2'>Correo</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='correo' value='".$dat->correo."'></td></tr>
                    <tr><td class='cor2'>Nombres</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='nombre' value='".$dat->nombre."' onkeyup='javascript:this.value=this.value.toUpperCase();'></td></tr>
                    <tr><td class='cor2'>Apellido Paterno</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='apa' value='".$dat->ap_paterno."' onkeyup='javascript:this.value=this.value.toUpperCase();'></td></tr>
                    <tr><td class='cor2'>Apellido Materno</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='ama' value='".$dat->ap_materno."' onkeyup='javascript:this.value=this.value.toUpperCase();'></td></tr>
                    <tr><td class='cor2'>Sexo (H/M)</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='sexo' value='".$dat->sexo."'  requieres pattern='[MmHh]' onkeyup='javascript:this.value=this.value.toUpperCase();'></td></tr>
                    <tr><td class='cor2'>Tipo de usuario</td>
                    <td class='cor2'><input type='radio' name='usu' id='usu' value='2' checked><a>Administrador</a><br>
                                         <input type='radio' name='usu' id='usu' value='3'><a>Cajero</a></td>
                    
                    </tr>
                    <tr><td class='cor2'>Usuario</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='usuario' value='".$dat->usuario."'></td></tr>
                    <tr><td class='cor2'>Contraseña</td><td><input class='form-control' aria-label='Username' aria-describedby='basic-addon1' type='text' name='contrasena' value='".$dat->contraseña."'></td></tr>
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