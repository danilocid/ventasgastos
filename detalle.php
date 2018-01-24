<?php 
include 'includes/header.php';
 ?>

        

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ventas <small>Listado de ventas</small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<?php
require_once "model/data.php";

	$d = new Data();
	$idVenta = $_GET["id"];
	$detalles = $d->getDetalles($idVenta);
	$clientes = $d->DetalleClienteVenta($idVenta);
 echo "<h1>Detalle de venta $idVenta </h1>";
 echo "<h3>Datos cliente</h3>";
 foreach ($clientes as $cl) {
 	echo "<ol>";
 	echo "<li><h4>Nombre: ".$cl->nombre."</h4></li>";
 	echo "<li><h4>RUT: ".$cl->rut."</h4></li>";
 	echo "<li><h4>Razon Social: ".$cl->razonsocial."</h4></li>";
 }
	echo "<table class='table table-bordered table-hover'>";
	echo "<tr class='success'>";
		echo "<th>ID</th>";
		echo "<th>Producto</th>";
		echo "<th>Cantidad</th>";
		echo "<th>Subtotal</th>";
		
			
	echo "</tr>";
		
		
		

		foreach ($detalles as $det) {
		echo "<tr>";
		echo "<td>".$det->id."</td>";		
		echo "<td>".$det->nomProducto."</td>";
		echo "<td>".$det->cantidad."</td>";
		echo "<td>"."$".$det->subTotal."</td>";
				
		echo "</tr>";
		
	}
		?>
</table>
</div>
</div>
        
<?php 

include 'includes/footer.php';
 ?>