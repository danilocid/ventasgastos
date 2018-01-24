<?php 
require_once 'model/data.php';
$d = new Data();


$p = new Productos();
$producto = $d->AgregarProducto("Pimienta");
foreach ($producto as $p) {
      
   echo $p->id;
    echo $p->nombre;
    echo $p->precio_venta;
    echo $p->stock;
    
   	}
 ?>