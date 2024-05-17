<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERCURY</title>
    <!--Boostrap-->
    <link rel="stylesheet" href="/Mercury/CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Mercury/CSS/RDiseno.css"/>
    <title>Conexion bd</title>
</head>
<body class="prov">
<nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
            <img src="/Mercury/IMAGENES/6.png" id="logo">

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                
                    <a id="linkNav" class="nav-link active" aria-current="page" href="">Caja</a>
                    <a id="linkNav" class="nav-link" href="">Registro clientes</a>
                    <a id="linkNav" class="nav-link" href="">Inventario</a>
                    <a id="linkNav" class="nav-link" href="">Ingresos/Egresos</a>
                    <a id="linkNav" class="nav-link" href="/Mercury/PHP/proveedores.php">Proveedores</a>
                    <a id="linkNav" class="nav-link" href="/Mercury/PHP/regusuarios.php">Registro empleados</a>
                </div>
            </div>
            <div id="logout">
                <a href="/Mercury/PHP/indice.html"><img src="/Mercury/IMAGENES/logout.png" id="imglo"/></a>
            </div>
            </div>
        </nav><br></br><br></br><br></br>

   <center> <div class="cont1">
        <div class="cont2">
    <section>
            <h1>Eliminar Empleados</h1><br>
        <table class="tpr">
           <?php
            $id=$_GET['id'];
            echo "<div id='pregunta'>";
            echo "<a for='de'>¿ESTAS SEGURO DE QUERER ELIMINAR AL EMPLEADO CON ID ".$id."?</a>";
            echo "<br>";
            echo "<a id='eliminar' href='elimusuarios.php' class='btn'>NO</a> ";
            echo "   <a id='eliminar'href='usuelsql.php?id=".$id."'class='btn'>SI</a>";
            echo "</div>";
            ?>
        </table></center>
    </section>
    </div>
    </div>
    <div>
        <footer class=" text-center text-lg-start fixed-bottom">
             <div class="text-center p-3">
              © 2023 Mercury Team
             </div>
        </footer>
    </div>
</body>
</html>