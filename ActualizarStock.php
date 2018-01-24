<?php 
include 'includes/header.php';
 ?>

        

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stock <small>Modificar Stock</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="controller/modificarstock.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">

                      <?php 
                      require_once "model/data.php";

                        $d = new Data();
                        $id = $_POST["id"];
                        $productos = $d->verProducto($id);
                        foreach ($productos as $det) {
                         
                        echo "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='descripcion'>Descripcion <span class='required'>*</span>";
                        echo "</label>";
                        echo "<div class='col-md-6 col-sm-6 col-xs-12'>";
                          echo "<input type='text' id='descripcion' name='descripcion' required='required' class='form-control col-md-7 col-xs-12' disabled='disabled' value='".$det->nombre."'>";
                        echo "</div>";
                      echo "</div>";
                      echo "<div class='form-group'>";
                        echo "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='stock'>Stock <span class='required'>*</span>";
                        echo '</label>';
                        echo "<div class='col-md-6 col-sm-6 col-xs-12'>";
                          echo "<input type='number' id='stock' name='stock' required='required' class='form-control col-md-7 col-xs-12' value='".$det->stock."'>";
                        echo "</div>";
                      echo "</div>";
                      echo "<div class='form-group'>";
                        echo "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='stock'>preciocompra de compra<span class='required'>*</span>";
                        echo '</label>';
                        echo "<div class='col-md-6 col-sm-6 col-xs-12'>";
                          echo "<input type='number' id='preciocompra' name='preciocompra' required='required' class='form-control col-md-7 col-xs-12' value='".$det->preciocompra."'>";
                        echo "</div>";
                      echo "</div>";
                      echo "<div class='form-group'>";
                        echo "<label for='precioventa' class='control-label col-md-3 col-sm-3 col-xs-12'>Precio de venta</label>";
                        echo "<div class='col-md-6 col-sm-6 col-xs-12'>";
                          echo "<input id='precioventa' class='form-control col-md-7 col-xs-12' type='number' name='precioventa' value='".$det->precioventa."'>";

                           echo "<input id='id' class='form-control col-md-7 col-xs-12' type='hidden' name='id' value='".$id."'>";
                        }
                         ?>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>

                    </form>
                    
                  </div>
                </div>
              </div>
              
            </div>



</div>
        
<?php 

include 'includes/footer.php';
 ?>