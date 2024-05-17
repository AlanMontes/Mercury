<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Inventario</title>
    <link rel="shortcut icon" type="image/svg" href="/Mercury/Mercury_Logos/7.png" />
    <link rel="stylesheet" type="text/css" href="/Mercury/CSS/inventario.css" />
    <script src="/Mercury/JS/inventario.js"></script>
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

<center>
<br>
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
        <div id="f1">LISTA DE PRODUCTOS EN INVENTARIO</div>
        <center>
            <div>
            <label for="tipo">¿Qué tipo de consulta desea realizar?</label>
            <br>
            <select name="tipo" id="tipo" class="f" onchange="showCustomer(this.value);">
            <option value="" class="f">Selecciona...</option>
            <option value="GENERAL" class="f">Consulta General de todos los productos</option>
            <option value="PREPARADOS" class="f">Consulta de Alimentos Preparados</option>
            <option value="ABARROTES" class="f">Consulta de Abarrotes</option>
            <option value="DULCES" class="f">Consulta de Dulces</option>
            <option value="FYV" class="f">Consulta de Frutas y Verduras</option>
            <option value="REFRIGERADOS" class="f">Consulta de Refrigerados</option>
            <option value="CONGELADOS" class="f">Consulta de Congelados</option>
            <option value="CARNE" class="f">Consulta de Carnes</option>
            <option value="PESCADO" class="f">Consulta de pescaderia</option>
            <option value="MASCOTAS" class="f">Consulta de Mascotas</option>
            <option value="BEBES" class="f">Consulta de Bebes</option>
            <option value="HOGAR" class="f">Consulta de cuidado del hogar</option>
            <option value="HIGIENE" class="f">Consulta de Higiene personal</option>
            <option value="OTROS" class="f">Consulta de Otros</option>
            </select>
            </div>
            <script src="/Mercury/JS/consultas.js"></script>
        </center>
    </div>
    </section>

    <section>
    <div id="s2">   
        <div id="form">
            <div id="txtHint">...</div>             
        </div>
    </div>
    </section>

    <section>
    <div id="s2">
        <div id="f1">BUSCAR PRODUCTO</div>
        <p>¿Cómo deseas realizar la busqueda?</p>
            <form action="">
                <input type="radio" name="tipoBus" id="" value="1" onchange="tbus(this.value);"> Por ID
                <input type="radio" name="tipoBus" id="" value="2" onchange="tbus(this.value);"> Por NOMBRE
            </form>
        <br>
        <div id="form">
                <form id="bajaproducto">
                        <table>
                    <tr><td><div id="lbi">Ingresar Id del producto</div></td><td><input type="number" name="idp" id="idp" class="f"></td>
                        <td><center></center></td>
                        <td><div id="lbn">Ingresar Nombre del producto</div></td><td><input type="text" name="nombrep" id="nombrep" class="f"></td>
                    </tr>  
                        </table>
                    <div id="btnid"><button id="btnEnviar1" type="button" onClick="funid();">BUSCAR POR ID</button></div>
                    <div id="btnn"><button id="btnEnviar2" type="button" onClick="funnom();" >BUSCAR POR NOMBRE</button></div>   
                </form>
        </div>
        <div id="form">
            <div id="txtHint2">...</div>             
        </div>
    </div>
    </section>

    <section id="infopro">
    <div id="s2">    
        <div id="s2">
            <div id="f1">INFORMACIÓN DEL PRODUCTO</div>
        </div>
            <div id="txtHint3">...  
                <!-- <div id="form">
                    <form action="">
                    <center><div id="f1">PAPITAS</div></center>
                    <table>
                    <tr><td>Código de barras del producto</td><td><input type="number" name="" id="f" class="f" readonly></td></tr> 
                    <tr><td>Nombre del producto </td><td><input type="text" name="" id="f" class="f"></td> </tr> 
                    <tr><td>Descripción del producto </td><td> <input type="text" name="" id="f" class="f"></td> </tr> 
                    <tr><td>Precio público</td><td> <input type="number" name="" id="f" class="f"></td> 
                    <td>Precio proveedor</td><td> <input type="number" name="" id="f" class="f"></td> </tr> 
                    <tr><td>Cantidad en stock</td><td> <input type="number" name="" id="f" class="f" readonly></td> 
                    <td>Proveedor </td><td><input type="number" name="" id="f" class="f"></td> </tr>  
                    <tr><td>Fecha de alta</td><td><input type="date" name="" id="f" class="f" readonly></td></tr> 
                    <tr><td></td></tr> 
                    </table>
                    </form>
                </div> -->
            </div>  
            
            

                    
            
            
                <br><center>
                <div id='respuesta'> 
                </div></center>
                <br>
    </div>


    </section>
    </center>
    <script>      
    document.getElementById("nombrep").style.display = "none";
    document.getElementById("idp").style.display = "none";
    document.getElementById("lbi").style.display = "none";
    document.getElementById("lbn").style.display = "none";
    document.getElementById("btnn").style.display = "none";
    document.getElementById("btnid").style.display = "none";
    document.getElementById("infopro").style.display = "none";
    </script>
</body>
</html>