<!DOCTYPE html>
    <HTML lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Inicio de sesion</title>
            <link rel="shortcut icon" type="image/svg" href="/Mercury/PHP/lphp/Mercury_Logos/7.png"/>
            <link rel="stylesheet" type="text/css" href="CSS/Diseno.css"/>
        </head>
        <BODY class="indice">
            <section>
                <div class="cont1i">
                    <div class="cont2i">
                        <center><TABLE border="0" align="center" width="60%" class="tablai">
                        <tr>
                            <td rowspan="0" class="logo">
                                <img src="IMAGENES/3.png"  class="iima"> 
                            </td>
                            <td  colspan="0" class="inicios">
                                <div class="contenedor2">
                                    <div class="formulario conth2">
                                        <h1>Inicio de sesión</h1>
                                        <form method="post">
                                            <div class="usuario">
                                                <input type="text" name ="user" required><br>
                                                <label>Nombre de usuario</label>
                                            </div>
                                            <div class="usuario">
                                                <input type="password" name="pass" required><br>
                                                <label>Contraseña</label>
                                            </div>
                                            <?php
                                                if (isset($_POST['login'])) {
                                                    $user = $_POST['user'];
                                                    $pass = $_POST['pass'];
                                                    $mysqli = mysqli_connect('localhost','root', '', 'mercury');
                                                    $mysqli->set_charset("utf8");
                                                    $query = "SELECT * FROM usuarios WHERE usuario = '".$user."' AND contraseña = '".$pass."'";
                                                    $res = mysqli_query($mysqli, $query);
                                                    $cont = mysqli_num_rows($res);

                                                    if ($cont == 1) {
                                                        $row = mysqli_fetch_assoc($res);
                                                        $id_tipoUsuario = $row['id_tipoUsuario'];
                                                        $id_usuarios = $row['id_usuarios'];

                                                      
                                                            header("Location: tablainicio.php?user=".$user."&id=".$id_usuarios."&tipo=".$id_tipoUsuario);
                                                                
                                                    
                                                    } else {
                                                        echo "<center><div>Usuario y/o contraseña incorrectos</div></center><br>";
                                                    }
                                                    mysqli_close($mysqli);
                                                }
                                                ?>
                                            <input type="submit" value="Iniciar" class="iniciar" name=login href="tablainicio.php"><br></br>
                                            <center><a class="ntc"href="registroi.php">No tengo una cuenta</a></center>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </TABLE></center>
                    </div>
                </div>
             <section>
        </BODY>
    </HTML>
