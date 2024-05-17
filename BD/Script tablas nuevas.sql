select cantidad_producto from producto where nombre_producto = 'PAPAS';
select * from producto;

select id_producto, nombre_producto, producto.precio_proveedor,
	   cantidad_producto, proveedor.nombre_empresa from producto
	   inner join proveedor on proveedor.id_proveedor = producto.id_proveedor
       WHERE cantidad_producto = 0;

select id_producto, nombre_productp, cantidad_mermados, from producto where mermados > 0 &&
(fecha >= fecha inicial && fecha <= fecha final)

select id_proveedor,upper(nombre_empresa) from proveedor;

CREATE TABLE registroInventario (
  idregistroInventario int(11) NOT NULL AUTO_INCREMENT,
  fecha_registro date NOT NULL,
  fecha_cad date,
  cantidadAdquirida float NOT NULL,
  id_producto int(11) NOT NULL,
  PRIMARY KEY (idregistroInventario),
  KEY fk_registroInventario_producto_idx (id_producto),
  CONSTRAINT fk_registroInventario_producto1 FOREIGN KEY (id_producto) REFERENCES producto (id_producto) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE registroMermas (
  idregistroMermas int(11) NOT NULL AUTO_INCREMENT,
  tipo varchar(45),
  fecha_registro date NOT NULL,
  cantidad float NOT NULL,
  id_producto int(11) NOT NULL,
  PRIMARY KEY (idregistroMermas),
  KEY fk_registroMermas_producto_idx (id_producto),
  CONSTRAINT fk_registroMermas_producto1 FOREIGN KEY (id_producto) REFERENCES producto (id_producto) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `mercury`.`registroinventario` 
ADD COLUMN `fecha_cad` DATE NULL AFTER `fecha_registro`;

ALTER TABLE `mercury`.`producto` 
DROP COLUMN `fecha_caducidad`;

ALTER TABLE `mercury`.`producto` 
ADD COLUMN `departamento` VARCHAR(45) NOT NULL AFTER `fecha_alta`;
