<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir</title>
    <!--Boostrap-->
    <link rel="stylesheet" href="/Mercury/CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Mercury/CSS/RDiseno.css"/>
    <!--link rel="shortcut icon" type="image/png" href="Mercury_Logos/7.png" /-->
</head>
<body>
    <!--Menu de navegador-->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <img src="/Mercury/IMAGENES/6.png" id="logo">

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        
            <a id="linkNav" class="nav-link active" aria-current="page" href="">Caja</a>
            <a id="linkNav" class="nav-link" href="">Registro clientes</a>
            <a id="linkNav" class="nav-link" href="">Inventario</a>
            <a id="linkNav" class="nav-link" href="ing_egr.html">Ingresos/Egresos</a>
            <a id="linkNav" class="nav-link" href="">Proveedores</a>
            <a id="linkNav" class="nav-link" href="">Registro empleados</a>
          
        </div>
      </div>
      <div id="logout">
        <a href="#"><img src="/Mercury/IMAGENES/logout.png" id="imglo"/></a>
      </div>
    </div>
  </nav>

  <section>
    <div class="cont1">
        <div class="cont2">
            <center>
                <h1>Imprimir</h1>
                <table class="cor">
                    <tr>
                        <td class="cor2">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Desde</span>
                                <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>                          
                        </td>
                        <td class="cor2">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Hasta</span>
                                <input type="date" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                            </div>                          
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Folio:</b>                            
                        </td>
                        <td class="cor2">
                            <div id="espacio">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Periodo:</b>                            
                        </td>
                        <td class="cor2">
                            <div id="espacio">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Inversión:</b>                            
                        </td>
                        <td class="cor2">
                            <div id="espacio">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Venta:</b>                            
                        </td>
                        <td class="cor2">
                            <div id="espacio">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Fecha de expedición:</b>                            
                        </td>
                        <td class="cor2">
                            <div id="espacio">
                            </div>
                        </td>
                    </tr>
                    
                </table>
                <br><br>
                <table class="cor3">                    
                    <tr>
                        <td class="cor4">                        
                        </td>
                        <td class="cor4">
                            <button class="btn">Imprimir</button>
                        </td>
                        <td class="cor4">
                        </td>
                    </tr>                    
                </table>
            </center>
        </div>    
      </div>
  </section> 
  


  <!--Pie de pagina-->
  <div>
    <footer class=" text-center text-lg-start fixed-bottom">
        <div class="text-center p-3">
          © 2023 Mercury Team
        </div>
      </footer>
  </div>
</body>
</html>