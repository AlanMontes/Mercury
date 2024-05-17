-- ---------------------- PROCEDIMIENTOS INVENTARIOS ----------------------
-- ---------------------- PROCEDIMIENTOS ALTAS PRODUCTOS --------------------------------------------------------------------
-- ---------------------- ALTA PRODUCTO ----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`alta_producto` (in id_producto int, nombre_producto varchar(45),
descripcion varchar(45), precio_publico float, precio_proveedor float, cantidad_producto float,
fecha_caducidad date,id_proveedor int(11) , departamento varchar(45))
BEGIN
	SET SQL_SAFE_UPDATES = 0;
	insert into producto values (id_producto, upper(nombre_producto),
	lower(descripcion), precio_publico, precio_proveedor, cantidad_producto ,
	0 , 0 , curdate(), departamento ,id_proveedor);
    INSERT INTO registroinventario VALUES ( null,curdate(),fecha_caducidad,cantidad_producto,id_producto);
END
DELIMITER ;

-- ---------------------- ALTA CANTIDAD PRODUCTO id----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`altaNid_producto` (in id_p int, cant int, fc date)
BEGIN
	SET SQL_SAFE_UPDATES = 0;
	SELECT cantidad_producto into @cantidad from producto where id_producto = id_p;
    select @cantidad;
    set @cantidad = @cantidad+cant;
	update producto set cantidad_producto=@cantidad where id_producto = id_p;
    INSERT INTO registroinventario VALUES ('',curdate(),fc,cant,id_p);
END
DELIMITER ;

-- ---------------------- ALTA CANTIDAD PRODUCTO nombre----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`altaNnom_producto` (in nom varchar(45), cant int,fc date)
BEGIN
	SET SQL_SAFE_UPDATES = 0;
	SELECT cantidad_producto into @cantidad from producto where nombre_producto = nom;
    select @cantidad;
    set @cantidad = @cantidad+cant;
	update producto set cantidad_producto=@cantidad where nombre_producto = nom;
    SELECT id_producto into @id from producto where nombre_producto = nom;
    INSERT INTO registroinventario VALUES ('',curdate(),fc,cant,@id);
END
DELIMITER ;

-- ---------------------- PROCEDIMIENTOS BAJAS PRODUCTOS --------------------------------------------------------------------
-- ---------------------- BAJA DEFINITIVA PRODUCTO ID ----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`bajadid_producto` (in id int)
BEGIN
	SET SQL_SAFE_UPDATES = 0;
    DELETE FROM producto WHERE (id_producto = id);
END
DELIMITER ;

-- ---------------------- BAJA DEFINITIVA PRODUCTO ID ----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`bajadnom_producto` (in nom varchar(45))
BEGIN
	SET SQL_SAFE_UPDATES = 0;
    DELETE FROM producto WHERE nombre_producto = nom;
END
DELIMITER ;

-- ---------------------- BAJA CANTIDAD PRODUCTO ID ----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`bajacanid_producto` (in id_p int, cant int, opcion int)
BEGIN
	SET SQL_SAFE_UPDATES = 0;
	SELECT cantidad_producto into @cantidad from producto where id_producto = id_p;
    select @cantidad;
    set @cantidad = @cantidad-cant;
	update producto set cantidad_producto=@cantidad where id_producto = id_p;
    -- 0 MERMA 1 CADUCIDAD
	IF opcion = 0 THEN
			SELECT cantidad_mermados into @canm from producto where id_producto = id_p;
			select @canm;
			set @canm = @canm+cant;
			update producto set cantidad_mermados=@canm where id_producto = id_p;
			INSERT INTO registromermas VALUES ('','MERMA',curdate(),cant,id_p);
    ELSE
			SELECT cantidad_caducos into @canc from producto where id_producto = id_p;
			select @canc;
			set @canc = @canc+cant;
			update producto set cantidad_caducos=@canc where id_producto = id_p;
            INSERT INTO registromermas VALUES ('','CADUCIDAD',curdate(),cant,id_p);
    END IF;
END
DELIMITER ;

-- ---------------------- BAJA CANTIDAD PRODUCTO NOMBRE ----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`bajacannom_producto` (in nombre varchar(45), cant int, opcion int)
BEGIN
	SET SQL_SAFE_UPDATES = 0;
	SELECT cantidad_producto into @cantidad from producto where nombre_producto = nombre;
    select @cantidad;
    set @cantidad = @cantidad-cant;
	update producto set cantidad_producto=@cantidad where nombre_producto = nombre;
    -- 0 MERMA 1 CADUCIDAD
	IF opcion = 0 THEN
			SELECT cantidad_mermados into @canm from producto where nombre_producto = nombre;
			select @canm;
			set @canm = @canm+cant;
			update producto set cantidad_mermados=@canm where nombre_producto = nombre;
			SELECT id_producto into @id from producto where nombre_producto = nombre;
			INSERT INTO registromermas VALUES ('','MERMA',curdate(),cant,@id);
    ELSE
			SELECT cantidad_caducos into @canc from producto where nombre_producto = nombre;
			select @canc;
			set @canc = @canc+cant;
			update producto set cantidad_caducos=@canc where nombre_producto = nombre;
			SELECT id_producto into @id from producto where nombre_producto = nombre;
			INSERT INTO registromermas VALUES ('','CADUCIDAD',curdate(),cant,@id);
    END IF;
END
DELIMITER ;

-- ---------------------- ACTUALIZAR PRODUCTO ID ----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`editar_producto` (in id int, nombre varchar(45), des varchar(45), p1 float, p2 float, idprov int)
BEGIN
	SET SQL_SAFE_UPDATES = 0;
    UPDATE mercury.producto SET nombre_producto = upper(nombre), descripcion = lower(des), 
    precio_publico = p1, precio_proveedor = p2, id_proveedor = idprov WHERE (id_producto = id);
END
DELIMITER ;

-- ---------------------- MERMAS ----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`lista_mermas` (in fi date, ff date)
BEGIN
	SET SQL_SAFE_UPDATES = 0;
	   select registromermas.id_producto, producto.nombre_producto as 'nombre_producto', producto.precio_proveedor as 'precio_proveedor',
	   SUM(cantidad) as "cantidad", fecha_Registro, producto.cantidad_producto as "stock" from registromermas
	   inner join producto on producto.id_producto = registromermas.id_producto
       WHERE fecha_Registro BETWEEN fi AND ff && tipo='MERMA'
	   GROUP BY id_producto;
END
DELIMITER ;

-- ---------------------- CADUCOS ----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`lista_caducos` (in fi date, ff date)
BEGIN
	SET SQL_SAFE_UPDATES = 0;
	   select registromermas.id_producto, producto.nombre_producto as 'nombre_producto', producto.precio_proveedor as 'precio_proveedor',
	   cantidad, fecha_Registro,producto.cantidad_producto as "stock" from registromermas
	   inner join producto on producto.id_producto = registromermas.id_producto
       WHERE fecha_Registro BETWEEN fi AND ff && tipo='CADUCIDAD';
END
DELIMITER ;

-- ---------------------- POR TERMINAR ----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`porterminar` ()
BEGIN
	SET SQL_SAFE_UPDATES = 0;
select id_producto, nombre_producto, producto.precio_proveedor,
	   cantidad_producto, proveedor.nombre_empresa from producto
	   inner join proveedor on proveedor.id_proveedor = producto.id_proveedor
       WHERE cantidad_producto <= 5;
END
DELIMITER ;

-- ----------------------  TERMINADOS----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`terminados` ()
BEGIN
	SET SQL_SAFE_UPDATES = 0;
select id_producto, nombre_producto, producto.precio_proveedor,
	   cantidad_producto, proveedor.nombre_empresa from producto
	   inner join proveedor on proveedor.id_proveedor = producto.id_proveedor
       WHERE cantidad_producto = 0;
END
DELIMITER ;

-- ---------------------- MAS VENDIDOS----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`masvendidos`  (in fi date, ff date)
BEGIN
	SET SQL_SAFE_UPDATES = 0;
select ventas.id_producto, producto.nombre_producto,
	   SUM(cantidadvendidos) as "cantidadVendido", SUM(montoPorProductos) as "montoPorProductos",
       producto.cantidad_producto, fechaVenta from ventas
        inner join producto on producto.id_producto = ventas.id_producto
        where fechaVenta BETWEEN fi AND ff
        GROUP BY id_producto
        ORDER BY cantidadvendido DESC 
        limit 15; 
END
DELIMITER ;

-- ---------------------- MENOS VENDIDOS----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`menosvendidos`  (in fi date, ff date)
BEGIN
	SET SQL_SAFE_UPDATES = 0;
select ventas.id_producto, producto.nombre_producto,
	   SUM(cantidadvendidos) as "cantidadVendido",SUM(montoPorProductos) as "montoPorProductos",
       producto.cantidad_producto, fechaVenta from ventas
        inner join producto on producto.id_producto = ventas.id_producto
        where fechaVenta BETWEEN fi AND ff
        GROUP BY id_producto
        ORDER BY cantidadvendido ASC 
        limit 15; 
END
DELIMITER ;

-- ----------------------  TERMINADOS----------------------
DELIMITER $$
CREATE or REPLACE PROCEDURE `mercury`.`nota`()
BEGIN
	SET SQL_SAFE_UPDATES = 0;
select id_producto, nombre_producto, producto.precio_publico,producto.precio_proveedor,
	   cantidad_producto, proveedor.nombre_empresa from producto
	   inner join proveedor on proveedor.id_proveedor = producto.id_proveedor
       WHERE cantidad_producto = 0;
END
DELIMITER ;

