CREATE DATABASE IF NOT EXISTS ventas;

USE ventas;

DROP TABLE IF EXISTS detalle;

CREATE TABLE `detalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venta` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO detalle VALUES("1","1","1","1","0","0","100");
INSERT INTO detalle VALUES("2","2","5","1","0","500","0");
INSERT INTO detalle VALUES("3","3","5","1","0","500","500");



DROP TABLE IF EXISTS gastos;

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `monto` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS producto;

CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO producto VALUES("1","leche","125","120","9");
INSERT INTO producto VALUES("2","dulce de leche","200","90","10");
INSERT INTO producto VALUES("3","sal","300","90","10");
INSERT INTO producto VALUES("4","Pimienta","400","90","10");
INSERT INTO producto VALUES("5","Oregano","500","90","8");



DROP TABLE IF EXISTS venta;

CREATE TABLE `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO venta VALUES("1","2017-07-22 14:59:13","100");
INSERT INTO venta VALUES("2","2017-07-22 15:04:59","0");
INSERT INTO venta VALUES("3","2017-07-22 15:05:52","500");



