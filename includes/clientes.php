 <?php
    require_once '../model/config.php';
    $conexion = new mysqli(SERVER,DB_USER,DB_PASS,DB);
    $rut = $_POST['txtrut']; 
    //$nombre = "pimienta";
    $consulta = "select nombre FROM clientes WHERE rut = '$rut' ";

    $result = $conexion->query($consulta);
    
    $respuesta = new stdClass();
    if($result->num_rows > 0){
        $fila = $result->fetch_array();
        $respuesta->txtnombrecliente = $fila['nombre'];
           
    }else{
        echo "no funciona";
    }
    echo json_encode($respuesta);

?> 