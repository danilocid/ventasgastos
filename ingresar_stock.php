<?php 
include 'includes/header.php';
 ?>

        

        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Stock <small>Ingresar Stock</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="controller/agregarStock.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripcion <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="descripcion" name="descripcion" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigodebarra">Codigo de Barras<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="codigodebarra" name="codigodebarra" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock">Stock<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="stock" name="stock" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="precio_compra" class="control-label col-md-3 col-sm-3 col-xs-12">Precio de Compra</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="precio_compra" class="form-control col-md-7 col-xs-12" type="number" required="required" name="precio_compra">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="precio_venta" class="control-label col-md-3 col-sm-3 col-xs-12">Precio de Venta</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="precio_venta" required="required" class="form-control col-md-7 col-xs-12" type="number" name="precio_venta">
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
        	echo "Guardado";
        	break;
        
      }
    }
    ?>
            </div>



</div>
        
<?php 

include 'includes/footer.php';
 ?>