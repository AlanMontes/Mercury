-- Modificaciones de tabla corte
ALTER TABLE corte
DROP COLUMN tiempo_marcaje;

ALTER TABLE corte
DROP COLUMN total_productos;

ALTER TABLE corte
ADD COLUMN quinientos INT;

ALTER TABLE corte
ADD COLUMN doscientos INT;

ALTER TABLE corte
ADD COLUMN cien INT;

ALTER TABLE corte
ADD COLUMN cincuenta INT;

ALTER TABLE corte
ADD COLUMN veinte INT;

ALTER TABLE corte
ADD COLUMN diez INT;

ALTER TABLE corte
ADD COLUMN cinco INT;

ALTER TABLE corte
ADD COLUMN dos INT;

ALTER TABLE corte
ADD COLUMN uno INT;

ALTER TABLE corte
ADD COLUMN cinc_cent INT;

ALTER TABLE corte
ADD COLUMN total float;

-- Modificaciones de tabla ticket
ALTER TABLE ticket
DROP FOREIGN KEY fk_ticket_corte1;

ALTER TABLE ticket
DROP COLUMN id_corte;

ALTER TABLE ticket
ADD COLUMN pago_cant float;

ALTER TABLE ticket
ADD COLUMN id_fpago INT;

ALTER TABLE ticket
ADD CONSTRAINT forma_pago FOREIGN KEY (id_fpago)
REFERENCES pago (id_forma_pago) ON DELETE CASCADE ON UPDATE CASCADE;

-- Tabla para caja
CREATE TABLE tabla_transacciones (
  id_trans INT NOT NULL AUTO_INCREMENT,
  id_producto INT,
  nombre_p VARCHAR(255),
  precio FLOAT,
  PRIMARY KEY (id_trans),
  FOREIGN KEY (id_producto) REFERENCES producto(id_producto) ON DELETE CASCADE ON UPDATE CASCADE
);


