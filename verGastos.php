<?php 
include 'includes/header.php';
 ?>

        

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Gastos <small>Listado de gastos</small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>   
                          <th>Fecha</th>
                          <th>Tipo</th>
                          <th>Detalle</th>
                          <th>Monto</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                        <?php
    
                            require_once "model/data.php";

                            $d = new Data();

                            $gastos = $d->getGastos();

                            foreach ($gastos as $g) {
                            echo "<tr>";
                            echo "<td>".$g->id."</td>";   
                            echo "<td>".$g->fecha."</td>";
                            echo "<td>".$g->tipo."</td>";
                            echo "<td>".$g->descripcion."</td>";
                            echo "<td>"."$".$g->monto."</td>";
                            
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