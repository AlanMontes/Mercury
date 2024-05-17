<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja Producto</title>
    <link rel="shortcut icon" type="image/svg" href="/Mercury/Mercury_Logos/7.png" />
    <link rel="stylesheet" type="text/css" href="/Mercury/CSS/inventario.css" />
    <script src="/Mercury/JS/inventario.js"></script>
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
<br>
<center>
<section>
        <nav id="menu2">
                <div class="pestañas3" id="p1"><a href="consultarProducto.php" id="r">Consultar Inventario</a></div>
                <div class="pestañas3" ><a href="altaProducto.php" id="r">Alta Inventario</a></div>
                <div class="pestañas3" ><a href="bajaProducto.php" id="r">Baja Inventario</a></div>
                <div class="pestañas3" id="p3-12"><a href="estadisticas.php" id="r">Estadisticas</a></div>
        </nav>
</section>



    <section>
        <div id="s2">
            <div id="f1">DAR DE BAJA</div>
            <br>
            <div>
                <form action="">
                    <input type="radio" name="tipoBaja" id="" value="1" onchange="tbaja(this.value);"> Cantidad de producto
                    <input type="radio" name="tipoBaja" id="" value="2" onchange="tbaja(this.value);"> Baja definitiva
                </form>
        </div>
    </section>

    <section id="cp">
        <div id="s2">
            <div id="f1">BAJA POR CANTIDAD</div>
            <p>¿Cómo desea realizar la baja?</p>
            <form action="">
                <input type="radio" name="tipoBus" id="" value="1" onchange="tbus(this.value);"> Por ID
                <input type="radio" name="tipoBus" id="" value="2" onchange="tbus(this.value);"> Por NOMBRE
            </form>
            <div id="form">
                <form id="bajaproducto">
                        <table>
                    <tr><td><div id="lbi"> Ingresar Id del producto</div></td><td><input type="number" name="idp" id="idp" class="f"></td>
                        <td><center></center></td>
                        <td><div id="lbn">Ingresar Nombre del producto</div></td><td><input type="text" name="nombrep" id="nombrep" class="f"></td>
                    </tr>  
                    <tr><td></td><td> Motivo:</td></tr> 
                    <tr><td></td><td><input type="radio" name="motivo" id="m1" value="0" onchange="cambiar(0);" >Merma</td><td><input type="radio" name="motivo" id="m" value="1" onchange="cambiar(1);" >caduco</td><td></td></tr> 
                    <tr><td></td><td>Ingresar Cantidad a dar de baja</td><td><input type="number" name="" id="cant" class="f"></td><td></td></tr> 
                    </table>
                    <div id="btnid"><button id="btnEnviar1" type="button">DAR BAJA POR ID</button></div>
                    <div id="btnn"><button id="btnEnviar2" type="button">DAR BAJA POR NOMBRE</button></div>   
                    <br><center>
                       <div id="respuesta4">
                            
                       </div></center>
                    <br>
                </form>
                <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                <script src="/Mercury/JS/bajacansql.js"></script>
            </div>
        </div>
    </section>

    <section id="bd">
        <div id="s2">
            <div id="f1">BAJA DEFINITIVA</div>
            <p>¿Cómo desea realizar la baja?</p>
            <form action="">
                <input type="radio" name="tipoBus" id="" value="1" onchange="tbus2(this.value);"> Por ID
                <input type="radio" name="tipoBus" id="" value="2" onchange="tbus2(this.value);"> Por NOMBRE
            </form>
            <div id="form">
                <form id="bajaproducto">
                    <table>
                    <tr><td><div id="lbi2"> Ingresar Id del producto</div></td><td><input type="number" name="idp2" id="idp2" class="f"></td>
                        <td><center></center></td>
                        <td><div id="lbn2">Ingresar Nombre del producto</div></td><td><input type="text" name="nombrep2" id="nombrep2" class="f"></td>
                    </tr>  
                    </table>
                    <div id="btnid2"><button id="btnEnviar3" type="button">DAR BAJA POR ID</button></div>
                    <div id="btnn2"><button id="btnEnviar4" type="button">DAR BAJA POR NOMBRE</button></div>   
                    <br><center>
                       <div id="respuesta3">
                            
                       </div></center>
                    <br>
                </form>
                <script src="/Mercury/JS/bajadsql.js"></script>
            </div>
        </div>
    </section>
    </center>
    <script>      
    document.getElementById("cp").style.display = "none";
    document.getElementById("bd").style.display = "none";
    document.getElementById("nombrep").style.display = "none";
    document.getElementById("idp").style.display = "none";
    document.getElementById("nombrep2").style.display = "none";
    document.getElementById("idp2").style.display = "none";
    document.getElementById("lbi").style.display = "none";
    document.getElementById("lbn").style.display = "none";
    document.getElementById("lbi2").style.display = "none";
    document.getElementById("lbn2").style.display = "none";
    document.getElementById("btnn").style.display = "none";
    document.getElementById("btnid").style.display = "none";
    document.getElementById("btnn2").style.display = "none";
    document.getElementById("btnid2").style.display = "none";
    </script>

</body>
</html>