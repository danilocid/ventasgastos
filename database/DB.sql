create database ventas;

	use ventas;

	create table producto(
		id int auto_increment,
		nombre varchar(100) not null,
		precio_venta int not null,
		precio_compra int not null,
		stock int not null,
		primary key(id)

	);

	insert into producto values(null, 'leche','100','90','10');
	insert into producto values(null, 'dulce de leche','200','90','10');
	insert into producto values(null, 'sal','300','90','10');
	insert into producto values(null, 'Pimienta','400','90','10');
	insert into producto values(null, 'Oregano','500','90','10');


	create table venta(
		id int auto_increment,
		fecha datetime not null,
		total int not null,
		primary key(id)
	);

	create table detalle(
		id int auto_increment,
		venta int not null,
		producto int not null,
		cantidad int not null,
		precio_compra int not null,
		precio_venta int not null,
		subTotal int not null,
		primary key(id)
	);

	CREATE TABLE gastos(
  		id int(11) NOT NULL,
  		fecha datetime NOT NULL,
  		descripcion varchar(200) NOT NULL,
  		tipo varchar(100) NOT NULL,
 		monto int(100) NOT NULL,
 		primary key(id)
 	);
	