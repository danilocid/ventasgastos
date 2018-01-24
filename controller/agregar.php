<?php
require_once '../model/data.php';
$d = new Data();
$nombre = $_POST["txtnombre"];

$p = new Productos();
$productos = $d->AgregarProducto($nombre);
$p->cantidad= 1;
if ($p->cantidad > 0) {
	foreach ($productos as $pr) {
		$p->id = $pr->id;
		$p->nombre = $pr->nombre;
		$p->precio_venta = $pr->precio_venta;
		$p->stock = $pr->stock;
	}
	
	
	$p->subTotal = $p->precio_venta * $p->cantidad;

	$d = new Data();
	session_start();
	if (isset($_SESSION["carrito"])) {
		$carrito = $_SESSION["carrito"];
	}else{
		$carrito = array();
	}
	$sumaCantidades = 0;
	foreach ($carrito as $pro) {
		if($pro->id == $p->id){
			$sumaCantidades += $pro->cantidad;
		}
	}
	$sumaCantidades += $p->cantidad;
	if($p->stock >= $sumaCantidades){
		array_push($carrito, $p);
		$_SESSION["carrito"] = $carrito;
		header("location: ../index.php");
	}else{
		header("location: ../index.php?m=1");
	}
}else{
	header("location: ../index.php?m=2");
	}
?>