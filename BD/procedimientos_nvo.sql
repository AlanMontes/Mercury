DELIMITER //

CREATE PROCEDURE SumarMontoPorRangoFechas(IN fecha_inicio DATE, IN fecha_fin DATE, OUT venta FLOAT)
BEGIN
  SELECT SUM(montoPorProductos) INTO venta
  FROM ventas
  WHERE fechaVenta >= fecha_inicio AND fechaVenta <= fecha_fin;
END //

DELIMITER ;


DELIMITER //

CREATE PROCEDURE ObtenerSumaProductosRango(
    IN fecha_inicio_param DATE,
    IN fecha_final_param DATE,
    OUT inversion DECIMAL(10, 2)
)
BEGIN
    SELECT SUM(registroinventario.cantidadAdquirida * producto.precio_proveedor)
    INTO inversion
    FROM registroinventario
    INNER JOIN producto ON registroinventario.id_producto = producto.id_producto
    WHERE registroinventario.fecha_registro BETWEEN fecha_inicio_param AND fecha_final_param;
END //

DELIMITER ;

DELIMITER //

CREATE PROCEDURE ObtenerNombreApellido(
    IN usuario_id INT,
    OUT nombre_apellido VARCHAR(255)
)
BEGIN
    DECLARE nombre_usuario VARCHAR(255);
    DECLARE apellido_paterno VARCHAR(255);

    SELECT nombre, ap_paterno INTO nombre_usuario, apellido_paterno
    FROM usuarios
    WHERE id_usuarios = usuario_id;

    SET nombre_apellido = CONCAT(nombre_usuario, ' ', apellido_paterno);
END //

DELIMITER ;

DELIMITER //

CREATE PROCEDURE ObtenerProducto(
  IN id_producto_param INT,
  OUT nombre_producto_out VARCHAR(255),
  OUT precio_publico_out FLOAT
)
BEGIN
  SELECT nombre_producto, precio_publico INTO nombre_producto_out, precio_publico_out
  FROM producto
  WHERE id_producto = id_producto_param;
END //

DELIMITER ;

drop procedure ObtenerProducto;