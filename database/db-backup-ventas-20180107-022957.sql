CREATE DATABASE IF NOT EXISTS ventas;

USE ventas;

DROP TABLE IF EXISTS clientes;

CREATE TABLE `clientes` (
  `rut` varchar(12) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `razonsocial` varchar(60) NOT NULL,
  `giro` varchar(60) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `comuna` varchar(60) NOT NULL,
  `telefono` int(9) NOT NULL,
  `telefono2` int(9) NOT NULL,
  `mail` text NOT NULL,
  `facebook` varchar(120) NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO clientes VALUES("18109289-0","Danilo Cid","NA","NA","Pasaje uno, block 1035, depto 502. Rivera Norte","Concepcion","994679847","0","danilo.cid.v@gmail.com","DAnilo Cid");



DROP TABLE IF EXISTS detalledte;

CREATE TABLE `detalledte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iddte` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `detalle` varchar(60) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS detalledtr;

CREATE TABLE `detalledtr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iddtr` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `detalle` varchar(60) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS dte;

CREATE TABLE `dte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `neto` int(11) NOT NULL,
  `iva` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS dtr;

CREATE TABLE `dtr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `neto` int(11) NOT NULL,
  `iva` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS gastos;

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `detalle` varchar(60) NOT NULL,
  `Tipo` varchar(120) NOT NULL,
  `monto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS ingresos;

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `detalle` varchar(60) NOT NULL,
  `monto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS productos;

CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `codigodebarra` varchar(120) NOT NULL,
  `precio_compra` int(11) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO productos VALUES("1","leche","123456","120","250","8");
INSERT INTO productos VALUES("2","dulce de leche","234567","90","200","8");
INSERT INTO productos VALUES("3","sal","345678","90","300","9");
INSERT INTO productos VALUES("4","Pimienta","456789","90","400","5");
INSERT INTO productos VALUES("5","Oregano","567890","90","500","6");



