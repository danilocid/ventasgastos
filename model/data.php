<?php

require_once "coneccion.php";
require_once "venta.php";
require_once "producto.php";
require_once "detalle.php";
require_once "gastos.php";
require_once "config.php";
require_once "clientes.php";
class Data{

	private $con;

	public function __construct(){
		$this -> con = new Conexion(SERVER, DB, DB_USER, DB_PASS);
	}

	public function getProductos(){
		$productos = array();

		$query ="select * from productos";
		$res = $this->con->ejecutar($query);

		while ($reg = mysql_fetch_array($res)) {
			$p = new Productos();

			$p->id = $reg[0];
			$p->nombre = $reg[1];
			$p->codigodebarra = $reg[2];
			$p->preciocompra = $reg[3];
			$p->precioventa = $reg[4];
			$p->stock = $reg[5];

			array_push($productos, $p);
		}

		return $productos;
	}

	public function getGastos(){
		$gastos = array();

		$query ="select * from gastos";
		$res = $this->con->ejecutar($query);

		while ($reg = mysql_fetch_array($res)) {
			$g = new Gastos();

			$g->id = $reg[0];
			$g->fecha = $reg[1];
			$g->descripcion = $reg[2];
			$g->tipo = $reg[3];
			$g->monto = $reg[4];

			array_push($gastos, $g);
		}

		return $gastos;
	}

	public function getDetalles($idVenta){
		$query = "select idproducto, detalle, cantidad,valor from detalledte where iddte = $idVenta";
		$detalles = array();

		$res = $this->con->ejecutar($query);
		while($reg = mysql_fetch_array($res)){
			$d = new Detalle();

			$d->id = $reg[0];
			$d->nomProducto = $reg[1];
			$d->cantidad = $reg[2];
			$d->subTotal = $reg[3];

			array_push($detalles, $d);
		}
		return $detalles;
	}

	public function getVentas(){
		$ventas = array();

		$query ="select * from dte";
		$res = $this->con->ejecutar($query);

		while ($reg = mysql_fetch_array($res)) {
			$v = new venta();

			$v->id = $reg[0];
			$v->rut = $reg[1];
			$v->numero = $reg[2];
			$v->tipo = $reg[3];
			$v->fecha = $reg[4];
			$v->monto = $reg[5];

			
			array_push($ventas, $v);
		}

		return $ventas;
	}

	public function crearVenta($listaProductos, $total, $rut, $numero_documento, $documento){
		$query = "insert into dte values(null, '".$rut."', '$numero_documento', '".$documento."', now(), '".$total."')";
		$this->con->ejecutar($query);

		$query = "select max(id) from dte";
		$res = $this->con->ejecutar($query);

		$idUltimaVenta = 0;
		if ($reg = mysql_fetch_array($res)){
			$idUltimaVenta = $reg[0];
		}

		foreach ($listaProductos as $p) {
			$query = "insert into detalledte values(null, 
			'".$idUltimaVenta."',
			'".$p->id."',
			'".$p->nombre."',
			'".$p->cantidad."',
			'".$p->precio_venta."')";
			

			$this->con->ejecutar($query);
			$this->actulizarStock($p->id, $p->cantidad);
			}
	}

	public function actulizarStock($id, $stockADescontar){

		$query = "select stock from productos where id = $id";

		$res = $this->con->ejecutar($query);
		$stockActual = 0;
		if ($reg = mysql_fetch_array($res)) {
			$stockActual = $reg[0];
		}
		$stockActual -= $stockADescontar;

		$query = "update productos set stock = $stockActual where id = $id";
		$this->con->ejecutar($query);
	}

	public function agregarStock($stock, $preciocompra, $precioventa, $descripcion, $codigodebarra){

		$query = "insert into productos values(null, '$descripcion', '$codigodebarra', $preciocompra, $precioventa, $stock)";

		$this->con->ejecutar($query);
	}

	public function agregarGastos($descripcion, $tipo, $monto){

		$query = "insert into gastos values(null, now(), '$descripcion', '$tipo', '$monto')";

		$this->con->ejecutar($query);
	}

	public function ModificarProducto($id, $stock, $preciocompra, $precioventa, $descripcion, $codigodebarra){

		$query = "update productos set stock = $stock, precio_venta = $precioventa, precio_compra = $preciocompra, nombre = '$descripcion', codigodebarra = '$codigodebarra' where id = $id";
		
		$this->con->ejecutar($query);
	}

	public function verProducto($id){
		$productos = array();

		$query ="select * from productos where id = '$id'";
		$res = $this->con->ejecutar($query);

		while ($reg = mysql_fetch_array($res)) {
			$p = new Productos();

			$p->id = $reg[0];
			$p->nombre = $reg[1];
			$p->codigodebarra = $reg[2];
			$p->preciocompra = $reg[3];
			$p->precioventa = $reg[4];
			$p->stock = $reg[5];

			array_push($productos, $p);
		}

		return $productos;
	}

	public function AgregarProducto($txtnombre){
		$productos = array();

		$query ="select id, nombre, precio_venta, stock from productos where nombre LIKE '$txtnombre' or codigodebarra LIKE '$txtnombre'";
		$res = $this->con->ejecutar($query);

		while ($reg = mysql_fetch_array($res)) {
			$p = new Productos();

			$p->id = $reg[0];
			$p->nombre = $reg[1];
			$p->precio_venta = $reg[2];
			$p->stock = $reg[3];

			array_push($productos, $p);
		}

		return $productos;
	}

	public function DetalleClienteVenta($idVenta){
		$query = "select rut from dte where id = $idVenta";
		$res = $this->con->ejecutar($query);
		$clientes = array();
		if ($reg = mysql_fetch_array($res)){
			$rut = $reg[0];
		}
		$query = "select rut, nombre, razonsocial from clientes where rut LIKE '$rut%'";
		$res2 = $this->con->ejecutar($query);
		while ($reg = mysql_fetch_array($res2)) {
			$c = new Clientes();

			$c->rut = $reg[0];
			$c->nombre = $reg[1];
			$c->razonsocial = $reg[2];
			
			array_push($clientes, $c);
		}
		return $clientes;
	}

	/*public function tieneStock($id, $stock){

		$query = "select stock from producto where id = $id";

		$res = $this->con->ejecutar($query);
		$stockActual = 0;
		if ($reg = mysql_fetch_array($res)) {
			$stockActual = $reg[0];
		}

		return $stockActual >= $stock;
	}
	*/

}

?>