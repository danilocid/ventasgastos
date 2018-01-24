<?php 
include 'includes/header.php';
 ?>

        

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stock<small>detalle de productos</small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>

        	<?php
		    
  			echo "<tr class='success'>";
    		echo "<th>ID</th>";
    		echo "<th>Nombre</th>";
    		echo "<th>Precio compra</th>";
        echo "<th>Precio venta</th>";
    		echo "<th>Stock</th>";
        echo "<th>Modificar</th>";
    		echo "</tr>";
        echo "</thead>";
			require_once "model/data.php";

    $d = new Data();
    $productos = $d->getProductos();
    echo "<tbody>";
    foreach ($productos as $p) {
    echo "<tr>";
    ?>
    <td><?php  echo $p->id ?></td>
    <?php echo "<td>".$p->nombre."</td>";
    echo "<td>"."$".$p->preciocompra."</td>";
    echo "<td>"."$".$p->precioventa."</td>";
    echo "<td>".$p->stock."</td>";
    echo "<td>";
    echo "<form action='ActualizarStock.php' method='POST'>";
    echo "<input type='hidden' name='id' value='".$p->id."'>";
    echo "<button type='submit' class='btn btn-success' name='Modificar' value='Modificar'>Modificar</button>";
    echo "</form>"; 
    echo "</td>"; 
    echo "</tr>";
   	
  }
  echo "</tbody>";
  echo "</table>"; 
    ?>



    

		</div>
    </div>
        
        <?php  
                     if(isset($_GET["m"])){

                     $m = $_GET["m"];

                    switch ($m) {
                            case "1":
                    echo "<div class='alert alert-warning alert-dismissible fade in' role='alert'>";
                    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>";
                    echo "</button>";
                    echo "Cambios guardados";
                  echo "</div>";
          break;
        
        
      }
    }
    ?>
<?php 

include 'includes/footer.php';
 ?>