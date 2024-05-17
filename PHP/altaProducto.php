<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta Producto</title>
    <link rel="shortcut icon" type="image/svg" href="/Mercury/Mercury_Logos/7.png" />
    <link rel="stylesheet" type="text/css" href="/Mercury/CSS/inventario.css" />
    <script src="/Mercury/JS/inventario.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="/Mercury/bootstrap.min.css">
    <link rel="stylesheet" href="/Mercury/estilo1.css" type="text/css">
</head>
<body onload="cargar();">

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
        <div id="f1">DAR DE ALTA</div>
        <br>
        <div>
            <form action="">
                <input type="radio" name="tipoAlta" id="" value="1" onchange="talta(this.value);"> Producto Nuevo
                <input type="radio" name="tipoAlta" id="" value="2" onchange="talta(this.value);"> Producto Existente
            </form>
        </div>   
    </div>    
    </section>

    <section id="parte1">
        <div id="s2">
            <div id="f1">PRODUCTO EXISTENTE</div>
            <br>
            <p>¿Cómo desea realizar la busqueda?</p>
            <form action="">
                <input type="radio" name="tipoBus" id="" value="1" onchange="tbus(this.value);"> Por ID
                <input type="radio" name="tipoBus" id="" value="2" onchange="tbus(this.value);"> Por NOMBRE
            </form>
            <div id="form">

                <form id="altaproducto2">
                    <table>
                <tr><td><div id="lbi"> Ingresar Id del producto</div></td><td><input type="number" name="idp" id="idp" class="f"></td>
                    <td><center></center></td>
                    <td><div id="lbn">Ingresar Nombre del producto</div></td><td><input type="text" name="nombrep" id="nombrep" class="f"></td>
                </tr>  
                <tr><td>Ingresar Cantidad adquiridos </td><td><input type="number" name="cantidadp" id="cantidadp" class="f"></td>
                    <td></td>
                    <td>Ingresar fecha de caducidad </td><td><input type="date" name="fc" id="fc" class="f"></td>
                </tr> 
            </table>
                <div id="btnid"><button id="btnEnviar2" type="button">DAR ALTAS POR ID</button></div>
                <div id="btnn"><button id="btnEnviar3" type="button">DAR ALTAS POR NOMBRE</button></div>
                       <br><center>
                       <div id="respuesta2">
                            
                       </div></center>
                       <br>
                </form>
                <script src="/Mercury/JS/altaesql.js"></script>
            </div>
        </div>
    </section>

    <section id="parte2">
        <div id="s2">
            <div id="f1">PRODUCTO NUEVO</div>
            <br>
            <div id="form">
                <form id="altaproducto">
                        <table>
                   <tr><td>Ingresar codigo de barras del producto</td><td><input type="number" name="id" id="id" class="f"></td></tr> 
                   <tr><td>Ingresar Nombre del producto </td><td><input type="text" name="nom_pro" id="nom_pro" class="f"></td> </tr> 
                   <tr><td>Ingresar Descripción del producto </td><td> <input type="text" name="des" id="des" class="f"></td> </tr> 
                   <tr><td>Ingresar precio público </td><td> <input type="number" name="precio_pu" id="precio_pu" class="f"></td> 
                   <td>Ingresar precio proveedor</td> <td> <input type="number" name="precio_prov" id="precio_prov" class="f"></td> </tr> 
                    <tr><td>Ingresar cantidad en stock </td><td> <input type="number" name="cantidad" id="cantidad" class="f"></td> 
                    <td>Seleccionar proveedor </td>
                            <td><center><select name="prov" id="prov" class="f">
                              <option value="1" class="f">Value 1</option>  
                              <option value="2" class="f">Value 2</option>  
                            </select></center></td>
                    </tr> 
                    <tr><td></td><td></td><td></td><td><center><a href="aphp/proveedores.php" id="refp">Añadir proveedor</a></center></td></tr>
                    <tr><td>¿Caduca?</td></tr>
                    <tr><td><input type="checkbox" name="" id="" onChange="cadu(this);" class="f"></td></tr> 
                    <tr id="fcadu"><td>Fecha de Caducidad </td><td> <input type="date" name="f_cadu" id="f_cadu" class="f"></td></tr>
                       </table>
                    <div>
                            <label>Escoge el departamento del producto:</label>
                    
                    </div>
                    <br>
                    <div>                                  
                            <input type="radio" name="dep" id="departamento" value="PREPARADOS" onchange="cambiar2('PREPARADOS');" checked>Alimentos Preparados
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('ABARROTES');">Abarrotes
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('BEBIDAS');">Bebidas
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('DULCES');">Dulces
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('FYV');">Frutas y verduras
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('REFRIGERADOS');">Refrigerados
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('CONGELADOS');">Congelados
                    </div>
                    <div>                         
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('CARNE');">Carnes
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('PESCADO');">Pescaderia
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('MASCOTAS');">Mascotas
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('BEBES');">Bebes
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('HOGAR');">Cuidado del Hogar
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('HIGIENE');">Higiene personal
                            <input type="radio" name="dep" id="d2" value="" onchange="cambiar2('OTROS');">Otros
                    </div>
                    <br>
                    <center>
                    <div>        
                            <input type="text" name="tipo" id="tipo" class="f" readonly value="PREPARADOS">
                    </div>  
                    </center>
                    <br>
                    <tr><td><button id="btnEnviar" type="button">REGISTRAR</button></td></tr> 


                       <br><center>
                       <div id="respuesta">
                            
                       </div></center>
                       <br>
                </form>
                <script src="/Mercury/JS/altansql.js"></script>
            </div>
        </div>
    </section>
    </center>
    <script>      
    document.getElementById("parte1").style.display = "none";
    document.getElementById("parte2").style.display = "none";
    document.getElementById("fcadu").style.display = "none";
    document.getElementById("nombrep").style.display = "none";
    document.getElementById("idp").style.display = "none";
    document.getElementById("lbi").style.display = "none";
    document.getElementById("lbn").style.display = "none";
    document.getElementById("btnn").style.display = "none";
    document.getElementById("btnid").style.display = "none";
    </script>
    
</body>
</html>