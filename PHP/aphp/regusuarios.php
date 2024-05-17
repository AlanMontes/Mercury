<!DOCTYPE html>
<HTML lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro Empleados</title>
        <link rel="shortcut icon" type="image/svg" href="/Mercury/PHP/lphp/Mercury_Logos/7.png"/>
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/RDiseno.css"/>
    </head>
    <BODY class="reg">
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
    <section>
    <div class="cont1">
        <div class="cont2">
            <center>
                <h1>Registro Empleados</h1>
                    <a class="btn" href="usulist.php">Lista</a>
                    <a class="btn" href="regusuarios.php">Altas</a>
                    <a class="btn" href="usuedit.php">Editar</a><br></br>
                <br>
                <form method="POST">
                <table class="cor">
                    <tr>
                        <td class="cor2">Ingresa el correo electrónico</td>
                        <td class="cor2"><input type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="correoe" required onkeyup="javascript:this.value=this.value.toUpperCase();"></td>            
                    </tr>
                    <tr>
                        <td class="cor2">Ingresa el nombre</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="nombre" required onkeyup="javascript:this.value=this.value.toUpperCase();"></td>                 
                    </tr>
                    <tr>
                        <td class="cor2">Ingresa el apellido paterno</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="apa" required onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
                    </tr>
                    <tr>
                        <td class="cor2">Ingresa el apellido materno</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="ama" required onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
                    </tr>
                    <tr>
                        <td class="cor2">Sexo (H/M)</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="sexo" 
                        requieres pattern="[MmHh]" title="Sólo M o H (Mujer u Hombre)" required onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
                    </tr>
                    <tr>
                        <td class="cor2">Tipo de usuario</td>
                        <td class="cor2"><input type="radio" name="usu" id="usu" value="2"><a>Administrador</a><br>
                                         <input type="radio" name="usu" id="usu" value="3"><a>Cajero</a></td>
                    </tr>
                    <tr>
                        <td class="cor2">Ingresa el usuario</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="usuario" required></td>
                    </tr>
                    <tr>
                        <td class="cor2">Ingresa la contraseña</td>
                        <td class="cor2"><input type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="contrasena" required ></td>
                    </tr> 
                    <tr>
                        <td class="cor2">Repite la contraseña</td>
                        <td class="cor2"><input type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="recontra" required ></td>
                    </tr>                          
                </table>                       
                <br>
                <input class="btn" type="submit" value="Registrar" name="sign"><br>
                <?php
                if(isset($_POST['sign'])){
                    $correoe=$_POST['correoe'];
                    $nombre=$_POST['nombre'];
                    $apa=$_POST['apa'];
                    $ama=$_POST['ama'];
                    $sexo=$_POST['sexo'];
                    $usu=$_POST['usu'];
                    $usuario=$_POST['usuario'];
                    $contrasena=$_POST['contrasena'];
                    $recontra=$_POST['recontra'];
                    if($contrasena==$recontra){
                        $mysqli = mysqli_connect('localhost','root', '', 'mercury');
                        $mysqli->set_charset("utf8");
                        $query = "INSERT INTO usuarios (id_usuarios, correo, nombre, ap_paterno, ap_materno, sexo, id_tipoUsuario, usuario, contraseña)
                         VALUES (NULL,'".$correoe."','".$nombre."','".$apa."','".$ama."','".$sexo."','".$usu."','".$usuario."','".$contrasena."')";
                    if (mysqli_query($mysqli, $query)) {
                        echo "Agregado correctamente";
                        //header("location: proveedores.php");
                        } else {
                        echo "Error: " . mysqli_error($mysqli);
                }
                mysqli_close($mysqli);
                    }
                }
                ?>
                </form>
            </center>
        </div>    
      </div>
  </section> 
  <div>
    <footer class=" text-center text-lg-start ">
        <div class="text-center p-3">
          © 2023 Mercury Team
        </div>
      </footer>
  </div>
    </BODY>
   </HTML>
