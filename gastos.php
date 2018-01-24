<?php 
include 'includes/header.php';
 ?>

        

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Gastos <small>Agregar gastos</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="controller/agregarGastos.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo">Tipo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="tipo" name="tipo" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="monto" class="control-label col-md-3 col-sm-3 col-xs-12">Monto</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="monto" class="form-control col-md-7 col-xs-12" type="text" name="monto">
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
              <?php  
    if(isset($_GET["m"])){

      $m = $_GET["m"];

      switch ($m) {
        case "1":
          echo "error";
          break;
        case "2":
          echo "La cantidad debe ser mayor a 0";
          break;
        case "3":
        	echo "<div class='alert alert-warning alert-dismissible fade in' role='alert'>";
                    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>";
                    echo "</button>";
                    echo "Gasto guardado";
                  echo "</div>";
        	break;
        
      }
    }
    ?>
            </div>



</div
                  
<?php 

include 'includes/footer.php';
 ?>