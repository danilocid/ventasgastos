<?php
require_once '../model/data.php';



$monto= $_POST["monto"];
if ($monto > 0) {
	
	$tipo = $_POST["tipo"];
	$descripcion = $_POST["descripcion"];
	
	$d = new Data();

	$d->agregarGastos($descripcion, $tipo, $monto);
	header("location: ../gastos.php?m=3");
	
	
	
	
}else{
	header("location: ../gastos.php?m=2");
	}
?>