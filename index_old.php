<?php 
include 'includes/header.php';
 ?>

        

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ventas <small>Generar ventas</small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
                      <thead>
  <tr >
    <th>ID</th>   
    <th>Descripcion</th>
    
    <th>Precio</th>
    <th>Stock</th>
    
    <th>Añadir a venta</th>   
  </tr>
  </thead>
  <tbody>
    <?php
    
    require_once "/model/data.php";

    $d = new Data();
    session_start();
    $productos = $d->getProductos();

    foreach ($productos as $p) {
      if ($p->stock != 0) {
    echo "<tr>";    
    echo "<form action='controller/agregar.php' method='POST'>";  
    
    echo "<td>".$p->id."</td>";
    echo "<td>".$p->nombre."</td>";
    echo "<td>"."$".$p->precioventa."</td>";
    echo "<td>".$p->stock."</td>";    
    echo "<td>";
   // echo "<div class='col-md-12 col-sm-12 col-xs-12 form-group'>";
    echo "<input type='hidden' name='txtCantidad' value='1'>";
    //echo "</td>";
    //echo "<td>";
    echo "<input type='hidden' name='txtId' value='".$p->id."'>";
    echo "<input type='hidden' name='txtNombre' value='".$p->nombre."'>";
    echo "<input type='hidden' name='txtPrecio' value='".$p->precioventa."'>";
    echo "<input type='hidden' name='txtStock' value='".$p->stock."'>";
   
    echo "<button type='submit' class='btn btn-success' name='btnAñadir' value='Añadir'>Añadir</button>";

    echo "</td>";
    
    echo "</form>";
    echo "</tr>";
  }
    
  }
    ?>
    </tbody>
</table>

    


  <?php 
    

   // session_start();

    if (isset($_SESSION["carrito"])) {
      $carrito = $_SESSION["carrito"];

    echo "<h1>Listado de compra</h1>";
    echo "<br>";      
    echo "<table class='table table-bordered table-hover'>";
    echo "<tr class='success'>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Precio</th>";
    echo "<th>Stock actual</th>";
    echo "<th>Cantidad</th>";
    echo "<th>Sub Total</th>";
    echo "<th>Eliminar</th>";
    echo "</tr>";
    $total = 0;
    $i = 0;
    foreach ($carrito as $p) {
    echo "<tr>";
    echo "<td>".$p->id."</td>";   
    echo "<td>".$p->nombre."</td>";
    echo "<td>$".$p->precioventa."</td>";
    echo "<td>".$p->stock."</td>";    
    echo "<td>".$p->cantidad."</td>";   
    echo "<td>$".$p->subTotal."</td>";    
    echo "<td>";
    //echo "<a href='controller/eliminarProCar.php?in=$i'>Eliminar</a>";
    echo "<a href='controller/eliminarProCar.php?in=$i'><button class='btn btn-success'>Eliminar</button></a>";
    echo "</td>";
    $total += $p->subTotal;
    $i++;
    echo "</tr>";
    }
    echo "<tr>";
    echo "<td colspan = '5'>Total</td>";
    echo "<td colspan = '1'>$total</td>";
    $_SESSION["total"] = $total;
    echo "<td >";
    echo "<form action='controller/generarVenta.php' method='POST'>";
    echo "<button type='submit' class='btn btn-warning' value='Comprar'>Comprar</button>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";

  }
?>

</tbody>
  </table>
          

          
        </div>
                </div>
              </div>



</div>
        
<?php 

include 'includes/footer.php';
 ?>