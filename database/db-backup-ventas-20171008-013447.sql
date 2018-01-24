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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO detalle VALUES("1","1","1","1","0","0","100");
INSERT INTO detalle VALUES("2","2","5","1","0","500","0");
INSERT INTO detalle VALUES("3","3","5","1","0","500","500");
INSERT INTO detalle VALUES("4","4","5","1","0","500","500");
INSERT INTO detalle VALUES("5","5","1","1","0","125","125");
INSERT INTO detalle VALUES("6","6","0","1","0","200","200");
INSERT INTO detalle VALUES("7","6","0","3","0","500","1500");
INSERT INTO detalle VALUES("8","6","0","1","0","300","300");
INSERT INTO detalle VALUES("9","6","0","2","0","300","600");
INSERT INTO detalle VALUES("10","6","0","3","0","300","900");
INSERT INTO detalle VALUES("11","7","3","1","0","300","300");
INSERT INTO detalle VALUES("12","7","4","5","0","400","2000");
INSERT INTO detalle VALUES("13","8","2","1","0","200","200");
INSERT INTO detalle VALUES("14","8","5","1","0","500","500");
INSERT INTO detalle VALUES("15","8","2","1","0","200","200");



DROP TABLE IF EXISTS gastos;

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `monto` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO gastos VALUES("1","2017-08-14 20:59:57","","","100");
INSERT INTO gastos VALUES("2","2017-08-14 21:00:42","test","test","1000");
INSERT INTO gastos VALUES("3","2017-08-14 21:12:39","hklsdfklv","lkhhhhhhhhhhhhhhhhhfgggggggggggggggg","56465");



DROP TABLE IF EXISTS producto;

CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO producto VALUES("1","leche","125","120","8");
INSERT INTO producto VALUES("2","dulce de leche","200","90","8");
INSERT INTO producto VALUES("3","sal","300","90","9");
INSERT INTO producto VALUES("4","Pimienta","400","90","5");
INSERT INTO producto VALUES("5","Oregano","500","90","6");



DROP TABLE IF EXISTS venta;

CREATE TABLE `venta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO venta VALUES("1","2017-07-22 14:59:13","100");
INSERT INTO venta VALUES("2","2017-07-22 15:04:59","0");
INSERT INTO venta VALUES("3","2017-07-22 15:05:52","500");
INSERT INTO venta VALUES("4","2017-09-18 12:56:42","500");
INSERT INTO venta VALUES("5","2017-09-18 13:07:29","125");
INSERT INTO venta VALUES("6","2017-09-24 18:43:01","0");
INSERT INTO venta VALUES("7","2017-09-24 18:46:21","2300");
INSERT INTO venta VALUES("8","2017-09-24 19:06:19","900");



