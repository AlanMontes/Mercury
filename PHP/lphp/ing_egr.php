<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERCURY</title>
    <!--Boostrap-->
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="estilo1.css" type="text/css">
    <link rel="shortcut icon" type="image/png" href="Mercury_Logos/7.png" />
</head>
<body class="normal">
    <!--Menu de navegador-->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="Mercury_Logos/6.png" id="logo">

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        
        <a id="linkNav" class="nav-link active" aria-current="page" href="caja.php">Caja</a>
            <a id="linkNav" class="nav-link active" aria-current="page" href="corte_caja.php">Corte Caja</a>
            <a id="linkNav" class="nav-link" href="/Mercury/PHP/inventario.php">Inventario</a>
            <a id="linkNav" class="nav-link" href="ing_egr.php">Ingresos/Egresos</a>
            <a id="linkNav" class="nav-link" href="/Mercury/PHP/aphp/proveedores.php">Proveedores</a>
            <a id="linkNav" class="nav-link" href="/Mercury/PHP/aphp/usulist.php">Registro empleados</a>
          
        </div>
      </div>
      <div id="logout">
        <a href="/Mercury/PHP/aphp/indice.html"><img src="Imagen/logout.png" id="imglo"/></a>
      </div>
    </div>
  </nav>

  <section>
    <div class="cont1">
        <div class="cont2">
            <center>
                <h1 class="titulos">Ingresos/Egresos</h1>
                <br>
                <form action="ingesql.php" method="post">
                <table class="cor">
                    <tr>
                        <td class="cor2">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Desde</span>
                                <input type="date" name="inicio" id="inicio" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>                          
                        </td>
                        <td class="cor2">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Hasta</span>
                                <input type="date" name="final" id="final" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>                          
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Folio:</b>                            
                        </td>
                        <td class="cor2">
                            <div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Periodo:</b>                            
                        </td>
                        <td class="cor2">
                            <div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Inversión:</b>                            
                        </td>
                        <td class="cor2">
                            <div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Venta:</b>                            
                        </td>
                        <td class="cor2">
                            <div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Ganancia:</b>                            
                        </td>
                        <td class="cor2">
                            <div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Fecha de expedición:</b>                            
                        </td>
                        <td class="cor2">
                            <div>
                                
                            </div>
                            
                        </td>
                    </tr>
                    
                </table>
                <br><br>
                <table class="cor3">                    
                    <tr>
                        <td class="cor4">
                            <button class="btn" type="submit" name="Enviar">Generar</button>                           
                        </td>
                        <td class="cor4">
                            <button class="btn" type="reset">Nuevo</button>
                        </td>
                    </tr>                    
                </table>
                </form>
            </center>
        </div>    
      </div>
  </section> 
  


  <!--Pie de pagina-->
  <div>
    <footer class=" text-center text-lg-start">
        <div class="text-center p-3">
          © 2023 Mercury Team
        </div>
      </footer>
  </div>
  

</body>
</html>