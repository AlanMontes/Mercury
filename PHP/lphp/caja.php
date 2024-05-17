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
<body class="ext">
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
                    <h1 class="titulos">Caja</h1>
                    <br>
                    <div class="cont3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Código de producto</span>
                            <input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" id="id_producto">
                            <button class="btn" onclick="agregarProducto()">Añadir</button>
                        </div>
                        <div class="cont4">
                            <table class="cor5">
                                <tr>
                                    <td class="cor6"><b>Código de producto</b></td>
                                    <td class="cor6"><b>Nombre de producto</b></td>
                                    <td class="cor6"><b>Precio</b></td>
                                    <td class="cor6"><b>Eliminar</b></td>
                                </tr>
                                <tbody id="tabla_registros"></tbody>
                            </table>
                        </div>
                        <br>
                        <div class="cont5">
                            <table id="xs">
                                <tr>
                                    <td colspan="2" id="sup">
                                        <br>
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option value="1">01 Efectivo</option>
                                                <option value="2">02 Tarjeta</option>
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
                                                <table class="cor5">
                                                    <tr>
                                                        <td class="cor2"><b>Recibí:</b></td>
                                                        <td class="cor2">
                                                            <input type="text" placeholder="0.00" class="form-control" aria-label="Username" aria-describedby="basic-addon1" id="cant_pago">                                                           
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cor2"><b>Cambio:</b></td>
                                                        <td class="cor2" id="cambio"></td>
                                                    </tr>
                                                </table>
                                                <br>
                                                <table class="cor3">
                                                    <tr>
                                                        <td class="cor4">
                                                            <button class="btn" id="btnPagar" onclick="enviarDatosTicket()">Pagar</button>
                                                        </td>
                                                        <td class="cor4">
                                                            <button class="btn" id="NuevaV" onclick="eliminarRegistrosTabla()">Nueva venta</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </center>
                                        </div>
                                    </td>
                                    <td class="cor8">
                                        <br>
                                        <div class="cont6 padre">
                                            <div class="hijo">
                                                <h1 class="totalt" id="total">$ 0.00</h1>
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
        function agregarProducto() {
            var id_producto = $('#id_producto').val();
            $.post('agregar_producto.php', { id_producto: id_producto })
                .done(function(respuesta) {
                    obtenerRegistros();
                })
                .fail(function() {
                    alert('Error al agregar el producto');
                });
        }


        function obtenerRegistros() {
        $.get('obtener_registros.php', function(registros) {
            mostrarRegistros(registros);
        }, 'json')
        .fail(function() {
            alert('Error al obtener los registros');
        });
        }

        function mostrarRegistros(registros) {

        var tabla = $('#tabla_registros');

         // Verificar si no hay registros
        if (registros.length === 0) {
            $('.totalt').text('$ 0.00');
        }

        // Limpiar todas las filas de la tabla
        tabla.empty();

        for (var i = 0; i < registros.length; i++) {
            var registro = registros[i];
            var fila = $('<tr>').attr('data-id-trans', registro.id_trans);

            var columnaIdProducto = $('<td>').text(registro.id_producto);
            var columnaNombreP = $('<td>').text(registro.nombre_p);
            var columnaPrecio = $('<td>').text(registro.precio);
            var columnaEliminar = $('<td>');

            // Crear la imagen botón para eliminar
            var imagenEliminar = $('<img>')
                .attr('src', 'Imagen/close.png')
                .addClass('boton-eliminar')
                .click(function() {
                    var fila = $(this).closest('tr');
                    var idTrans = fila.attr('data-id-trans');

                    eliminarRegistro(idTrans);
                });

            columnaEliminar.append(imagenEliminar);

            fila.append(columnaIdProducto);
            fila.append(columnaNombreP);
            fila.append(columnaPrecio);
            fila.append(columnaEliminar);

            tabla.append(fila);

            calcularTotal();
        }
    }

    function eliminarRegistro(idTrans) {
    $.ajax({
        url: 'eliminar_registro.php',
        type: 'POST',
        data: { id_trans: idTrans },
        success: function(respuesta) {
            obtenerRegistros(); // Vuelve a obtener los registros actualizados después de eliminar
            calcularTotal(); // Actualiza el total después de eliminar un registro
        },
        error: function() {
            alert('Error al eliminar el registro');
        }
    });
    }
    function calcularTotal() {
        var total = 0;
        $('.cor5 tbody tr').each(function() {
            var precio = parseFloat($(this).find('td:eq(2)').text().replace('$', '').trim());
            if (!isNaN(precio)) {
                total += precio;
            }
        });

        if (isNaN(total)) {
            total = 0;
        }

        $('.totalt').text('$ ' + total.toFixed(2));
    }

    function eliminarRegistrosTabla() {
        $.post('eliminar_registros.php', function(response) {
            // Verificar la respuesta del servidor
            if (response.success) {
                // Eliminación exitosa, actualizar los registros y el total
                obtenerRegistros();
                calcularTotal();

                // Restablecer los valores de los inputs y del elemento <td> con el cambio
                $('#cant_pago').val('');
                $('#cambio').text('');
                $('#id_producto').val('');

            } else {
                // Error al eliminar los registros
                alert('Error al eliminar los registros');
            }
        }, 'json')
        .fail(function() {
            alert('Error al enviar la solicitud de eliminación');
        });
    }

    function enviarDatosTicket() {
    var montoTotal = parseFloat($('.totalt').text().replace('$', '').trim());
    var pagoCant = parseFloat($('#cant_pago').val().trim());
    var cambio = pagoCant - montoTotal;
    var idFpago = $('#floatingSelect').val();

    $('#cambio').text(cambio.toFixed(2));

    $.ajax({
        url: 'guardar_ticket.php', 
        type: 'POST',
        data: {
            monto_total: montoTotal,
            pago_cant: pagoCant,
            cambio: cambio,
            id_fpago: idFpago
        },
        success: function(response) {
        // Realizar la inserción en la tabla "ventas"
        $.post('insertar_ventas.php', function(ventasResponse) {
            console.log('Inserción en la tabla "ventas" exitosa');
        })
        .fail(function() {
            console.log('Error al insertar en la tabla "ventas"');
        });
        },
        error: function() {
            alert('Error al enviar los datos del ticket');
        }

    });
}




    // Obtener los registros al cargar la página
    obtenerRegistros();
    </script>
</body>
</html>
