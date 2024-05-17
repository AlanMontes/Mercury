<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de clientes</title>
    <link rel="shortcut icon" type="image/svg" href="/Mercury/IMAGENES/icono6.svg" />
    <link rel="stylesheet" type="text/css" href="/Mercury/CSS/inventario.css" />
    
</head>
<body>
<div id="cabecera">
    <section>
        <center>
        <header>
        <div id="s1">
            <div id="f1">
                     MI PUNTO DE VENTA
            </div> 
            <div>
                <nav id="menu">
                    <div id="pestañas"> <a href="">Caja</a></div>
                    <div id="pestañas"> <a href="clientes.php">Registro clientes</a></div>
                    <div id="pestañas"> <a href="inventario.php">Inventario</a></div>
                    <div id="pestañas"> <a href="">Ingresos/Egresos</a></div>
                    <div id="pestañas"> <a href="">Proveedores</a></div>
                    <div id="pestañas"> <a href="">Registro Empleados</a></div>
                </nav>
            </div>
        </div>
        </header>
        </center>
    </section>

    <section>
        <nav id="menu2">
            
               <div class="pestañas2" id="p1">MENU</div>
                <div class="pestañas2" >Registro Clientes</div>
                <div class="pestañas2" id="p3">Lista de clientes</div>
            
        </nav>
    </section>

    <section>
        <nav id="menu2">
                <div class="pestañas3" id="p12"><a href="listaClientes.php">Lista de clientes</a></div>
                <div class="pestañas3" id="p3-1"><a href="registroCliente.php">Registro de Clientes</a></div>
        </nav>
    </section>

</div>

<section>
        <div id="s2">
            <div id="f1">Lista clientes</div>
            <br>
            <div id="form">
                <form action="">
                    <table id="productos">
                    <tr><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>Monto</th><th>Abonos</th><th>Sanciones</th><th>Monto a abonar</th><th></th></tr>
                    <tr><td>Alan</td><td>Montes</td><td>Silva</td><td>1500</td><td><button>VER</button></td><td><button>Seleccionar</button></td><td><input type="number" name="" id=""></td><td><button>ABONAR</button></td></tr>
                    </table>
                </form>
            </div>
        </div>
</section>
    
    <section>
    <div id="s2"> 
        <div id="f1">Buscar cliente</div>  
        <div id="form">
            <form action="">
                <table>
                    <tr><td>Ingresar Nombre del cliente</td><td><input type="text" name="" id=""></td><td></td><td><button type="submit">BUSCAR</button></td></tr>
                </table>
            </form>
        </div>
        <br>
        <div id="form">
                <form action="">
                    <table id="productos">
                    <tr><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>Monto</th><th>Abonos</th><th>Sanciones</th><th>Monto a abonar</th><th></th></tr>
                    <tr><td>Alan</td><td>Montes</td><td>Silva</td><td>1500</td><td><button>VER</button></td><td><button>Seleccionar</button></td><td><input type="number" name="" id=""></td><td><button>ABONAR</button></td></tr>
                    </table>
                </form>
        </div>
    </div>

    </section>



    
</body>
</html>