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
                <table class="cor">
                    <tr>
                        <td class="cor2">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Desde</span>
                                <input type="date" name="inicio" id="inicio" class="form-control" aria-label="Username" aria-describedby="basic-addon1" disabled>
                            </div>                          
                        </td>
                        <td class="cor2">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Hasta</span>
                                <input type="date" name="final" id="final" class="form-control" aria-label="Username" aria-describedby="basic-addon1" disabled>
                            </div>                          
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Folio:</b>                            
                        </td>
                        <td class="cor2">
                            <p id="id_ingEgr">
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Periodo:</b>                            
                        </td>
                        <td class="cor2">
                            <p id="periodo">
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Inversión:</b>                            
                        </td>
                        <td class="cor2">
                            <p id="inversion">
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Venta:</b>                            
                        </td>
                        <td class="cor2">
                            <p id="venta">
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Ganancia:</b>                            
                        </td>
                        <td class="cor2">
                            <p id="ganancia">
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="cor2">
                            <b>Fecha de expedición:</b>                            
                        </td>
                        <td class="cor2">
                            <p id="fecha_exp">                                
                            </p>
                            
                        </td>
                    </tr>
                    
                </table>
                <br><br>
                <table class="cor3">                    
                    <tr>
                        <td class="cor4">
                                <form action="obtenerpdf.php" method="post">
                                    <button class="btn">Imprimir</button> 
                                </form>                                                         
                        </td>
                        <td class="cor4">
                            <a class="btn btn-primary btnl" href="ing_egr.php" role="button">Nuevo</a>

                        </td>
                    </tr>                    
                </table>
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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Obtener los datos del último registro al cargar la página
      obtenerUltimoRegistro();

      function obtenerUltimoRegistro() {
        $.ajax({
          url: 'ultimo_registro.php',
          method: 'GET',
          dataType: 'json',
          success: function(data) {
            // Actualizar los elementos HTML con los datos del último registro
            $('#id_ingEgr').text(data.id_ingEgr);
            $('#periodo').text(data.periodo);
            $('#inversion').text(data.inversion);
            $('#venta').text(data.venta);
            $('#ganancia').text(data.ganancia);
            $('#fecha_exp').text(data.fecha_exp);
          },
          error: function(xhr, status, error) {
            console.log('Error al obtener el último registro: ' + error);
          } 
        });
      }
        });
  </script>
</body>
</html>
