<?php
require_once '../model/data.php';



$stock= $_POST["stock"];
if ($stock > 0) {
	
	$descripcion = $_POST["descripcion"];
	$preciocompra = $_POST["precio_compra"];
	$precioventa = $_POST["precio_venta"];
	$codigodebarra = $_POST["codigodebarra"];
		
	$d = new Data();

	$d->agregarStock($stock, $preciocompra, $precioventa, $descripcion, $codigodebarra);
	header("location: ../ingresar_stock.php?m=3");
	
		//header("location: ../ingresar_stock.php?m=1");	
	
	
}else{
	header("location: ../ingresar_stock.php?m=2");
	}
?>