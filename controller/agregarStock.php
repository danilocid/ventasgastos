<?php
require_once '../model/data.php';



$stock= $_POST["stock"];
if ($stock > 0) {
	
	$nombre = $_POST["descripcion"];
	$precio = $_POST["precio"];
	

	
	echo "Stock";
	echo "<br>";
	echo $stock;
	echo "descripcion";
	echo "<br>";
	echo $nombre;
	echo "precio";
	echo "<br>";
	echo $precio;
	

	
	$d = new Data();

	$d->agregarStock($nombre, $precio, $stock);
	header("location: ../ingresar_stock.php?m=3");
	
		//header("location: ../ingresar_stock.php?m=1");	
	
	
}else{
	header("location: ../ingresar_stock.php?m=2");
	}
?>