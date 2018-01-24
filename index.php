<?php include "includes/header.php"; ?>
 


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
   
    <form action="controller/agregar.php" method="POST" class="form-horizontal form-label-left">
     <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="txtnombre">Nombre o codigo de barras</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="txtnombre" name="txtnombre" class="form-control col-md-7 col-xs-12" value=""/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
        <button type="submit" class="btn btn-success">Añadir</button>
        </div>
    </div>
    </form><?php
    require_once 'model/data.php';
 @session_start();
    if (isset($_SESSION['carrito'])) {
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
    echo "<td>$".$p->precio_venta."</td>";
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
    echo "<td colspan = '6'>Total</td>";
    echo "<td colspan = '2'>$".$total."</td>";
    $_SESSION["total"] = $total;
    echo "</tr>";
    echo "<form action='controller/generarVenta.php' method='POST'>";
    echo "<tr>";
    echo "<td><label>RUT cliente</label></td>";
    echo "<td><input type='text' id='txtrut' name='txtrut' class='form-control' value='' required/></td>";
    echo "<td><input type='text' id='txtnombrecliente' name='txtnombrecliente' class='form-control' value='' disabled/></td>";
    echo "<tr>";
    echo "<td colspan = '3'><label>Documento</label></td>";
    echo "<td><label>Numero de documento</label></td><td><input class='form-control' style='width: 5em;' type='number' name= 'numero_documento' required></td>";
    echo "<td><select class='form-control' id='documento' name = 'documento'>
    <option>Boleta</option>
    <option>Factura</option>
    <option>SD</option>    
    </select></td>";
    echo "<td>";
    echo "<button type='submit' class='btn btn-warning' value='Comprar'>Comprar</button>";
    echo "</form>";
    echo "</td>";
    echo "</tbody>";
    echo "</table>";
}
?>
    </div>
    </div>
    </div>
</div>

       
<?php 

include 'includes/footer.php';
 ?>