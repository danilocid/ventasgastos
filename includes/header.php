<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Control de ventas</title>

    <!-- Bootstrap -->
    <link href="includes/vendors/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="includes/vendors/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/jquery-ui-git.css">
    

    <!-- Custom Theme Style -->
   <link href="includes/css/custom.css" rel="stylesheet">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script>
    $(document).ready(function(){   
                    $("#txtnombre").autocomplete({
                        source: "includes/buscarnombre.php",
                        });
                    
                                        $("#txtrut").autocomplete({
                        source: "includes/buscarrut.php",
                        });
                    $("#txtrut").focusout(function(){
                      $.ajax({
                        url:'includes/clientes.php',
                        type:'POST',
                        dataType:'json',
                        data:{ txtrut:$('#txtrut').val()}
                      }).done(function(respuesta){
                        $("#txtnombrecliente").val(respuesta.txtnombrecliente);
                     });                       
                });
                  });

</script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Bazar Rosita</span></a>
            </div>

            <div class="clearfix"></div>

            

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu menu_fixed">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li ><a><i class="fa fa-home"></i> Ventas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Ventas</a></li>
                      <li><a href="ventas.php">Lista de Ventas</a></li>
                    </ul>
                  </li>
                  <li ><a><i class="fa fa-bar-chart"></i> Stock <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="stock.php">Ver Stock</a></li>
                      <li><a href="ingresar_stock.php">Ingresar Stock</a></li>
                    </ul>
                  </li>
                  
                  <li ><a><i class="fa fa-money"></i> Gastos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="verGastos.php">Listado de gastos</a></li>
                      <li><a href="gastos.php">Ingresar gastos</a></li>
                    </ul>
                  </li>
                  
                  <li ><a href="resumen.php"><i class="fa fa-university"></i> Resumen </a></li>
                  <li ><a href="crea_respaldo.php"><i class="fa fa-floppy-o"></i> Respaldar DB </a></li>
                  <li ><a href="ideas-pendientes.php"><i class="fa fa-check-circle"></i> Ideas </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>