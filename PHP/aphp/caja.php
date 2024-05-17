<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERCURY</title>
    <!--Boostrap-->
    <link rel="stylesheet" href="/Mercury/CSS/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Mercury/CSS/estilo1.css"/>
</head>
<body class="ext">
    <!--Menu de navegador-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <img src="/Mercury/IMAGENES/6.png" id="logo">

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">

                    <a id="linkNav" class="nav-link active" aria-current="page" href="caja.php">Caja</a>
                    <a id="linkNav" class="nav-link" href="">Registro clientes</a>
                    <a id="linkNav" class="nav-link" href="">Inventario</a>
                    <a id="linkNav" class="nav-link" href="">Ingresos/Egresos</a>
                    <a id="linkNav" class="nav-link" href="/Mercury/PHP/proveedores.php">Proveedores</a>
                    <a id="linkNav" class="nav-link" href="/Mercury/PHP/usulist.php">Registro empleados</a>

                </div>
            </div>
            <div id="logout">
                <a href="indice.html"><img src="/Mercury/IMAGENES/logout.png" id="imglo"/></a>
            </div>
        </div>
    </nav>
    <!--FIN NAVEGADOR-->
    <section>
        <div class="cont1">
            <div class="cont2">
                <center>
                    <h1 class="titulos">Caja</h1>
                    <br>
                    <div class="cont3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Código de producto</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="id_producto">
                            <button class="btn" onclick="agregarProducto()">Añadir</button>
                        </div>
                        <div class="cont4">
                        <table class="cor5" id="tablaproductos">
                            <tr>
                                <td class="cor6"><b>Código de producto</b></td>
                                <td class="cor6"><b>Nombre de producto</b></td>
                                <td class="cor9 cor6"><b>Precio</b></td>
                                <td class="cor10 cor6"><b>Eliminar</b></td>
                            </tr>
                        </table>
                        </div>
                        <br>
                        <div class="cont5">
                            <table id="xs">
                                <tr>
                                    <td colspan="2" id="sup">
                                        <br>
                                        <div class="form-floating">
                                            <select class="form-select" id="forma_p" name="forma_p" aria-label="Floating label select example">
                                                <option value="1">1 Efectivo</option>
                                                <option value="2">2 Tarjeta</option>
                                            </select>
                                            <label for="floatingSelect">Método de pago</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cor7">
                                        <br>
                                        <div class="cont6" id="metodop">
                                            <center>
                                                <form action="pago.php" method="POST">
                                                <table class="cor5">
                                                    <tr>
                                                        <td class="cor2"><b>Recibí:</b></td>
                                                        <td class="cor2">
                                                            <input name="dinero" type="text" placeholder="0.00" class="form-control" aria-label="Username" aria-describedby="basic-addon1">                                                           
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cor2"><b>Cambio:</b></td>
                                                        <td class="cor2" id="cambio"></td>
                                                    </tr>
                                                </table>
                                                <input type="hidden" name="codigos_productos" value="">
                                                <input type="hidden" name="suma_total" value="">

                                                <br>                                                
                                                <table class="cor3">
                                                    <tr>
                                                        <td class="cor4">
                                                            <button class="btn" type="submit">Pagar</button>
                                                        </td>
                                                        <td class="cor4">
                                                            <button class="btn" type="reset">Nueva venta</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                                </form>
                                            </center>
                                        </div>
                                    </td>
                                    <td class="cor8">
                                        <br>
                                        <div class="cont6 padre">
                                            <div class="hijo">
                                                <div class="precio_total">
                                                    <h1 class="totalt" id="total">$ 0.00</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
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
    var codigosProductos = [];
    function agregarProducto() {
        // Obtener los valores de los campos requeridos
        var idProducto = document.querySelector('input[name="id_producto"]').value;        


        // Realizar una petición AJAX para obtener los datos del producto desde el servidor
        // Puedes usar una biblioteca como jQuery o la API Fetch para hacer la petición

        // Ejemplo utilizando la API Fetch
        fetch('obtener_producto.php?id=' + idProducto)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
            alert(data.error);
            } else {
            // Crear una nueva fila en la tabla con los datos del producto
            var tablaProductos = document.getElementById('tablaproductos');
            var fila = tablaProductos.insertRow();

            // Insertar los datos del producto en las celdas de la fila
            var celdaIdProducto = fila.insertCell();
            celdaIdProducto.textContent = data.id_producto;

            var celdaNombreProducto = fila.insertCell();
            celdaNombreProducto.textContent = data.nombre_producto;

            var celdaPrecio = fila.insertCell();
            celdaPrecio.textContent = data.precio_publico;
            celdaPrecio.classList.add("cor9");

            // Agregar el código de producto al array
            codigosProductos.push(data.id_producto);
            // Actualizar el valor del campo oculto con los códigos de producto
            document.querySelector('input[name="codigos_productos"]').value = codigosProductos.join(',');


            // Calcular la suma de los precios
            var precios = document.getElementsByClassName("cor9");
            var suma = 0;

            for (var i = 0; i < precios.length; i++) {
                var precio = parseFloat(precios[i].textContent);

                // Verificar si el valor es numérico
                if (!isNaN(precio)) {
                suma += precio;
                }
            }

            // Mostrar la suma en el elemento h1 con el id "total"
            document.getElementById("total").textContent = "$ " + suma.toFixed(2);
            document.querySelector('input[name="suma_total"]').value = suma.toFixed(2);


            // Agregar la imagen de eliminar a la nueva fila
            var celdaAcciones = fila.insertCell();
            // Agregar el código de producto al array

            var imagenEliminar = document.createElement("img");
            imagenEliminar.src = "Imagen/close.png";
            imagenEliminar.classList.add("btn-eliminar");
            celdaAcciones.appendChild(imagenEliminar);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // Evento de escucha para las imágenes de eliminar
    document.addEventListener("click", function(event) {
        if (event.target.classList.contains("btn-eliminar")) {
        var filaProducto = event.target.closest("tr"); // Obtener la fila que contiene la imagen de eliminar
        var celdaPrecio = filaProducto.querySelector(".cor9"); // Obtener la celda de precio de la fila
        var precio = parseFloat(celdaPrecio.textContent);

        if (!isNaN(precio)) {
            // Restar el precio eliminado del total
            var totalElement = document.getElementById("total");
            var total = parseFloat(totalElement.textContent.replace("$", ""));
            total -= precio;
            totalElement.textContent = "$ " + total.toFixed(2);
        }


        // Eliminar la fila del producto
        filaProducto.remove();

        }
    });
    </script>


</body>
</html>