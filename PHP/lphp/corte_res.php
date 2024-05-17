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
        
        <a id='linkNav' class='nav-link active' aria-current='page' href='caja.php'>Caja</a>
            <a id='linkNav' class='nav-link active' aria-current='page' href='corte_caja.php'>Corte Caja</a>
            <a id='linkNav' class='nav-link' href='/Mercury/PHP/inventario.php'>Inventario</a>
            <a id='linkNav' class='nav-link' href='ing_egr.php'>Ingresos/Egresos</a>
            <a id='linkNav' class='nav-link' href='/Mercury/PHP/aphp/proveedores.php'>Proveedores</a>
            <a id='linkNav' class='nav-link' href='/Mercury/PHP/aphp/usulist.php'>Registro empleados</a>
          
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
                <h1 class="titulos">Corte de caja</h1>
                <br>
                    <table class="cor">
                        <tr>
                            <td class="cor2"><b>Nombre de usuario:</b></td>
                            <td class="cor2" id="nombre_apellido"></td>
                        </tr>
                        <tr>
                            <td class="cor2"><b>Fecha de expedición:</b></td>
                            <td class="cor2" id="fecha"></td>
                        </tr>
                    </table>
                    <br>               
                    <table class="cor">
                        <tr>
                            <th class="cor1">Billete/Moneda</th>
                            <th class="cor1" id="">Cantidad</th>                    
                        </tr>
                        <tr>
                            <td class="cor2">$500</td>
                            <td class="cor2" id="quinientos">   </td>
                        </tr>
                        <tr>
                            <td class="cor2">$200</td>
                            <td class="cor2" id="doscientos"></td>                 
                        </tr>
                        <tr>
                            <td class="cor2">$100</td>
                            <td class="cor2" id="cien"></td>                  
                        </tr>
                        <tr>
                            <td class="cor2">$50</td>
                            <td class="cor2" id="cincuenta"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$20</td>
                            <td class="cor2" id="veinte"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$10</td>
                            <td class="cor2" id="diez"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$5</td>
                            <td class="cor2" id="cinco"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$2</td>
                            <td class="cor2" id="dos"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$1</td>
                            <td class="cor2" id="uno"></td>
                        </tr>   
                        <tr>
                            <td class="cor2">$0.5</td>
                            <td class="cor2" id="cinc_cent"></td>
                        </tr>                      
                    </table>
                    <br>
                    <table class="cor">
                    <tr>
                            <td class="cor2"><b>Total:</b></td>
                            <td class="cor2" id="total"></td>
                        </tr>
                        <tr>
                            <td class="cor2"><b>Venta:</b></td>
                            <td class="cor2" id="venta"></td>
                        </tr>
                        <tr>
                            <td class="cor2"><b>Diferencia:</b></td>
                            <td class="cor2" id="dif"></td>
                        </tr>                         
                    </table>
                    <br>
                    <form action="corte_pdf.php">
                        <button class="btn" type="Submit">Imprimir</button>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      // Obtener los datos del último registro al cargar la página
      obtenerUltimoRegistro();

      function obtenerUltimoRegistro() {
        $.ajax({
          url: 'corte_ur.php',
          method: 'GET',
          dataType: 'json',
          success: function(data) {
            // Actualizar los elementos HTML con los datos del último registro
            $('#dif').text(data.balance);
            $('#venta').text(data.monto_venta);
            $('#fecha').text(data.fecha_corte);
            $('#quinientos').text(data.quinientos);
            $('#doscientos').text(data.doscientos);
            $('#cien').text(data.cien);
            $('#cincuenta').text(data.cincuenta);
            $('#veinte').text(data.veinte);
            $('#diez').text(data.diez);
            $('#cinco').text(data.cinco);
            $('#dos').text(data.dos);
            $('#uno').text(data.uno);
            $('#cinc_cent').text(data.cinc_cent);
            $('#total').text(data.total);
            $('#nombre_apellido').text(data.nombre_apellido);
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