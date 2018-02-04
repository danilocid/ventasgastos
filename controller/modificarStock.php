<?php
require_once '../model/data.php';



	$stock = $_POST["stock"];
	$id = $_POST["id"];
	$preciocompra = $_POST["preciocompra"];
	$precioventa = $_POST["precioventa"];
	$descripcion = $_POST["descripcion"];
	$codigodebarra = $_POST["codigodebarra"];
	
	$d = new Data();

	$d->ModificarProducto($id, $stock, $preciocompra, $precioventa, $descripcion, $codigodebarra);
	
	header("location: ../Stock.php?m=1");	

?>