<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas Inventario</title>
    <link rel="shortcut icon" type="image/svg" href="/Mercury/Mercury_Logos/7.png" />
    <link rel="stylesheet" type="text/css" href="/Mercury/CSS/inventario.css" />
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
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
            <div id="f1">Perido de: </div>
            <div id="form">
            <form action="">
                <table>
                <tr><td>Del: </td><td><input type="date" name="fi" id="fi" class="f"></td><td>al</td><td><input type="date" name="ff" id="ff" class="f"></td>
                </tr>
                <tr><td></td><td></td><td><button id="btnEnviar" type="button" onClick="funIniciarFecha();">GENERAR</button></td><td></td><td></td></tr>   
                </table>
            </form>
            </div>
        </div>        
    </section>

    <section id="estadistis">
      <div id="s2">
            <div id="f1">Estadisticas</div>
            <div id="txtHint1">...

            </div>
            <br>
            <div id="txtHint2">...

            </div>
            <br>
            <div id="txtHint3">...

            </div>
            <br>
            <div id="txtHint4">...

            </div>
            <br>
            <div id="txtHint5">...

            </div>
            <br>
            <div id="txtHint6">...

            </div>
      <br>
      <script src="/Mercury/JS/estadisticas.js"></script>

        <br>
        
        <div id="form">
                <table>
                    <tr><td><button id="btt" type="button" onClick="expedir();">Expedir nota de productos a pedir</button></td></tr> 
                </table>
        </div>   
    </div>
    </section>

    <section id="nota">
        <div id="s2">
            <div id="f1">EXPEDIR NOTA DE PRODUCTOS TERMINADOS</div>
            <br>
            <div id="txtHint7">...

            </div>
            <button class="b" onClick='pdf()'>Imprimir</button> 
        </div>
    </section>

    <div id="txtHint9">...

    </div>

    <section id="nota2">
        <div id="sol"></div>
        <div id="s2">
            <div id="f1">NOTA DE PRODUCTOS TERMINADOS</div>
            <br>
            <div id="form">
            <div id="txtHint8">...

            </div>
            </div>
    </div>
    </section>
                           
    
    </center>
 


    <script>
                document.getElementById("btt").style.display = "none";
                document.getElementById("nota").style.display = "none";
                document.getElementById("nota2").style.display = "none";
                document.getElementById("estadistis").style.display = "none";
    </script>
</body>
</html>