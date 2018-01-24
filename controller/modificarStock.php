<?php
require_once '../model/data.php';



	$stock = $_POST["stock"];
	$id = $_POST["id"];
	$preciocompra = $_POST["preciocompra"];
	$precioventa = $_POST["precioventa"];
	
	$d = new Data();

	$d->ModificarProducto($id, $stock, $preciocompra, $precioventa);
	//echo $stock;
	//echo $id;
	//echo $precioventa;
	//echo $preciocompra;
	header("location: ../Stock.php?m=1");	

?>