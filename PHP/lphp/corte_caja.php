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
<?php
    error_reporting(0);
    $tipo = $_GET['tipo'];
    if($tipo==3){
        echo "<nav class='navbar navbar-expand-lg'>
        <div class='container-fluid'>
            <img src='Mercury_Logos/6.png' id='logo'>

            <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
                <div class='navbar-nav'>
            <a id='linkNav' class='nav-link active' aria-current='page' href='caja.php?tipo=".$tipo."'>Caja</a>
            <a id='linkNav' class='nav-link active' aria-current='page' href='corte_caja.php?tipo=".$tipo."'>Corte Caja</a>
                </div>
            </div>
            <div id='logout'>
                <a href='/Mercury/PHP/aphp/indice.html'><img src='Imagen/logout.png' id='imglo'/></a>
            </div>
        </div>
    </nav>";
    }else{

    
    echo "<nav class='navbar navbar-expand-lg'>
        <div class='container-fluid'>
            <img src='Mercury_Logos/6.png' id='logo'>
            <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
                <div class='navbar-nav'>
            <a id='linkNav' class='nav-link active' aria-current='page' href='caja.php'>Caja</a>
            <a id='linkNav' class='nav-link active' aria-current='page' href='corte_caja.php'>Corte Caja</a>
            <a id='linkNav' class='nav-link' href='/Mercury/PHP/inventario.php'>Inventario</a>
            <a id='linkNav' class='nav-link' href='ing_egr.php'>Ingresos/Egresos</a>
            <a id='linkNav' class='nav-link' href='/Mercury/PHP/aphp/proveedores.php'>Proveedores</a>
            <a id='linkNav' class='nav-link' href='/Mercury/PHP/aphp/usulist.php'>Registro empleados</a>
                </div>
            </div>
            <div id='logout'>
                <a href='/Mercury/PHP/aphp/indice.html'><img src='Imagen/logout.png' id='imglo'/></a>
            </div>
        </div>
    </nav>";
}

    ?>

  <section>
    <div class="cont1">
        <div class="cont2">
            <center>
                <h1 class="titulos">Corte de caja</h1>
                <br>
                <form action="corte_sql.php" method="post">
                    <div class="cont9">
                        <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Número de usuario: </span>
                                <input type="text"  name="usuario" class="form-control" aria-describedby="basic-addon1">
                        </div>
                    </div>                    
                    <table class="cor">
                        <tr>
                            <th>
                                
                            </th>
                        </tr>
                        <tr>
                            <th class="cor1">Billete/Moneda</th>
                            <th class="cor1">Cantidad</th>                    
                        </tr>
                        <tr>
                            <td class="cor2">$500</td>
                            <td class="cor2"><input type="text" class="form-control" name="quinientos" aria-describedby="basic-addon1"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$200</td>
                            <td class="cor2"><input type="text" class="form-control" name="doscientos" aria-describedby="basic-addon1"></td>                 
                        </tr>
                        <tr>
                            <td class="cor2">$100</td>
                            <td class="cor2"><input type="text" class="form-control" name="cien" aria-describedby="basic-addon1"></td>                  
                        </tr>
                        <tr>
                            <td class="cor2">$50</td>
                            <td class="cor2"><input type="text" class="form-control" name="cincuenta" aria-describedby="basic-addon1"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$20</td>
                            <td class="cor2"><input type="text" class="form-control" name="veinte" aria-describedby="basic-addon1"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$10</td>
                            <td class="cor2"><input type="text" class="form-control" name="diez" aria-describedby="basic-addon1"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$5</td>
                            <td class="cor2"><input type="text" class="form-control" name="cinco" aria-describedby="basic-addon1"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$2</td>
                            <td class="cor2"><input type="text" class="form-control" name="dos" aria-describedby="basic-addon1"></td>
                        </tr>
                        <tr>
                            <td class="cor2">$1</td>
                            <td class="cor2"><input type="text" class="form-control" name="uno" aria-describedby="basic-addon1"></td>
                        </tr>   
                        <tr>
                            <td class="cor2">$0.5</td>
                            <td class="cor2"><input type="text" class="form-control" name="cinc_cent" aria-describedby="basic-addon1"></td>
                        </tr>                          
                    </table>
                    <br>
                    <button class="btn" type="Submit">Generar</button>
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