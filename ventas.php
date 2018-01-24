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
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
		<tr class="success">
		<th>ID</th>		
		<th>Fecha</th>
		<th>Tipo</th>
		<th>Numero</th>
		<th>Total</th>
		<th>Detalle</th>
			
	</tr>
	</thead>
	<tbody>
		<?php
		
		require_once "model/data.php";

		$d = new Data();

		$venta = $d->getVentas();

		foreach ($venta as $v) {
		echo "<tr>";
		echo "<td>".$v->id."</td>";		
		echo "<td>".$v->fecha."</td>";
		echo "<td>".$v->tipo."</td>";
		echo "<td>".$v->numero."</td>";
		echo "<td>"."$".$v->monto."</td>";
		echo "<td>";
		echo "<a href = 'detalle.php?id=".$v->id."' class='btn btn-warning'>Ver detalle</a>";
		echo "</form>";
		echo "</td>";
		echo "</tr>";
		
	}
		?>
</tbody>
</table>
</div>
        
<?php 

include 'includes/footer.php';
 ?>