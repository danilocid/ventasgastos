<?php 
include 'includes/header.php';
 ?>

        

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
        <?php 

            require_once "model/data.php";

            $d = new Data();

            $venta = $d->getVentas();
            $total_ventas = 0;
            $n_ventas = 0;
            $n_gastos = 0;
            $total_gastos= 0;
            foreach ($venta as $v) {
            
            $total_ventas = $total_ventas + $v->total;
            $n_ventas++;
            }

            $d = new Data();

            $gastos = $d->getGastos();

            foreach ($gastos as $g) {
              $n_gastos++;
              $total_gastos = $total_gastos + $g->monto;
            }
              echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
              echo "<div class='row top_tiles'>";
              echo "<div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>";
              echo "<div class='tile-stats'>";
              echo "<div class='icon'><i class='fa fa-caret-square-o-right'></i></div>";
              echo "<div class='count'>$".$total_ventas."</div>";
              echo "<h3>Total ventas</h3>";
              echo "<p>Monto total de ventas realizadas</p>";
              echo "</div>";
              echo "</div>";
              echo "<div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>";
              echo "<div class='tile-stats'>";
              echo "<div class='icon'><i class='fa fa-comments-o'></i></div>";
              echo "<div class='count'>".$n_ventas."</div>";
              echo "<h3>Ventas realizadas</h3>";
              echo "</br>";
              echo "</div>";
              echo "</div>";
              echo "<div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>";
              echo "<div class='tile-stats'>";
              echo "<div class='icon'><i class='fa fa-sort-amount-desc'></i></div>";
              echo "<div class='count'>".$n_gastos."</div>";
              echo "<h3>Gastos realizados</h3>";
              echo "</br>";
              echo "</div>";
              echo "</div>";
              echo "<div class='animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12'>";
              echo "<div class='tile-stats'>";
              echo "<div class='icon'><i class='fa fa-institution'></i></div>";
              echo "<div class='count'>$".$total_gastos."</div>";
              echo "<h3>Gastos</h3>";
              echo "<p>Monto total de gastos</p>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
      ?>

              </div>



</div>
        
<?php 

include 'includes/footer.php';
 ?>