<!DOCTYPE html>
<HTML lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Regístrate</title>
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/Diseno.css"/>
    </head>
    <BODY class="reg">
    <section>
    <div class="cont1">
        <div class="cont2">
            <center>
                <h1>Registro</h1>
                <br>
                <form  method="POST">
                <table class="cor">
                    <tr>
                        <td class="cor2">Ingresa tu correo electrónico</td>
                        <td class="cor2"><input type="email" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="correoe" required></td>            
                    </tr>
                    <tr>
                        <td class="cor2">Ingresa tu nombre</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="nombre" required></td>                 
                    </tr>
                    <tr>
                        <td class="cor2">Ingresa tu apellido paterno</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="apa" required></td>
                    </tr>
                    <tr>
                        <td class="cor2">Ingresa tu apellido materno</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="ama" required></td>
                    </tr>
                    <tr>
                        <td class="cor2">Sexo (H/M)</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="sexo" 
                        requieres pattern="[MmHh]" title="Sólo M o H (Mujer u Hombre)" required></td>
                    </tr>
                    <tr>
                        <td class="cor2">Tipo de usuario</td>
                        <td class="cor2"><input type="number" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="usu" value="1" readonly></td>
                    </tr>
                    <tr>
                        <td class="cor2">Ingresa el usuario</td>
                        <td class="cor2"><input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="usuario" required></td>
                    </tr>
                    <tr>
                        <td class="cor2">Ingresa la contraseña</td>
                        <td class="cor2"><input type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="contrasena" alt="strongPass" required></td>
                    </tr>
                    <tr>
                        <td class="cor2">Repite la contraseña</td>
                        <td class="cor2"><input type="password" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="recontra" required></td>
                    </tr>                          
                </table>
                
                <br>
                <p>Estoy de acuerdo con los terminos y condiciones</p>
                <input class="btn" type="submit" value="Registrar" name="sign">
                 <p><a href="isesion.php"> Ya tengo cuenta</a></p>
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
                        $mysqli = mysqli_connect('localhost','root','', 'mercury');
                        $mysqli->set_charset("utf8");
                        $query = "INSERT INTO usuarios (id_usuarios, correo, nombre, ap_paterno, ap_materno, sexo, id_tipoUsuario, usuario, contraseña)
                         VALUES (null,'".$correoe."','".$nombre."','".$apa."','".$ama."','".$sexo."','1','".$usuario."','".$contrasena."');";
                    if (mysqli_query($mysqli, $query)) {
                        echo "Agregado correctamente";
                        header("location: isesion.php");
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
    <footer class=" text-center text-lg-start">
        <div class="text-center p-3">
          © 2023 Mercury Team
        </div>
      </footer>
  </div>
    </BODY>
   </HTML>
